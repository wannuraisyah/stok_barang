<?php
include('../config.php');

$nom = $_GET['nom'];

$idsa = mysqli_real_escape_string($con, $_GET['idsa']);
$idpekerja = mysqli_real_escape_string($con, $_GET['idsa']);
$idpb = mysqli_real_escape_string($con, $_GET['idsa']);
$idmohon = mysqli_real_escape_string($con, $_GET['idsa']);

$edit = mysqli_query($con, "SELECT * FROM barang WHERE nom='$nom'");

while($res = mysqli_fetch_array($edit)) {
	$nama = $res['nama'];
	$alamat = $res['alamat'];
	$kodproduk = $res['kodproduk'];
	$kuantiti = $res['kuantiti'];
	$harga = $res['harga'];
	// $nilai = $res['nilai'];
	$bayar = $res['bayar'];
	$tarikh = $res['tarikh'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kemaskini</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0//css/all.min.css">
</head>
<style>
	<?php include '../sidebar.css' ?>
</style>
<body>
<div class="sidebar">
	<div class="logo"></div>
	<ul class="menu">
		<li>
			<a href="worker.php?idsa=<?php echo $idmohon;?>">
			<i class="fas fa-tachometer-alt"></i>
			<span>Dashboard</span>
			</a>
		</li>
		<li class="active">
			<a href="stok.php?idsa=<?php echo $idpekerja;?>">
			<i class="fas fa-briefcase"></i>
			<span>Stok Minyak</span>
			</a>
		</li>
		<li>
			<a href="laporwork.php?idsa=<?php echo $idpb;?>">
			<i class="fas fa-chart-bar"></i>
			<span>Laporan</span>
			</a>
		</li>
		<li>
			<a href="status.php?idsa=<?php echo $idmohon;?>">
			<i class="fas fa-square-check"></i>
			<span>Permohonan Tambah Stok</span>
			</a>
		</li>
		<li class="logout">
			<a href="login.php">
			<i class="fas fa-sign-out"></i>
			<span>Log Out</span>
			</a>
		</li>
	</ul>
</div>
<div class="main-content">
	<div class="header-wrapper">
		<div class="header-title">
			<span><img src="../d20-nobg.png" alt="D20 Logo" /></span>
			<h2>Kemaskini</h2>
		</div>
		<div class="user-info">
			<div class="search-box">
			<i class="fa-solid fa-search"></i>
			<input type="text" placeholder="Search" />
			</div>
		</div>
	</div>
    <div class="card-container">
		<h3 class="main-title">Mohon Stok Minyak</h3>
		<div class="card-wrapper">
			<div class="data-card">
				<div class="card-header">
					<div class="data"><center>
					<div class="container col-4 rounded bg-light" style='--bs-bg-opacity: .5'>
                        <form name="form" method="post" action="save.php"><br>
						<h2>Kemaskini Stok Minyak</h2><br>
						<div class="container"></div>
							<tr>
								<td>Salesman Name:</td>
								<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
							</tr><br><br>
							<tr>
								<td>Alamat:</td>
								<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
							</tr><br><br>
							<tr>
								<td>Kod Produk:</td>
								<td><input type="text" name="kodproduk" value="<?php echo $kodproduk; ?>"></td>
							</tr><br><br>
							<tr>
							<tr>
								<td>Kuantiti Item:</td>
								<td><input type="text" name="kuantiti" value="<?php echo $kuantiti; ?>"></td>
							</tr><br><br>
							<tr>
								<td>Harga Seunit:</td>
								<td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
							</tr><br><br>
							<tr>
								<td>Bayaran:</td>
								<td><input type="text" name="bayar" value="<?php echo $bayar; ?>"></td>
							</tr><br><br>
								<td>Tarikh Kemaskini:</td>
								<td><input type="date" name="tarikh" value="<?php echo $tarikh; ?>"></td>
							</tr><br><br>
							<tr align="center">
								<td><input type="submit" name="keep" value="Kemaskini" class="btn btn-primary"></td><br>
							</tr>
						</form>
					</div></center>
					</div>
					<span class="card-detail">
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
