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
		table {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		table td, table th {
			border: 1px solid #ddd;
			padding: 8px;
			text-align:center;
		}

		table tr:nth-child(even){background-color: #f2f2f2;}

		table tr:hover {background-color: #ddd;}

		table th {
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
		<form action="<?=base_url('/transaksi/upload')?>" method="post" enctype="multipart/form-data" class="z-depth-3 row" style="padding: 1em; margin: 20px 0;">
			<input type="file" name="fileexcel"  required accept=".xls, .xlsx" />
			<button type="submit" class="btn">Upload</button>
		</form>
		<table>
			<thead>
				<tr>
					<th style="width: 10%">id</th>
					<th style="width: 70%">Produk</th>
					<th style="width: 20%">tanggal</th>
				</tr>
			</thead>
			<tbody id="contactTable">
			<?php if(!empty($transaksi)):?>
				<?php foreach($transaksi as $rowTransaksi):?>
					<tr>
						<td style="width: 10%"><?= $rowTransaksi['transaksi_id'] ?></td>
						<td style="width: 70%; text-align: left;"><?= $rowTransaksi['produk'] ?></td>
						<td style="width: 20%"><?= $rowTransaksi['tanggal'] ?></td>
					</tr>
				<?php endforeach;?>
			<?php else:?>
				<tr>
					<td colspan="3">Tidak ada data</td>		
				</tr>
			<?php endif;?>
			</tbody>
		</table>
	</div>
</body>
</html>