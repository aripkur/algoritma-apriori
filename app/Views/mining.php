<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/materialize.min.css')?>">
	<script src="<?=base_url('assets/js/jquery-3.5.1.min.js')?>"></script>
	<script src="<?=base_url('assets/js/materialize.min.js')?>"></script>
    <title>Document</title>
	<style>
		body{
			height:110vh;
		}
		h5{
			margin-top:50px;
		}
		.collapsible-body table {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		.collapsible-body table td, table th {
			border: 1px solid #ddd;
			padding: 8px;
			text-align:center;
		}

		.collapsible-body table tr:nth-child(even){background-color: #f2f2f2;}

		.collapsible-body table tr:hover {background-color: #ddd;}

		.collapsible-body table th {
			padding-top: 12px;
			padding-bottom: 12px;
			background-color: #4CAF50;
			color: white;
		}
		.btn{
			background-color: #4CAF50;
		}
		.btn:hover{
			background-color: #4CAF50;
		}
		nav, .nav-wrapper{
			background-color: #4CAF50;
		}
	</style>
</head>
<body>
	<div class="navbar-fixed" >
		<nav style="margin-bottom: 15px ">
			<div class="nav-wrapper container">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="<?=base_url('transaksi')?>">Transaksi</a></li>
					<li><a href="<?=base_url('mining')?>">Mining</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container">
		<h5>Form Input</h5>
		<form action="<?=base_url('mining/proses')?>" method="post" class="z-depth-3 row" style="padding: 1em">
			<div class="input-field col s6">
				<input id="support" name="support" type="number" class="validate" step="0.01">
				<label for="support">Nila Support</label>
			</div>
			<div class="input-field col s6">
				<input id="confiden" name="confiden" type="number" class="validate" step="0.01">
				<label for="confiden">Nila Confiden</label>
			</div>
			<div class="input-field col s6">
				<input type="text" class="datepicker" name="mulai" >
				<label>Tanggal Mulai</label>
			</div>
			<div class="input-field col s6">
				<input type="text" class="datepicker" name="sampai" >
				<label>Tanggal Sampai</label>
			</div>
			<div class="center-align">
				<button type="submit" class="btn "> Proses </button>
			</div>
		</form>

		<h5>Hasil Mining</h5>
		<ul class="collapsible">
			<!-- ITEMSET 1 -->
			<li>
				<?php if(!empty($itemset1)):?>
				<div class="collapsible-header">Itemset 1</div>
				<div class="collapsible-body">
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
			</li>

			<!-- ITEMSET 1 LOLOS -->
			<li>
				<?php if(!empty($itemset1Lolos)):?>
				<div class="collapsible-header">Itemset 1 Lolos </div>
				<div class="collapsible-body">
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
			</li>

			<!-- ITEMSET 2 -->
			<li>
				<?php if(!empty($itemset2)):?>
				<div class="collapsible-header">Kombinasi Itemset 2</div>
				<div class="collapsible-body">
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
			</li>

			<!-- ITEMSET 2 LOLOS -->
			<li>
				<?php if(!empty($itemset2Lolos)):?>
				<div class="collapsible-header">Kombinasi Itemset 2 Lolos</div>
				<div class="collapsible-body">
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
			</li>

			<!-- ITEMSET 3 -->
			<li>
				<?php if(!empty($itemset3)):?>
				<div class="collapsible-header">Kombinasi Itemset 3</div>
				<div class="collapsible-body">
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
			</li>

			<!-- ITEMSET 3 LOLOS -->
			<li>
				<?php if(!empty($itemset3Lolos)):?>
				<div class="collapsible-header">Kombinasi Itemset 3 Lolos</div>
				<div class="collapsible-body">
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
			</li>

			<!-- DEBUG DATA -->
			<li>
				<?php if(!empty($debugData)):?>
				<div class="collapsible-header">Debug Data</div>
				<div class="collapsible-body">
					<table class="highlight">
						<thead>
							<tr>
								<th>No</th>
								<th>Kombinasi</th>
								<th>Produk X</th>
								<th>Produk Y</th>
								<th>Jumlah X</th>
								<th>jumlah XY</th>
								<th>Support</th>
								<th>Confiden</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 1; foreach($debugData as $rowdebugData => $valdebugData):?>
								<tr>
									<td><?= $no ?></td>
									<td style="text-align: left"><?= $rowdebugData?></td>
									<td><?= $valdebugData['itemX'] ?></td>
									<td><?= $valdebugData['itemY'] ?></td>
									<td><?= $valdebugData['X'] ?></td>
									<td><?= $valdebugData['XY'] ?></td>
									<td><?= $valdebugData['support'] ?></td>
									<td><?= $valdebugData['confiden'] ?></td>
								</tr>
							
						<?php $no++; endforeach;?>
						</tbody>
					</table>
				</div>
				<?php endif;?>
			</li>

			<!-- HASIL ASOSIASI 3 -->
			<li>
			 <?php if(!empty($hasilAsosiasi3)):?>
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
									<td style="text-align:left"><?= $rowhasilAsosiasi3 ?></td>
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
			<li>
			 <?php if(!empty($saran)):?>
				<div class="collapsible-header">Saran dan Kesimpulan</div>
				<div class="collapsible-body">
					<p>Dari hasil kombinasi asosiasi yang didapat dari tanggal <?= date("d-F-Y", strtotime($keterangan['tanggalMulai']))." sampai ".date("d-F-Y", strtotime($keterangan['tanggalSelesai']))." dengan jumlah data transaksi ".$keterangan['jumlahTransaksi'].", terdapat produk yang harus ditambah jumlah stoknya. List produk yang harus ditambah jumlah stok dapat dilihat pada tabel di bawah ini. "?></p>
					<table class="highlight">
						<thead>
							<tr>
								<th>No</th>
								<th>Produk</th>
								<th>Jumlah Transaksi</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 1; foreach($saran as $rowsaran => $valsaran):?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $rowsaran ?></td>
									<td><?= $valsaran['jumlah'] ?></td>
								</tr>
							
						<?php $no++; endforeach;?>
						</tbody>
					</table>
				</div>
				<?php endif;?>
			</li>
		</ul>
	</div>

	<script>
	  $(document).ready(function(){
			$('.datepicker').datepicker({
				format: 'yyyy-mm-dd'
			});
    		$('.collapsible').collapsible();
		});
	</script>
</body>
</html>

