<?php
session_start();
include ('../config.php');
if (isset($_GET['idsa'])) {
    $idpekerja = mysqli_real_escape_string($con, $_GET['idsa']);
}

if (isset($_POST['tambah'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$negeri = $_POST['negeri'];
	$kodproduk = $_POST['kodproduk'];
	$kuantiti = $_POST['kuantiti'];
	$harga = $_POST['harga'];
	$bayar = $_POST['bayar'];
	$tarikh = $_POST['tarikh'];
	$idpekerja = $_GET['idsa'];

	$query="INSERT INTO barang(nama,alamat,negeri,kodproduk,kuantiti,harga,bayar,tarikh,idpekerja) VALUES('{$nama}', '{$alamat}', '{$negeri}', '{$kodproduk}', '{$kuantiti}', '{$harga}', '{$bayar}', '{$tarikh}', '{$idpekerja}') ";
	// $query = "INSERT INTO barang VALUES('$nama','$alamat','$negeri','$kodproduk','$tarikh','$loginsa_idsa')";
	$add=mysqli_query($con,$query);

	if (!$add){
		echo "Something went wrong",mysqli_error($con);
	}
	else{
		header("location:laporwork.php?idsa=".$idpekerja);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Stok</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0//css/all.min.css">
</head>
<style>
	tr {
		text-align: center;
	}
    /* Header and nav style */
	<?php include '../sidebar.css' ?>
</style>
<body>
<div class="sidebar">
	<div class="logo"></div>
		<ul class="menu">
			<li>
				<a href="worker.php?idsa=<?php echo $idpekerja;?>">
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
				<a href="laporwork.php?idsa=<?php echo $idpekerja;?>">
				<i class="fas fa-chart-bar"></i>
				<span>Laporan</span>
				</a>
			</li>
			<li>
				<a href="status.php?idsa=<?php echo $idpekerja;?>">
				<i class="fas fa-square-check"></i>
				<span>Permohonan Tambah Stok</span>
				</a>
			</li>
			<li class="logout">
				<a href="login.php">
				<i class="fas fa-sign-out-alt"></i>
				<span>Log Out</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="main-content">
		<div class="header-wrapper">
			<div class="header-title">
				<span><img src="../d20-nobg.png" alt="D20 Logo" /></span>
				<h3 class="main-title">Laporan Stok Minyak</h3>
			</div>
		</div>
		<div class="card-container">
			<div class="card-wrapper">
				<div class="data">
					</div>
					<span class="card-detail">
					<center>
					<div class="container col-4 rounded bg-light" style='--bs-bg-opacity: .5'>
					<form action="" method="post"><br>
						<div class="mb-3">
							<label class="form-label">Nama Salesman</label>
							<input type="text" class="form-control" name="nama" id="" placeholder="Masukkan Nama" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" id="" placeholder="Masukkan negeri" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Negeri</label>
							<input type="text" class="form-control" name="negeri" id="" placeholder="Masukkan nama alamat" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Kod Produk</label>
							<input type="text" class="form-control" name="kodproduk" id="" placeholder="Masukkan kod produk" required></input>
						</div>
						<div class="mb-3">
							<label class="form-label">Kuantiti</label>
							<input type="text" class="form-control" name="kuantiti" placeholder="Masukkan kuantiti produk" required></input>
						</div>
						<div class="mb-3">
							<label class="form-label">Harga Sebotol</label>
							<input type="text" class="form-control" name="harga" placeholder="Masukkan harga sebotol" required></input>
						</div>
						<div class="mb-3">
							<label class="form-label">Jumlah Bayaran</label>
							<!-- <input class="form-control" name="bayar" id="bayar" placeholder="0"></input> -->
							<input type="text" class="form-control" name="bayar" placeholder="Masukkan jumlah bayaran" required></input>
						</div>
						<div class="mb-3">
							<label class="form-label">Tarikh Laporan</label>
							<input type="date" class="form-control" name="tarikh" id="" required>
						</div>
						<div class="mb-3">
							<input type="submit" name="tambah" value="Hantar" class="btn btn-primary"><br><br>
						</div>
					</form>
				</div>
				</center>
				</span>
			</div>
		</div>
	</div>
</body>
</html>