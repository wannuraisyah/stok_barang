<?php
include('../config.php');
$idsa = $_GET['idsa'];

$edit = mysqli_query($con, "SELECT * FROM loginsa WHERE idsa='$idsa'");

while($res = mysqli_fetch_array($edit)) {
	$name = $res['name'];
	$emel = $res['emel'];
	$uname = $res['uname'];
	$pass = $res['pass'];
	$negeri = $res['negeri'];
	$daerah = $res['daerah'];
	$bengkel = $res['bengkel'];
}
?>
<?php
include('../config.php');

if (isset($_POST['keep'])) {
	$name = $_POST['name'];
	$emel = $_POST['emel'];
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$negeri = $_POST['negeri'];
	$daerah = $_POST['daerah'];
	$bengkel = $_POST['bengkel'];

	$edit = "UPDATE loginsa SET name='$name', emel='$emel', uname = '$uname',  pass='$pass', negeri='$negeri', daerah='$daerah', bengkel='$bengkel' WHERE idsa='$idsa'";

	if($result=mysqli_query($con,$edit)) {
	
		echo "Data berjaya dikemaskini";
		header('location:senarai.php');
	}
	else {

		echo "<script> alert('Data tidak berjaya dikemaskini'); </script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kemaskini</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0//css/all.min.css">
</head>
<style>
	body{
		background-color: darkseagreen;
	}
	<?php include '../sidebar.css' ?>
</style>
<body>
<div class="sidebar">
        <div class="logo"></div>
		<ul class="menu">
			<li>
				<a href="admin.php">
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
			<li class="active">
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
		<h3 class="main-title">Mohon Stok Barang</h3>
		<div class="card-wrapper">
			<div class="data-card">
				<div class="card-header">
					<div class="data">
						<center>
						<form name="form" method="post"><br>
							<h2>Kemaskini Stok Minyak</h2><br>
							<div class="container col-4 rounded bg-light mt-5" style='--bs-bg-opacity: .5'><br>
								<tr bgcolor="">
									<td>Negeri:</td>
									<td><input type="text" name="negeri" value="<?php echo $negeri; ?>"></td>
								</tr><br><br>
								<tr bgcolor="">
									<td>Alamat:</td>
									<td><input type="text" name="daerah" value="<?php echo $daerah; ?>"></td>
								</tr><br><br>
								<tr bgcolor="">
									<td>Nama Bengkel:</td>
									<td><input type="text" name="bengkel" value="<?php echo $bengkel; ?>"></td>
								</tr><br><br>
								<tr bgcolor="">
									<td>Salesman Name:</td>
									<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
								</tr><br><br>
								<tr bgcolor="">
									<td>Username:</td>
									<td><input type="text" name="uname" value="<?php echo $uname; ?>"></td>
								</tr><br><br>
								<tr bgcolor="">
									<td>Emel:</td>
									<td><input type="text" name="emel" value="<?php echo $emel; ?>"></td>
								</tr><br><br>
								<tr bgcolor="">
									<td>Kata Laluan:</td>
									<td><input type="text" name="pass" value="<?php echo $pass; ?>"></td>
								</tr><br><br>
								<tr bgcolor="" align="center">
									<td><input type="submit" name="keep" value="Kemaskini" class="btn btn-primary"></td><br><br>
								</tr>
							</div>
						</form>
						</center>
					</div>
				</div>
				<span class="card-detail">
				</span>
			</div>
		</div>
	</div>
</div>
</body>
