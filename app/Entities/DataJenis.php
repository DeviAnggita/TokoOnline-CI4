<?php namespace App\Entities;

use CodeIgniter\Entity;

class DataJenis extends Entity
{
	public function getData()
    {
        return $this->$db->table('jenis')->get()->getResultArray();
    }
}