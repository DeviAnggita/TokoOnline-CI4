<?php

namespace App\Models;

use CodeIgniter\Model;

class DataJenis extends Model
{
    protected $table      = 'jenis';
    protected $primaryKey = 'id_jenis';
    protected $allowedFields = ['jenisbarang'];
    public function getData()
    {
        return $this->db->table('jenis')->get()->getResultArray();
    }
}