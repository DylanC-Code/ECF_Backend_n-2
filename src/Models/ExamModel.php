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
}
