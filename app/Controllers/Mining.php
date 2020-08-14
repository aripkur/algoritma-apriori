<?php namespace App\Controllers;
use App\Models\Transaksi_Model;
use App\Models\Stok_Model;

class Mining extends BaseController
{
    protected $support;
    protected $confiden;
    protected $jumlahTransaksi;
    protected $dataTransaksi;

    protected $tampilItemset1 = [];
    protected $tampilItemset1lolos = [];
    protected $tampilItemset2 = [];
    protected $tampilItemset2lolos = [];
    protected $tampilItemset3 = [];
    protected $tampilItemset3lolos = [];
    protected $tanggalMulai = "";
    protected $tanggalSelesai = "";

    protected $produk = [];

    public function __construct(){
        $this->transaksi = new Transaksi_Model();
    }
    
    public function index(){
        echo view('mining');
    }

    public function kosongkanStok(){
        $model = new Stok_Model();
        $eks = $model->hapusSemua();
        if($eks){
            echo "<script>alert('SUKSES KOSONGKAN STOK')</script>";
        }else{
            echo "<script>alert('GAGAL KOSONGKAN STOK')</script>";
        }
    }
    public function generatestok(){
        $model = new Stok_Model();
        $hsl_item1 = [];
        $dataTransaksi = $this->transaksi->scanProduk();
        foreach($dataTransaksi as $data ){
            $produk = explode (",",$data['produk']);
            foreach($produk as $item){
                $item = trim($item);
                if(!array_key_exists($item, $hsl_item1) && $item !== ""){
                    $hsl_item1[$item] =['produk' => $item, 'stok' => 10];
                }
            }
        }
        $eks = $model->simpan($hsl_item1);
        if($eks){
            echo "<script>alert('SUKSES GENERATE STOK')</script>";
        }else{
            echo "<script>alert('GAGAL GENERATE STOK')</script>";
        }
    }

    public function proses(){
        // $nilaiSupport = intval($this->request->getPost('support'));
        // $nilaiConfiden = intval($this->request->getPost('confiden'));
        $this->tanggalMulai = $this->request->getPost('mulai');
        $this->tanggalSampai = $this->request->getPost('sampai');

        $rangeTanggal = ['tanggal >=' => $this->tanggalMulai, 'tanggal <=' => $this->tanggalSampai];

        $this->support = intval($this->request->getPost('support'));
        $this->confiden = intval($this->request->getPost('confiden'));
        $this->jumlahTransaksi = $this->transaksi->totalData($rangeTanggal);
        $this->dataTransaksi = $this->transaksi->scanProduk($rangeTanggal);

        // var_dump($this->request->getPost());
        $this->itemset1();
        
    }
    public function itemset1(){
        $hsl_item1 = [];
        foreach($this->dataTransaksi as $data ){
            $produk = explode (",",$data['produk']);
            foreach($produk as $item){
                $item = trim($item);
                if($item !== ""){
                    if(array_key_exists($item, $hsl_item1)){
                        $hsl_item1[$item] +=1;
                    }else{
                        $hsl_item1[$item] = 1;
                    }
                }
            }
        }

        $itemset1 = [];
        foreach($hsl_item1 as $key => $val){
            $item_support = round(($val/$this->jumlahTransaksi)*100, 2) ;
            $keterangan = $item_support < $this->support ? 'tidak lolos' : 'lolos';
            $itemset1[$key] = ['jumlah'=>$val, 'support'=>$item_support, 'keterangan' => $keterangan];
        }
        $this->itemset2($itemset1);
    }

