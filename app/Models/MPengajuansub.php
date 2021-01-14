<?php
namespace App\Models;
use CodeIgniter\Model;

class MPengajuansub extends Model
{
	
	protected $table = "pengajuan";

	public function getPengajuan($id = false)
	{
		// $builder = $this->db->table('pengajuan');
  //       return $builder->get();

		if($id === false){
			// $builder =  $this->db->table('pengajuan');
			// return $builder->get();
			return $this->db->table('pengajuan')
                        ->get();			 
		}else{
			return $this->table('pengajuan')
                        ->where('ajuanId', $id)
                        ->get()
                        ->getRowArray();

		}

	}
}