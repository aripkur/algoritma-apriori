<?php namespace App\Models;
use CodeIgniter\Model;
class Stok_Model extends Model
{
	protected $table = 'tbl_stok';
	protected $primaryKey = 'id';
	protected $allowedFields =['produk','stok'];

	public function simpan($data){
		return $this->db->table($this->table)->insertBatch($data);
	}
	public function tampil(){
		return $this->db->table($this->table)->get()->getResultArray();
    }
    public function hapusSemua(){
        return $this->db->table($this->table)->truncate();
    }
}