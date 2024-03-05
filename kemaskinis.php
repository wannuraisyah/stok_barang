<?php
include('../config.php');
$idor = $_GET['idor'];

$edit = mysqli_query($con, "SELECT * FROM orders WHERE idor='$idor'");

while($res = mysqli_fetch_array($edit)) {
	$nama = $res['nama'];
	$negeri = $res['negeri'];
	$alamat = $res['alamat'];
	$senarai = $res['senarai'];
	$tarikh = $res['tarikh'];
    $status = $res['status'];
}
?>
<?php
include('../config.php');

if (isset($_POST['keep'])) {
	$nama = $_POST['nama'];
	$negeri = $_POST['negeri'];
	$alamat = $_POST['alamat'];
	$senarai = $_POST['senarai'];
	$tarikh = $_POST['tarikh'];
    $status = $_POST['status'];

	$edit = "UPDATE orders SET nama='$nama', negeri='$negeri', alamat = '$alamat',  senarai='$senarai',  tarikh='$tarikh', status='$status' WHERE idor='$idor'";

	if($result=mysqli_query($con,$edit)) {
		echo "Data berjaya dikemaskini";
		header('location:pemohon.php');
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
				<a href="manifacture.php">
				<i class="fas fa-tachometer-alt"></i>
				<span>Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="pemohon.php">
				<i class="fas fa-book"></i>
				<span>Senarai Pemohon Stok</span>
				</a>
			</li>
			<li class="logout">
				<a href="logkilang.php">
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
							<h2>Status Penghantaran Minyak</h2><br>
							<div class="container col-4 rounded bg-light mt-5" style='--bs-bg-opacity: .5'><br>
								<tr bgcolor="">
									<td>Nama Salesman:</td>
									<td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
								</tr><br><br>
								<tr bgcolor="">
									<td>Alamat:</td>
									<td><input type="text" name="alamat" value="<?php echo $alamat; ?>" readonly></td>
								</tr><br><br>
								<tr bgcolor="">
									<td>Negeri:</td>
									<td><input type="text" name="negeri" value="<?php echo $negeri; ?>" readonly></td>
								</tr><br><br>
								<tr bgcolor="">
									<td> Jenis dan Kuantiti:</td>
									<td><input type="text" name="senarai" value="<?php echo $senarai; ?>" readonly></td>
								</tr><br><br>
								<tr bgcolor="">
									<td>Tarikh Permohonan:</td>
									<td><input type="text" name="tarikh" value="<?php echo $tarikh; ?>" readonly></td>
								</tr><br><br>
								<tr bgcolor="">
									<td><label for="status">Status:</label></td>
									<td><select type="text" name="status" value="<?php echo $status; ?>" required>
									<option value="sedang diproses">Sedang Diproses</option>
									<option value="sedang dihantar">Sedang Dihantar</option>
									<option value="telah terima">Telah Diterima</option>
									</select>
								</td>
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