    public function itemset2($dataItemset1){
        $item1 = $dataItemset1;
        $item1_lolos = [];
        $tampilItem1Lolos = [];
        foreach($item1 as $item => $key){
            if($key['keterangan'] == "lolos"){
                $tampilItem1Lolos += [$item => $key];
                array_push($item1_lolos, $item);
            }
        } 

        if(empty($item1_lolos)){
            echo "<script>alert('ITEMSET 1 TIDAK ADA YANG LOLOS NILAI SUPPORT')</script>";
            die;
        }
        $this->tampilItemset1 = $item1;
        $this->tampilItemset1Lolos = $tampilItem1Lolos;
        // echo "============== item set 1 keterangan ============== <br/>";
        // echo "<pre>";
        // print_r($item1);
        // echo "</pre>";
        // echo "==============  ============== <br/>";
        // echo "============== item set 1 lolos keterangan ============== <br/>";
        // echo "<pre>";
        // print_r($deb);
        // echo "</pre>";
        // echo "==============  ============== <br/>";

        // echo "============== item set 1 lolos ============== <br/>";
        // echo "<pre>";
        // print_r($item1_lolos);
        // echo "</pre>";
        // echo "==============  ============== <br/>";

        $kombinasi_item2 = [];
        $item = array_keys($item1_lolos);
        for($i=0; $i < sizeof($item1_lolos); $i++){
            foreach ($item1_lolos as $key) {
              if($item1_lolos[$i] !== $key && !in_array($item1_lolos[$i].','.$key, $kombinasi_item2) && !in_array($key.','.$item1_lolos[$i], $kombinasi_item2)){
                  array_push($kombinasi_item2, $item1_lolos[$i].",".$key);
              }
            }
          }
        // echo "============== kombinasi itemset 2 ============== <br/>";
        // echo "<pre>";
        // print_r($kombinasi_item2);
        // echo "</pre>";
        // echo "==============  ============== <br/>";

        $hsl_item2 = [];
        foreach($kombinasi_item2 as $rowitem){
            foreach($this->dataTransaksi as $data){
                $scan_saya = explode (",",$data['produk']);
                $item = explode (",",$rowitem);
                $ket = 0;
                foreach($item as $key){
                    if(in_array($key, $scan_saya)){
                        $ket += 1;
                    }
                }
                if($ket == 2){
                    if(array_key_exists($rowitem, $hsl_item2)){
                        $hsl_item2[$rowitem] += 1;
                    }else{
                        $hsl_item2 += [$rowitem => 1];
                    }
                }
            }
        }
        // echo "======== item 2===========";
        // echo "<pre>";
        // print_r($hsl_item2);
        // echo "</pre>";
        // echo "===================";

        $itemset2 = [];
        foreach($hsl_item2 as $key => $val){
            $per_item = explode(",", $key);
            $item_support = round(($val/$this->jumlahTransaksi)*100, 2) ;
            $keterangan = $item_support < $this->support ? 'tidak lolos' : 'lolos';
            $itemset2[$key] = ['item1'=>$per_item[0],'item2'=>$per_item[1],'jumlah'=>$val, 'support'=>$item_support, 'keterangan'=>$keterangan];
        }
        // return $itemset2;
        $this->itemset3($itemset2);
    }

    public function itemset3($dataItemset2){
        $item2 = $dataItemset2;
        $item2_lolos = [];
        $i = 0;
        foreach($item2 as $item => $key){
            if($key['keterangan'] == "lolos"){
                $item2_lolos[$i] = $key;
               $i++;
            }
        }
        $this->tampilItemset2 = $item2;
        $this->tampilItemset2lolos = $item2_lolos;
        if(empty($item2_lolos)){
            echo "<script> alert('item2_lolos kosong')</script>";
            $this->asosiasi($item2, []);
        }else{
            echo "<script> alert('item2_lolos ada')</script>";
            $kombinasi_item3= [];
            for($i=0; $i < sizeof($item2_lolos); $i++){
                foreach ($item2_lolos as $key) {
                    if($item2_lolos[$i]['item1'] == $key['item1'] && $item2_lolos[$i]['item2'] !== $key['item2']){
                        if(!in_array($item2_lolos[$i]['item1'].','.$item2_lolos[$i]['item2'].','.$key['item2'], $kombinasi_item3) && !in_array($item2_lolos[$i]['item1'].','.$key['item2'].','.$item2_lolos[$i]['item2'], $kombinasi_item3)){
                            array_push($kombinasi_item3,$item2_lolos[$i]['item1'].','.$item2_lolos[$i]['item2'].','.$key['item2']);
                        }
                    }
                }
            }

            $hsl_item3 = [];
            foreach($kombinasi_item3 as $key => $rowitem){
                foreach($this->dataTransaksi as $data){
                    $scan_saya = explode (",",$data['produk']);
                    $item = explode (",",$rowitem);
                    $ket = 0;
                    foreach($item as $key){
                        if(in_array($key, $scan_saya)){
                            $ket +=1;
                        }
                    }
                    if($ket == 3){
                        if(array_key_exists($rowitem, $hsl_item3)){
                            $hsl_item3[$rowitem] += 1;
                        }else{
                            $hsl_item3 += [$rowitem => 1];
                        }
                    }
                }
            }
    
            $itemset3 = [];
            foreach($hsl_item3 as $key => $val){
                $per_item = explode(",", $key);
                $item_support = round(($val/$this->jumlahTransaksi)*100, 2) ;
                $keterangan = $item_support < $this->support ? 'tidak lolos' : 'lolos';
                $itemset3[$key] = ['item1'=>$per_item[0],'item2'=>$per_item[1],'item3'=>$per_item[2],'jumlah'=>$val, 'support'=>$item_support, 'keterangan'=>$keterangan];
            }
            
            $this->asosiasi([],$itemset3);
        } 
    }

