<?php

namespace App\Models;

use App\Database\Db;

class ExamModel extends Model
{
  public function __construct()
  {
    $this->db = (new Db('ECF'))->connect();
  }

  public function allGlobal()
  {
    $req = $this->db->query("SELECT AVG(ex.note) as avg FROM `etudiants` as et INNER JOIN `examens` as ex ON et.id_etudiant = ex.id_etudiant GROUP BY ex.id_etudiant;
    ", \PDO::FETCH_ASSOC)->fetchAll();

    if (!empty($req)) return $req;
  }

  public function getOne(int $id)
  {
    $req = $this->db->query("SELECT * FROM examens WHERE id=$id", \PDO::FETCH_ASSOC)->fetch();
    if (!empty($req)) return $req;
  }

  public function addOne($data)
  {
    $req = $this->db->prepare("UPDATE examens SET matiere=:matiere, note=:note WHERE id=:id");
    $req->bindParam(':matiere', $data['matiere'], \PDO::PARAM_STR);
    $req->bindParam(':note', $data['note']);
    $req->bindParam(':id', $data['id'], \PDO::PARAM_INT);
    $req->execute();

    $exam = $this->getOne($data['id']);

    return $exam;
  }

  public function deleteOne($id)
  {
    $exam = $this->getOne($id);

    $req = $this->db->prepare("DELETE FROM examens WHERE id=:id");
    $req->bindParam(':id', $id);
    $req->execute;

    return $exam;
  }
}
