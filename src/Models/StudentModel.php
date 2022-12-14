<?php

namespace App\Models;

use App\Database\Db;

class StudentModel extends Model
{
  public function __construct(int $page = 0)
  {
    $this->page = $page;
    $this->db = (new Db('ECF'))->connect();
  }

  public function getOne($id)
  {
    $req = $this->db->prepare("SELECT * FROM etudiants WHERE id_etudiant=:id");
    $req->bindParam(":id", $id);
    $req->execute();
    $req = $req->fetch(\PDO::FETCH_ASSOC);

    if (isset($req)) return $req;

    throw new \Exception("Etudiants '$id' isn't found !");
  }

  public function getOneWithNote($id)
  {
    $req = $this->db->prepare("SELECT et.id_etudiant ,et.prenom,et.nom, GROUP_CONCAT(ex.matiere SEPARATOR '~') as matieres, GROUP_CONCAT(ex.note SEPARATOR '~') as notes, GROUP_CONCAT(ex.id SEPARATOR '~') as ids FROM `etudiants` as et INNER JOIN examens as ex ON ex.id_etudiant=et.id_etudiant WHERE et.id_etudiant=:id");
    $req->bindParam(':id', $id, \PDO::PARAM_INT);
    $req->execute();
    $req = $req->fetch(\PDO::FETCH_ASSOC);

    $req['matieres'] = explode("~", $req['matieres']);
    $req['notes'] = explode("~", $req['notes']);
    $req['ids'] = explode("~", $req['ids']);

    if (!empty($req)) return $req;

    throw new \Exception("Etudiants '$id' isn't found !");
  }

  public function getAll()
  {
    $req = $this->db->query("SELECT et.id_etudiant as id, et.nom, et.prenom, AVG(ex.note) as avg FROM `etudiants` as et INNER JOIN examens as ex ON et.id_etudiant =ex.id_etudiant GROUP BY ex.id_etudiant", \PDO::FETCH_ASSOC)->fetchAll();

    if (!empty($req)) return $req;

    throw new \Exception("Etudiants is empty");
  }

  public function deleteOne(int $id)
  {
    $req = $this->db->prepare("DELETE FROM etudiants WHERE id_etudiant=:id");
    $req->bindParam(":id", $id);
    $req->execute();
  }

  public function editOne(array $data)
  {
    $req = $this->db->prepare("UPDATE etudiants SET prenom=:prenom, nom=:nom WHERE id_etudiant=:id");
    $req->bindParam(':prenom', $data['prenom']);
    $req->bindParam('nom', $data['nom']);
    $req->bindParam(':id', $data['id']);
    $req->execute();
  }

  public function getByName(string $name)
  {
    $name = "%$name%";
    $req = $this->db->prepare("SELECT GROUP_CONCAT(id_etudiant SEPARATOR '~') as ids FROM etudiants WHERE nom LIKE :name OR prenom LIKE :name OR CONCAT(nom,' ',prenom) LIKE :name OR CONCAT(prenom,' ',nom) LIKE :name");
    $req->bindValue(':name', $name);
    $req->execute();
    $req = $req->fetch(\PDO::FETCH_ASSOC);

    if (empty($req)) throw new \Exception("Etudiants isn't found");

    return $this->getAllById(explode('~', $req['ids']));
  }

  public function getAllById(array $ids)
  {
    $students = [];
    foreach ($ids as $id) {
      $req = $this->db->prepare("SELECT et.id_etudiant as id, et.nom, et.prenom, AVG(ex.note) as avg FROM `etudiants` as et INNER JOIN examens as ex ON et.id_etudiant =ex.id_etudiant WHERE et.id_etudiant=:id GROUP BY ex.id_etudiant");
      $req->bindParam(':id', $id);
      $req->execute();
      $req = $req->fetch(\PDO::FETCH_ASSOC);

      array_push($students, $req);
    }

    if (!empty($students)) return $students;
  }
}
