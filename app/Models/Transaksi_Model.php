<?php namespace App\Models;
use CodeIgniter\Model;
class Transaksi_Model extends Model
{
	protected $table = 'tbl_transaksi';
	protected $primaryKey = 'transaksi_id';
	protected $allowedFields =['transaksi_id','produk','tanggal'];

	public function simpan($data){
		return $this->db->table($this->table)->insert($data);
	}
	public function scanProduk($tanggal = NULL){
		if($tanggal){
			return $this->db->table($this->table)->select('produk')->where($tanggal)->get()->getResultArray();
		}else{
			return $this->db->table($this->table)->select('produk')->get()->getResultArray();
		}
	}
	public function totalData($tanggal = NULL){
		if($tanggal){
			return $this->db->table($this->table)->where($tanggal)->countAllResults();
		}else{
			return $this->db->table($this->table)->countAll();
		}
	}
}