    public function asosiasi($dataItemset2 = [], $dataItemset3 = []){
        $debugData = [];
        $dataSaran = [];

        if(!empty($dataItemset2)){
            echo "<script> alert('KOMBINASI ITEMSET 3 TIDAK DAPAT DIBENTUK, KARENA ITEMSET 2 TIDAK LOLOS SUPPORT SEMUA')</script>";
            $satuitem=[];
            $jumlahX =[];
            $jumlahXY =[];
            $hsl_assosiasi = [];
            foreach($dataItemset2 as $key => $val){
                $ketX = 0;
                foreach($this->dataTransaksi as $data){
                    $scan_saya = explode (",",$data['produk']);
                    if(in_array($val['item1'], $scan_saya)){
                        $ketX += 1;
                    }
                }
                $konfiden = round(($val['jumlah']/$ketX)*100, 2);
                $debugSupport = $val['support'] < $this->support ? "T | ".$val['support'] : "L | ".$val['support'];
                $debugConfiden = $konfiden < $this->confiden ? "T | ".$konfiden : "L | ".$konfiden;

                $debugData[$val['item1'].' => '.$val['item2']] = ['itemX' => $val['item1'], 'itemY' => $val['item2'], 'X'=>$ketX, 'XY'=>$val['jumlah'], 'confiden' => $debugConfiden, 'support' => $debugSupport ];

                // $keterangan = (($val['support'] > $this->support) && ($konfiden > $this->confiden)) ? 'lolos' : 'tidak lolos support';
                // if($keterangan == 'lolos'){
                //     $hsl_assosiasi[$val['item1'].' => '.$val['item2']] = ['X'=>$ketX, 'XY'=>$val['jumlah'], 'support'=>$val['support'],'confiden'=>$konfiden, 'keterangan'=>$keterangan];
                // }

                
            }
            $data['debugData'] = $debugData;
            // $data['hasilAsosiasi2'] = $hsl_assosiasi;
        }else{
            $item3 = $dataItemset3;
            $item3_lolos = [];
            $i = 0;
            foreach($item3 as $item => $key){
                if($key['keterangan'] == "lolos"){
                    $item3_lolos[$i] = $key;
                   $i++;
                }
            }
            
            $this->tampilItemset3 = $item3;

            if(empty($item3_lolos)){
                echo "<script> alert('ITEMSET 3 TIDAK ADA YANG LOLOS NILAI SUPPORT')</script>";
                
                $satuitem=[];
                $jumlahX =[];
                $jumlahXY =[];
                $hsl_assosiasi = [];
                foreach($this->tampilItemset2 as $key => $val){
                    $ketX = 0;
                    foreach($this->dataTransaksi as $data){
                        $scan_saya = explode (",",$data['produk']);
                        if(in_array($val['item1'], $scan_saya)){
                            $ketX += 1;
                        }
                    }
                    $konfiden = round(($val['jumlah']/$ketX)*100, 2);
                    $keterangan = (($val['support'] > $this->support) && ($konfiden > $this->confiden)) ? 'lolos' : 'tidak lolos support';
                    $debugSupport = $val['support'] < $this->support ? "T | ".$val['support'] : "L | ".$val['support'];
                    $debugConfiden = $konfiden < $this->confiden ? "T | ".$konfiden : "L | ".$konfiden;

                    $debugData[$val['item1'].' => '.$val['item2']] = ['itemX' => $val['item1'], 'itemY' => $val['item2'], 'X'=>$ketX, 'XY'=>$val['jumlah'], 'confiden' => $debugConfiden, 'support' => $debugSupport ];

                    // $keterangan = $val['support'] < $this->support ? 'tidak lolos support' : 'lolos';
                    // if($keterangan == "lolos"){
                    //     $hsl_assosiasi[$val['item1'].' => '.$val['item2']] = ['X'=>$ketX, 'XY'=>$val['jumlah'], 'support'=>$val['support'],'confiden'=>$konfiden, 'keterangan'=>$keterangan];
                    // }
                }
                $data['debugData'] = $debugData;
                // $data['hasilAsosiasi2'] = $hsl_assosiasi ;
            }else{
                echo "<script> alert('ITEMSET 3 LOLOS NILAI SUPPORT')</script>";
                $this->tampilItemset3Lolos = $item3_lolos;

                $duaitem=[];
                $jumlahX =[];
                $jumlahXY =[];
                $hsl_assosiasi = [];
                foreach($item3_lolos as $key => $val){
                    for($i=1;$i<=3;$i++){
                      for($a=1; $a<=3; $a++){
                        if($val['item'.$i] !== $val['item'.$a]&& !in_array($val['item'.$i].','.$val['item'.$a], $duaitem) && !in_array($val['item'.$a].','.$val['item'.$i], $duaitem) ){
                          array_push($duaitem,$val['item'.$i].','. $val['item'.$a]);
                        }
                      }

                      if(!in_array($val['item'.$i], $dataSaran)){
                          array_push($dataSaran, $val['item'.$i]);
                      }
                    }
              
                    for($c=1;$c<=3;$c++){
                      for($d=0; $d<3; $d++){
                        $row_duaitem = explode(',',$duaitem[$d]);
                        if(!in_array($val['item'.$c], $row_duaitem)){
                          if(!in_array($val['item'.$c].' => '.$duaitem[$d], $hsl_assosiasi)){ 
                                $ketX = 0;
                                $ketXY = 0;
                                foreach($this->dataTransaksi as $data){
                                  $scan_saya = explode (",",$data['produk']);
                                  if(in_array($val['item'.$c], $scan_saya)){
                                    $ketX += 1;
                                    if(in_array($row_duaitem[0], $scan_saya) && in_array($row_duaitem[1], $scan_saya)){
                                      $ketXY += 1;
                                    }
                                  }
                                }
                                $konfiden = round(($ketXY/$ketX)*100, 2);
                                if($konfiden > $this->confiden ) {
                                    $hsl_assosiasi[$val['item'.$c].' => '.$duaitem[$d]] = ['X'=>$ketX, 'XY'=>$ketXY, 'confiden'=>$konfiden];
                                }
                          }
                          if(!in_array($duaitem[$d].' => '.$val['item'.$c], $hsl_assosiasi)){ 
                                $ketX = 0;
                                $ketXY = 0;
                                foreach($this->dataTransaksi as $data){
                                  $scan_saya = explode (",",$data['produk']);
                                  if(in_array($row_duaitem[0], $scan_saya) && in_array($row_duaitem[1], $scan_saya)){
                                    $ketX += 1;
                                    if(in_array($val['item'.$c], $scan_saya)){
                                      $ketXY += 1;
                                    }
                                  }
                                }
                                $konfiden = round(($ketXY/$ketX)*100, 2);
                                if($konfiden > $this->confiden ) {
                                    $hsl_assosiasi[$duaitem[$d].' => '.$val['item'.$c]] = ['X'=>$ketX, 'XY'=>$ketXY, 'confiden'=>$konfiden];
                                }
                          }
                        }
                      }
                    }
                }
                // GAE SARAN
                $tampilSaran = [];
                foreach($this->tampilItemset1 as $row => $val){
                    foreach($dataSaran as $rowSaran => $valSaran){
                        if($row == $valSaran){
                            $tampilSaran[$row] = ['jumlah' => $val['jumlah']];
                        }
                    }
                }

                $data['itemset3'] = $this->tampilItemset3;
                $data['itemset3Lolos'] = $this->tampilItemset3Lolos;
                $data['hasilAsosiasi3'] = $hsl_assosiasi ;
                $data['saran'] = $tampilSaran;
            }
        }


        $data['keterangan'] = ['tanggalMulai' => $this->tanggalMulai, 'tanggalSelesai' => $this->tanggalSampai, 'jumlahTransaksi' => $this->jumlahTransaksi];
        $data['itemset1'] = $this->tampilItemset1;
        $data['itemset1Lolos'] = $this->tampilItemset1Lolos;
        $data['itemset2'] = $this->tampilItemset2;
        $data['itemset2Lolos'] = $this->tampilItemset2lolos;
        echo view('mining',$data);
    }

    public function saran(){

    }
}