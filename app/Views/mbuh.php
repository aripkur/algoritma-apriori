<!-- <?php if(!empty($hasilAsosiasi3)):?>
				<div class="collapsible-header">Hasil Asosiasi</div>
				<div class="collapsible-body">
					<table class="highlight">
						<thead>
							<tr>
								<th>No</th>
								<th>Produk</th>
								<th>jumlah X</th>
								<th>jumlah XY</th>
								<th>confiden</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 1; foreach($hasilAsosiasi3 as $rowhasilAsosiasi3 => $valhasilAsosiasi3):?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $rowhasilAsosiasi3 ?></td>
									<td><?= $valhasilAsosiasi3['X'] ?></td>
									<td><?= $valhasilAsosiasi3['XY'] ?></td>
									<td><?= $valhasilAsosiasi3['confiden'] ?></td>
								</tr>
							
						<?php $no++; endforeach;?>
						</tbody>
					</table>
				</div>
				<?php endif;?>
			</li>
		</ul>
		<?php if(!empty($itemset1)):?>
			<h5>Itemset 1</h5>
			<div class="z-depth-3" style="padding: 1em">
			
			<table class="highlight">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>jumlah</th>
						<th>Support</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach($itemset1 as $rowItem1 => $valItem1):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $rowItem1 ?></td>
							<td><?= $valItem1['jumlah'] ?></td>
							<td><?= $valItem1['support'] ?></td>
							<td><?= $valItem1['keterangan'] ?></td>
						</tr>
					
				<?php $no++; endforeach;?>
				</tbody>
			</table>
			</div>
		<?php endif;?>

		<?php if(!empty($itemset1Lolos)):?>
			<h5>Itemset 1 Lolos Support</h5>
			<div class="z-depth-3" style="padding: 1em">

			<table class="highlight">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>jumlah</th>
						<th>Support</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach($itemset1Lolos as $rowItem1Lolos => $valItem1Lolos):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $rowItem1Lolos ?></td>
							<td><?= $valItem1Lolos['jumlah'] ?></td>
							<td><?= $valItem1Lolos['support'] ?></td>
						</tr>
					
				<?php $no++; endforeach;?>
				</tbody>
			</table>
			</div>
		<?php endif;?>

		<?php if(!empty($itemset2)):?>
			<h5>Kombinasi Itemset 2 </h5>
			<div class="z-depth-3" style="padding: 1em">

			<table class="highlight">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk 1</th>
						<th>Produk 2</th>
						<th>jumlah</th>
						<th>Support</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach($itemset2 as $rowItemset2 => $valItemset2):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $valItemset2['item1'] ?></td>
							<td><?= $valItemset2['item2'] ?></td>
							<td><?= $valItemset2['jumlah'] ?></td>
							<td><?= $valItemset2['support'] ?></td>
							<td><?= $valItemset2['keterangan'] ?></td>
						</tr>
					
				<?php $no++; endforeach;?>
				</tbody>
			</table>
			</div>
		<?php endif;?>

		<?php if(!empty($itemset2Lolos)):?>
			<h5>Kombinasi Itemset 2 Lolos</h5>
			<div class="z-depth-3" style="padding: 1em">
			<table class="highlight">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk 1</th>
						<th>Produk 2</th>
						<th>jumlah</th>
						<th>Support</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach($itemset2Lolos as $rowItemset2Lolos => $valItemset2Lolos):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $valItemset2Lolos['item1'] ?></td>
							<td><?= $valItemset2Lolos['item2'] ?></td>
							<td><?= $valItemset2Lolos['jumlah'] ?></td>
							<td><?= $valItemset2Lolos['support'] ?></td>
						</tr>
					
				<?php $no++; endforeach;?>
				</tbody>
			</table>
			</div>
		<?php endif;?>

		<?php if(!empty($itemset3)):?>
			<h5>Kombinasi Itemset 3 </h5>
			<div class="z-depth-3" style="padding: 1em">

			<table class="highlight">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk 1</th>
						<th>Produk 2</th>
						<th>Produk 3</th>
						<th>jumlah</th>
						<th>Support</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach($itemset3 as $rowItemset3 => $valItemset3):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $valItemset3['item1'] ?></td>
							<td><?= $valItemset3['item2'] ?></td>
							<td><?= $valItemset3['item3'] ?></td>
							<td><?= $valItemset3['jumlah'] ?></td>
							<td><?= $valItemset3['support'] ?></td>
							<td><?= $valItemset3['keterangan'] ?></td>
						</tr>
					
				<?php $no++; endforeach;?>
				</tbody>
			</table>
			</div>
		<?php endif;?>

		<?php if(!empty($itemset3Lolos)):?>
			<h5>Kombinasi Itemset 3 Lolos</h5>
			<div class="z-depth-3" style="padding: 1em">
			<table class="highlight">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk 1</th>
						<th>Produk 2</th>
						<th>Produk 3</th>
						<th>jumlah</th>
						<th>Support</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach($itemset3Lolos as $rowItemset3Lolos => $valItemset3Lolos):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $valItemset3Lolos['item1'] ?></td>
							<td><?= $valItemset3Lolos['item2'] ?></td>
							<td><?= $valItemset3Lolos['item3'] ?></td>
							<td><?= $valItemset3Lolos['jumlah'] ?></td>
							<td><?= $valItemset3Lolos['support'] ?></td>
						</tr>
					
				<?php $no++; endforeach;?>
				</tbody>
			</table>
			</div>
		<?php endif;?>

		<?php if(!empty($hasilAsosiasi2)):?>
			<h5>Hasil Asosiasi</h5>
			<div class="z-depth-3" style="padding: 1em">
			<table class="highlight">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>jumlah X</th>
						<th>jumlah XY</th>
						<th>Support</th>
						<th>confiden</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach($hasilAsosiasi2 as $rowhasilAsosiasi2 => $valhasilAsosiasi2):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $rowhasilAsosiasi2 ?></td>
							<td><?= $valhasilAsosiasi2['X'] ?></td>
							<td><?= $valhasilAsosiasi2['XY'] ?></td>
							<td><?= $valhasilAsosiasi2['support'] ?></td>
							<td><?= $valhasilAsosiasi2['confiden'] ?></td>
							<td><?= $valhasilAsosiasi2['keterangan'] ?></td>
						</tr>
					
				<?php $no++; endforeach;?>
				</tbody>
			</table>
			</div>
		<?php endif;?>

		<?php if(!empty($hasilAsosiasi3)):?>
			<h5>Hasil Asosiasi</h5>
			<div class="z-depth-3" style="padding: 1em">

			<table class="highlight">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>jumlah X</th>
						<th>jumlah XY</th>
						<th>confiden</th>
					</tr>
				</thead>
				<tbody>
				<?php $no = 1; foreach($hasilAsosiasi3 as $rowhasilAsosiasi3 => $valhasilAsosiasi3):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $rowhasilAsosiasi3 ?></td>
							<td><?= $valhasilAsosiasi3['X'] ?></td>
							<td><?= $valhasilAsosiasi3['XY'] ?></td>
							<td><?= $valhasilAsosiasi3['confiden'] ?></td>
						</tr>
					
				<?php $no++; endforeach;?>
				</tbody>
			</table>
			</div>
		<?php endif;?> -->



		
			<!-- HASIL ASOSIASI 2 -->
			<li>
				<?php if(!empty($hasilAsosiasi2)):?>
				<div class="collapsible-header">Hasil Asosiasi</div>
				<div class="collapsible-body">
					<table class="highlight">
						<thead>
							<tr>
								<th>No</th>
								<th>Produk</th>
								<th>jumlah X</th>
								<th>jumlah XY</th>
								<th>Support</th>
								<th>confiden</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 1; foreach($hasilAsosiasi2 as $rowhasilAsosiasi2 => $valhasilAsosiasi2):?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $rowhasilAsosiasi2 ?></td>
									<td><?= $valhasilAsosiasi2['X'] ?></td>
									<td><?= $valhasilAsosiasi2['XY'] ?></td>
									<td><?= $valhasilAsosiasi2['support'] ?></td>
									<td><?= $valhasilAsosiasi2['confiden'] ?></td>
									<td><?= $valhasilAsosiasi2['keterangan'] ?></td>
								</tr>
							
						<?php $no++; endforeach;?>
						</tbody>
					</table>
				</div>
				<?php endif;?>
			</li>



			public function itemset1(){
        $hsl_item1 = [];
        foreach($this->dataTransaksi as $data ){
            $scan_saya = explode (",",$data['produk']);
            foreach($scan_saya as $item){
                $item = trim($item);
                if(array_key_exists($item, $hsl_item1)){
                    $hsl_item1[$item] +=1;
                }else{
                    $hsl_item1[$item] = 1;
                }
            }
        }

        $itemset1 = [];
        foreach($hsl_item1 as $key => $val){
            $item_support = round(($val/$this->jumlahTransaksi)*100, 2) ;
            $keterangan = $item_support < $this->support ? 'tidak lolos' : 'lolos';
            $itemset1[$key] = ['jumlah'=>$val, 'support'=>$item_support, 'keterangan' => $keterangan];
        }
        // return $itemset1;
        echo "============== item set 1 ============== <br/>";
        echo "<pre>";
        print_r($itemset1);
        echo "</pre>";
        echo "==============  ============== <br/>";
        return $itemset1;
    }

    public function itemset2(){
        $item1 = $this->itemset1();
        $item1_lolos = [];
        foreach($item1 as $item => $key){
            if($key['keterangan'] == "lolos"){
                array_push($item1_lolos, $item);
            }
        } 
        // echo "============== item set 1 ============== <br/>";
        // echo "<pre>";
        // print_r($item1);
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
                $hilangkanSpasi = str_replace(" ", "",$data['produk']);
                $scan_saya = explode (",",$hilangkanSpasi);
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
        echo "<pre>";
        print_r($kombinasi_item2);
        echo "</pre>";
        echo "===================";
        echo "<pre>";
        print_r($hsl_item2);
        echo "</pre>";
        echo "===================";

        $itemset2 = [];
        foreach($hsl_item2 as $key => $val){
            $per_item = explode(",", $key);
            $item_support = round(($val/$this->jumlahTransaksi)*100, 2) ;
            $keterangan = $item_support < $this->support ? 'tidak lolos' : 'lolos';
            $itemset2[$key] = ['item1'=>$per_item[0],'item2'=>$per_item[1],'jumlah'=>$val, 'support'=>$item_support, 'keterangan'=>$keterangan];
        }
        return $itemset2;
    }

    public function itemset3(){
        $item2 = $this->itemset2();

        $item2_lolos = [];
        $i = 0;
        // $deb =[];
        foreach($item2 as $item => $key){
            if($key['keterangan'] == "lolos"){
                $item2_lolos[$i] = $key;
                // array_push($deb, $item);
               $i++;
            }
        }
        echo "============== item set 2 ============== <br/>";
        echo "<pre>";
        print_r($item2);
        echo "</pre>";
        echo "==============  ============== <br/>";
        
        // echo "============== item set 2 lolos ============== <br/>";
        // echo "<pre>";
        // print_r($deb);
        // echo "</pre>";
        // echo "==============  ============== <br/>";
    // die;

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
        echo "============== kombinasi item 3 ============== <br/>";
        echo "<pre>";
        print_r($kombinasi_item3);
        echo "</pre>";
        echo "============== ============== <br/>";

    // die;
        $hsl_item3 = [];
        foreach($kombinasi_item3 as $key => $rowitem){
            foreach($this->dataTransaksi as $data){
                $hilangkanSpasi = str_replace(" ", "",$data['produk']);
                $scan_saya = explode (",",$hilangkanSpasi);
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
        echo "============== kombinasi item 3 ============== <br/>";
        echo "<pre>";
        print_r($hsl_item3);
        echo "</pre>";
        echo "============== ============== <br/>";

        $itemset3 = [];
        foreach($hsl_item3 as $key => $val){
            $per_item = explode(",", $key);
            $item_support = round(($val/$this->jumlahTransaksi)*100, 2) ;
            $keterangan = $item_support < $this->support ? 'tidak lolos' : 'lolos';
            $itemset3[$key] = ['item1'=>$per_item[0],'item2'=>$per_item[1],'item3'=>$per_item[2],'jumlah'=>$val, 'support'=>$item_support, 'keterangan'=>$keterangan];
        }

        echo "============== kombinasi item 3 keterangan ============== <br/>";
        echo "<pre>";
        print_r($itemset3);
        echo "</pre>";
        echo "============== ============== <br/>";
        return $itemset3;
    }

    public function asosiasi(){
        $item3 = $this->itemset3();

        $item3_lolos = [];
        $i = 0;
        // $deb =[];
        foreach($item3 as $item => $key){
            if($key['keterangan'] == "lolos"){
                $item3_lolos[$i] = $key;
                // array_push($deb, $item);
               $i++;
            }
        }
        echo "============== item 3 lolos ============== <br/>";
        echo "<pre>";
        print_r($item3_lolos);
        echo "</pre>";
        echo "============== ============== <br/>";
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
            }
      
            for($c=1;$c<=3;$c++){
              for($d=0; $d<3; $d++){
                $row_duaitem = explode(',',$duaitem[$d]);
                if(!in_array($val['item'.$c], $row_duaitem)){
                  if(!in_array($val['item'.$c].' => '.$duaitem[$d], $hsl_assosiasi)){ 
                        $ketX = 0;
                        $ketXY = 0;
                        foreach($this->dataTransaksi as $data){
                          $hilangkanSpasi = str_replace(" ", "",$data['produk']);
                          $scan_saya = explode (",",$hilangkanSpasi);
                          if(in_array($val['item'.$c], $scan_saya)){
                            $ketX += 1;
                            if(in_array($row_duaitem[0], $scan_saya) && in_array($row_duaitem[1], $scan_saya)){
                              $ketXY += 1;
                            }
                          }
                        }
                        $konfiden = round(($ketXY/$ketX)*100, 2);
                    $hsl_assosiasi[$val['item'.$c].' => '.$duaitem[$d]] = ['X'=>$ketX, 'XY'=>$ketXY, 'confiden'=>$konfiden];
                  }
                  if(!in_array($duaitem[$d].' => '.$val['item'.$c], $hsl_assosiasi)){ 
                        $ketX = 0;
                        $ketXY = 0;
                        foreach($this->dataTransaksi as $data){
                          $hilangkanSpasi = str_replace(" ", "",$data['produk']);
                          $scan_saya = explode (",",$hilangkanSpasi);
                          if(in_array($row_duaitem[0], $scan_saya) && in_array($row_duaitem[1], $scan_saya)){
                            $ketX += 1;
                            if(in_array($val['item'.$c], $scan_saya)){
                              $ketXY += 1;
                            }
                          }
                        }
                        $konfiden = round(($ketXY/$ketX)*100, 2);
                    $hsl_assosiasi[$duaitem[$d].' => '.$val['item'.$c]] = ['X'=>$ketX, 'XY'=>$ketXY, 'confiden'=>$konfiden];
                  }
                }
              }
            }
        }

        echo "============== asosiasi ============== <br/>";
        echo "<pre>";
        print_r($hsl_assosiasi);
        echo "</pre>";
        echo "============== ============== <br/>";
    }
