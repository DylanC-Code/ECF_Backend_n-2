<?php

namespace App\Models;

use App\Database\Db;

class StudentModel extends Model
{
  public function __construct()
  {
    $this->db = (new Db('ECF'))->connect();
  }

  public function getOne($id)
  {
    $req = $this->db->query("SELECT * FROM `etudiants` as et INNER JOIN examens as ex ON ex.id_etudiant = et.id_etudiant WHERE et.id_etudiant=$id", \PDO::FETCH_ASSOC)->fetchAll();
    $req[0]['matieres'] = [$req[0]['matiere'], $req[1]['matiere']];
    $req[0]['notes'] = [$req[0]['note'], $req[1]['note']];
    $req[0]['idexams'] = [$req[0]['id'], $req[1]['id']];

    unset($req[0]['matiere'], $req[0]['note'], $req[0]['idexam']);

    if (!empty($req[0])) return $req[0];

    throw new \Exception("Etudiants '$id' isn't found !");
  }

  public function getAll()
  {
    $req = $this->db->query("SELECT et.id_etudiant as id, et.nom, et.prenom, AVG(ex.note) as avg FROM `etudiants` as et INNER JOIN examens as ex ON et.id_etudiant =ex.id_etudiant GROUP BY ex.id_etudiant", \PDO::FETCH_ASSOC)->fetchAll();
    if (!empty($req)) return $req;

    throw new \Exception("Etudiants is empty");
  }
}
