<?php
session_start();
include ('../config.php');
if (isset($_GET['idsa'])) {
	$idpekerja = mysqli_real_escape_string($con, $_GET['idsa']);
}
if (isset($_POST['signout'])) {
    session_destroy();            //destroy session
    header('location: login.php');
}

include ('../config.php');

if (isset($_POST['mohon'])) {
	$nama = $_POST['nama'];
	$negeri = $_POST['negeri'];
	$alamat = $_POST['alamat'];
	$senarai = $_POST['senarai'];
	$tarikh = $_POST['tarikh'];
	$idpekerja = $_GET['idsa'];

	$query = "INSERT INTO orders (nama, negeri, alamat, senarai, tarikh, idpekerja) VALUES ('$nama', '$negeri', '$alamat', '$senarai', '$tarikh', '$idpekerja')";

	$add=mysqli_query($con,$query);

if (!$add){
	echo "Something went wrong",mysqli_error($con);
}
else{
	header("location:status.php?idsa=".$idpekerja);
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mohon Stok</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0//css/all.min.css">
</head>
<style>
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
		<li>
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
		<li class="active">
			<a href="status.php?idsa=<?php echo $idpekerja;?>">
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
			<h2>Dashboard</h2>
		</div>
		<div class="user-info">
			<!-- <div class="search-box">
			<i class="fa-solid fa-search"></i>
			<input type="text" placeholder="Search" />
			</div> -->
			<!-- <img src="" alt=""> -->
		</div>
	</div>
    <div class="card-container">
		<h3 class="main-title">Mohon Stok Minyak</h3>
		<div class="card-wrapper">
			<div class="data-card">
				<div class="card-header">
					<div class="data">
					<div class="container col-4 rounded bg-light" style='--bs-bg-opacity: .5'>
                        <form action="" method="post"><br>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pemohon</label>
                                <input type="text" class="form-control" name="nama" id="" placeholder="Masukkan nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Bengkel</label>
                                <input type="text" class="form-control" name="alamat" id="" placeholder="Masukkan nama bengkel" required>
                            </div>
                            <div class="mb-3">
                                <label for="negeri" class="form-label">Negeri</label>
                                <input type="text" class="form-control" name="negeri" id="" placeholder="Masukkan negeri" required>
                            </div>
                            <div class="mb-3">
                                <label for="senarai" class="form-label">Jenis Minyak dan Kuantiti</label>
                                <textarea type="text" class="form-control" name="senarai" id="" placeholder="Masukkan jenis minyak dan kuantiti" required></textarea>
                                <p>*Contoh format: D:5</p>
                            </div>
                            <div class="mb-3">
                                <label for="tarikh" class="form-label">Tarikh Permohonan</label>
                                <input type="date" class="form-control" name="tarikh" id="" required>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Mohon" name="mohon" class="btn btn-primary"><br><br>
                            </div>
                        </form>
					</div>
					</div>
					<span class="card-detail">
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<html>