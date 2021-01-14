<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MPengajuansub;

class Pengajuansub extends Controller
{

	public function __construct()
	{
		//Mendeklarasikan class PengajuanModel menggunakan $this->Pengajuan
		$this->pengajuansub = new MPengajuanSub();
		//$this->detail_pengajuan = new MPengajuan();


		/* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Pengajuan 
        */
	}

	//read
	public function index()
	{
		$model_pengajuansub = new MPengajuansub();
		 // $data = [
   //          'full_name' => 'Admin',
   //          'avatar'    => base_url().'/assets/dist/img/avatar.png',
   //          'icon'      => 'ion ion-home',
   //          'title'     => 'Pengajuan',
   //          'pengajuan' => $this->pengajuan->getPengajuan(),
   //          'jenis_kp'	=> $this->pengajuan->get_jenisketetapanpajak()
   //      ];	
		$data['full_name'] = 'Mangapul';
		$data['avatar'] = base_url().'/assets/dist/img/avatar.png';
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Surat Permintaan Surat Uraian Banding ';

		//data['pengajuan'] = $this->pengajuan->getPengajuan();
		//$data['pengajuan'] = $model->getPengajuan()->getResult();
		// $data['detail_pengajuan'] = $model->getDetailPengajuan()->getResult();
		//$data['jenis_permohonan'] = $model->get_jenisPermohonan()->getResult();
		//$data['jenis_pajak'] = $model->get_jenisPajak($jenis_permohonan);

        //print_r($data);
		return view('pengajuansub/pengajuansub',$data);
	}

}