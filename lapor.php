<?php
session_start();
include ('../config.php');
if (isset($_GET['idsa'])) {
    $idpekerja = mysqli_real_escape_string($con, $_GET['idsa']);
}

if (isset($_POST['lapor'])) {
	$namesa = $_POST['namesa'];
	$bengkel = $_POST['bengkel'];
	$negeri= $_POST['negeri'];
	$terang= $_POST['terang'];
	$tarikh= $_POST['tarikh'];
	$idpekerja = $_GET['idsa'];

	$query="INSERT INTO report(namesa,bengkel,negeri,terang,tarikh,idpekerja) VALUES('{$namesa}', '{$bengkel}', '{$negeri}', '{$terang}', '{$tarikh}', '{$idpekerja}') ";
	// $query = "INSERT INTO report VALUES('$namesa','$bengkel','$negeri','$terang','$tarikh','$loginsa_idsa')";
	$add=mysqli_query($con,$query);

	if (!$add){
		echo "Something went wrong",mysqli_error($con);
	}
	else{
		header("location:stok.php?idsa=".$idpekerja);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Laporan</title>
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
			<li>
				<a href="stok.php?idsa=?idsa=<?php echo $idpekerja;?>">
				<i class="fas fa-briefcase"></i>
				<span>Stok Minyak</span>
				</a>
			</li>
			<li class="active">
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
			<h3 class="main-title">Laporan Stok Minyak</h3>
			<div class="card-wrapper">
				<div class="data">
					</div>
					<span class="card-detail">
					<center>
					<div class="container col-4 rounded bg-light" style='--bs-bg-opacity: .5'>
					<form action="" method="post"><br>
						<div class="mb-3">
							<label class="form-label">Nama Salesman</label>
							<input type="text" class="form-control" name="namesa" id="" placeholder="Masukkan Nama" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Negeri</label>
							<input type="text" class="form-control" name="negeri" id="" placeholder="Masukkan negeri" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Nama Bengkel</label>
							<input type="text" class="form-control" name="bengkel" id="" placeholder="Masukkan nama bengkel" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Jenis Minyak dan Kuantiti</label>
							<textarea type="text" class="form-control" name="terang" id="" placeholder="Masukkan jenis minyak dan kuantiti" required></textarea>
						</div>
						<b>Contoh Format Laporan</b>
						<p>*jenis minyak : bilangan yang di jual<br>FS : 8<br>MG : 13</p>
						<div class="mb-3">
							<label class="form-label">Tarikh Laporan</label>
							<input type="date" class="form-control" name="tarikh" id="" required>
						</div>
						<div class="mb-3">
							<input type="submit" name="lapor" value="Hantar" class="btn btn-primary"><br><br>
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