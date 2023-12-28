<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas Prak PAW</title>
	<link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<!-- Style -->
<style> 
	.bl{
		padding: 10px;
	}
	.container{
		width: 100%;
		margin-top: 2%;
		box-shadow: 0 3px 10px rgba(0,0,0,0.7);
		padding: 5%;
		$gradient: linear-gradient(150deg, rgba($white, .12), rgba($white, 0));
	}
	table {
		font-family: Tekton Pro;
		text-align: center;
	}
	h3 {
		font-family: Cheeky Rabbit;
		font-weight: bold;
		color: #534D9D;
		font-size: 40px;
	}
</style>
<body>
	<div class="container col-md-8">
	<div class="row justify-content-center">
		<div class="col">
			<img src="img/restaurant.png" width="250" class="mb-5">
			<h3 class="text-center">Data Pesanan RestaurantKu</h3>
			<br/>

			<div class="table-responsive">
				<table border="1" class="table table-hover table-bordered">
					<thead>
						<tr class="text-center" style="background-color: #97B4D6">
							<th>Kode_Pesanan</th>
							<th>Kategori</th>
							<th>Nama_Pesanan</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Jumlah_Pesanan</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<?php
					    require 'config.php';
					    $restaurant = $collection->find();
					    foreach ($restaurant as $rest) {
					    echo "<tr class='text-center' style='background-color: #D7D4CD'>";
					    echo "<th>".$rest->Kode_Pesanan."</th>";
					    echo "<td>".$rest->Kategori."</td>";
					    echo "<td>".$rest->Nama_Pesanan."</td>";
					    echo "<td>".$rest->Harga."</td>";
					    echo "<td>".$rest->Stok."</td>";
					    echo "<td>".$rest->Jumlah_Pesanan."</td>";
					    echo "<td>";
					    echo "<a href ='edit.php?id=".$rest->_id."'class='btn btn-warning bi bi-pen' onclick = 'return confirm('Yakin Data Akan DiUpdate ?');''> Update </a>";
					  	echo "</td>";
					    echo "<td>";
					    echo "<a href ='delete.php?id=".$rest->_id."'class='btn btn-danger bi bi-eraser' onclick = 'return confirm('Yakin Data Akan Dihapus ?');''> Remove </a>";
					  	echo "</td>";
					    echo "</tr>";
					    }
				    ?>
				</table>
				<a href="create.php" class="btn btn-primary bi bi-patch-plus" style="font-family: Tekton Pro"> Create Data </a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
