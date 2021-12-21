<?php
namespace App\Controllers;

class Etalase extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
	}

	public function index()
	{
		$barang = new \App\Models\BarangModel();
		$model = $barang->findAll();
		return view('etalase/index',[
			'model' => $model,
		]);
	}

	public function beli()
	{
		$id = $this->request->uri->getSegment(3);

		$modelBarang = new \App\Models\BarangModel();

		$modelKomentar = new \App\Models\KomentarModel();

		$komentar = $modelKomentar->where('id_barang', $id)->findAll();

		$model = $modelBarang->find($id);

        
		if($this->request->getPost())
		{
			$data = $this->request->getPost();
			$this->validation->run($data, 'transaksi');
			$errors = $this->validation->getErrors();

			if(!$errors){
				$transaksiModel = new \App\Models\TransaksiModel();
				$transaksi = new \App\Entities\Transaksi();

				$barangModel = new \App\Models\BarangModel();
				$id_barang = $this->request->getPost('id_barang');
				$jumlah_pembelian = $this->request->getPost('jumlah');

				$barang = $barangModel->find($id_barang);
				$entityBarang = new \App\Entities\Barang();
				$entityBarang->id = $id_barang;

				$entityBarang->stok = $barang->stok-$jumlah_pembelian;
				$barangModel->save($entityBarang);

				$transaksi->fill($data);
				$transaksi->status = 0;
				$transaksi->created_by = $this->session->get('id');
				$transaksi->created_date = date("Y-m-d H:i:s");

				$transaksiModel->save($transaksi);

				$id = $transaksiModel->insertID();

				$segment = ['transaksi','view',$id];

				return redirect()->to(site_url($segment));
			
			}
		}

		return view('etalase/beli',[
			'model'=>$model,
			'komentar' => $komentar,
		]);

	}
}