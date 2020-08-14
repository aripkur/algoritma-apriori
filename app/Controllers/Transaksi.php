<?php namespace App\Controllers;
use App\Models\Transaksi_Model;

class Transaksi extends BaseController
{
	public function __construct(){
        $this->transaksi = new Transaksi_Model();
	}
	public function index(){
		$data['transaksi'] = $this->transaksi->findAll();
		echo view('transaksi',$data);
	}
	public function upload(){
		$validation =  \Config\Services::validation();
        $file = $this->request->getFile('fileexcel');
        $data = array(
            'fileexcel'           => $file,
        );
    
        if($validation->run($data, 'transaction') == FALSE){
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('transaksi'));
        } else {
    
            // ambil extension dari file excel
            $extension = $file->getClientExtension();
            
            // format excel 2007 ke bawah
            if('xls' == $extension){
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            // format excel 2010 ke atas
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            
            $spreadsheet = $reader->load($file);
            $data = $spreadsheet->getActiveSheet()->toArray();
            
            foreach($data as $idx => $row){
                
                if($idx == 0) {
                    continue;
                }
                
                $transaksi_id = $row[0];
                $produk       = $row[1];
                $tanggal      = $row[2];
    
                $data = [
                    "transaksi_id"=> $transaksi_id,
                    "produk"      => $produk,
                    "tanggal"     => $tanggal
                ];
    
                $simpan = $this->transaksi->simpan($data);
            }
    
            if($simpan){
                session()->setFlashdata('success', 'Berhasil Import Data');
                return redirect()->to(base_url('transaksi')); 
            }else{
                session()->setFlashdata('error', 'error pas query insert database');
                return redirect()->to(base_url('transaksi')); 
            }
        }
    }
    
}