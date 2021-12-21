<?php

namespace App\Models;

use CodeIgniter\Model;

class DataBarang extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id';
    protected $allowedFields = [
		'nama','harga','stok','gambar','created_date','created_by','updated_date','updated_by','jenis'
	];

    public function getData()
    {
        return $this->$db->table('barang')->join('jenis', 'barang.jenis=jenis.id_jenis')->get()->getResultArray();
    }
}