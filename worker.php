<?php
session_start();
include ('../config.php');
if (isset($_GET['idsa'])) {
    $idpekerja = mysqli_real_escape_string($con, $_GET['idsa']);
}
if (isset($_POST['signout'])) {
    session_destroy();
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="icon" type="image/png" href="../d20-nobg.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0//css/all.min.css">
</head>
<style>
	/* style */
	<?php include ('../sidebar.css') ?>
</style>
<body>
	<div class="sidebar">
		<div class="logo"></div>
		<ul class="menu">
			<li class="active">
				<a href="worker.php?idsa=<?php echo $idpekerja;?>">
				<i class="fas fa-tachometer-alt"></i>
				<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="stok.php?idsa=<?php echo $idpekerja; ?>">
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
				<br><br><h2>Dashboard</h2>
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
			<!-- <h3 class="main-title">WELCOME!</h3> -->
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