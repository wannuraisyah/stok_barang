<?php
	include '../config.php';
	session_start();
	if(isset($_GET["idsa"])) {
		$idpekerja = mysqli_real_escape_string($con, $_GET['idsa']);
	
		if (!empty($idpekerja)) {
			$pQuery = mysqli_query($con, "SELECT * FROM barang WHERE idpekerja = '$idpekerja'");
	
			if ($pQuery) {
			} else {
				echo "Query failed: " . mysqli_error($con);
			}
		} else {
			echo "Invalid user id.";
		}
		} else {
			echo "User id not provided.";
		}
		$query = mysqli_query($con, "SELECT * FROM barang WHERE idpekerja = '$idpekerja'");
	
		if ($query) {
		$res = mysqli_fetch_assoc($query);
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0//css/all.min.css">
	<script src="https://cdn.lordicon.com/lordicon.js"></script>
</head>
<style>
	tr {
        justify-content: center;
        text-align: center;
    }
    /* Header and nav style */
	<?php include '../sidebar.css' ?>
</style>
<body>
<div style="background: #eeeeee; width:100%; height:100%;">
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
				<i class="fas fa-sign-out"></i>
				<span>Log Out</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="main-content">
		<div class="header-wrapper">
			<div class="header-title">
				<br>
				<span><img src="../d20-nobg.png" alt="D20 Logo" /></span>
				<br><br>
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
			<h3 class="main-title">Laporan Jualan Minyak Bulanan</h3>
			<div class="card-wrapper">
				<div class="data-card">
					<div class="card-header">
						<div class="data">
						<span class="title">
							<a class="btn btn-info" href="adstok.php?idsa=<?php echo $idpekerja;?>">Tambah Laporan</a>
						</span><br><br>                         
						<span class="card-detail">
						<table class="table table-bordered" id="data" border="2px" cellspacing="0" cellpadding="5">
							<tr>
								<th onclick="sortTable(0)">KOD PRODUK</th>
								<th onclick="sortTable(1)">KUANTITI PRODUK</th>
								<th onclick="sortTable(2)">HARGA SEBOTOL</th>
								<!-- <th>NILAI</th> -->
								<th onclick="sortTable(3)">JUMLAH</th>
								<th onclick="sortTable(4)">TARIKH KEMASKINI</th>
								<!-- <th>STATUS</th> -->
								<th>KEMASKINI</th>
							</tr>
							<?php
							include('../config.php');
							//ade error sbb table localhost kosong xde data WHERE loginsa_idsa =". $_SESSION['idsa']
							$show = mysqli_query($con, "SELECT * FROM barang WHERE idpekerja = $idpekerja"); 
								while ($res = mysqli_fetch_array($show)) {
								$nom=$res['nom'];
									echo "<tr>";
									echo "<td><center>" . $res['kodproduk'] . "</center></td>";
									echo "<td><center>" . $res['kuantiti'] . "</center></td>";
									echo "<td><center>" . $res['harga'] . "</center></td>";
									//echo "<td><center>" . $res['nilai'] . "</center></td>";
									echo "<td><center>" . $res['bayar'] . "</center></td>";
									echo "<td><center>" . $res['tarikh'] . "</center></td>";
									//echo "<td><center>" . $res['status'] . "</center></td>";
									echo "<td><button><a class='btn btn-warning' href= \"kemaskini.php?nom=$res[nom]&idsa=$idpekerja\">Kemaskini</a></button></td>";
									echo "</tr>";
								}
							?>
							<script>
							function sortTable(columnIndex) {
								var table, rows, switching, i, x, y, shouldSwitch;
								table = document.getElementById("data");
								switching = true;

								while (switching) {
								switching = false;
								rows = table.rows;

								for (i = 1; i < rows.length - 1; i++) {
									shouldSwitch = false;
									x = rows[i].getElementsByTagName("td")[columnIndex];
									y = rows[i + 1].getElementsByTagName("td")[columnIndex];

									if (isNaN(x.innerHTML)) {
									shouldSwitch = x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase();
									} else {
									shouldSwitch = parseInt(x.innerHTML) > parseInt(y.innerHTML);
									}

									if (shouldSwitch) {
									rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
									switching = true;
									break;
									}
								}
								}
							}
							</script>
						</table>  
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