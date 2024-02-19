<?php
include ('../config.php');
// if (!isset($_SESSION['iduser'])) { // condition check: if session iv not set.
//     header('location: login.php'); // if not set the user is sendback to login page
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0//css/all.min.css">
</head>
<style>
    /* button style */
	<?php include '../sidebar.css' ?>
</style>
<body>
	<div class="sidebar">
		<div class="logo"></div>
		<ul class="menu">
			<li class="active">
				<a href="#">
				<i class="fas fa-tachometer-alt"></i>
				<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="laporan.php">
				<i class="fas fa-chart-bar"></i>
				<span>Laporan Stok</span>
				</a>
			</li>
			<li>
				<a href="senarai.php">
				<i class="fas fa-address-card"></i>
				<span>Senarai Pekerja</span>
				</a>
			</li>
			<li>
				<a href="bengkel.php">
				<i class="fas fa-landmark"></i>
				<span>Senarai Bengkel</span>
				</a>
			</li>
			<li class="logout">
				<a href="logadmin.php">
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
		</div>
		<div class="card-container">
			<!-- <h2 class="main-title" align="center"><b>WELCOME!</b></h2> -->
			<div class="card-wrapper">
				<div class="data-card">
					<div class="card-header">
						<div class="data">
							<span class="title">
							</span>
						</div>
						<div class="main-card">
						<div class="card">
							<span class="card-detail">
							<img src="../Diesel.webp" alt="diesel" style="width: 50%;height: 60%;">
							</span>
						</div>
						<div class="card">
							<span class="card-detail">
							<img src="../Fully Synthetic.webp" alt="fs" style="width: 50%;height: 60%;">
							</span>
						</div>
						<div class="card">
							<span class="card-detail">
							<img src="../Semi Synthetic.webp" alt="ss" style="width: 50%;height: 60%;">
							</span>
						</div>
						</div>
						<div class="main-card">
						<div class="card">
							<span class="card-detail">
							<img src="../Multi Grade.webp" alt="mg" style="width: 50%;height: 60%;">
							</span>
						</div>
						<div class="card">
							<span class="card-detail">
							<img src="../Mineral.webp" alt="mineral" style="width: 50%;height: 60%;">
							</span>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>