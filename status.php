<?php
include '../config.php';
session_start();
if(isset($_GET["idsa"])) {
	$idpekerja = mysqli_real_escape_string($con, $_GET['idsa']);

	if (!empty($idpekerja)) {
        $pQuery = mysqli_query($con, "SELECT * FROM orders WHERE idpekerja = '$idpekerja'");

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
    $query = mysqli_query($con, "SELECT * FROM orders WHERE idpekerja = '$idpekerja'");

    if ($query) {
    $res = mysqli_fetch_assoc($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Permohonan Stok</title>
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
		<h3 class="main-title">Permohonan Stok Minyak</h3>
		<div class="card-wrapper">
			<div class="data-card">
				<div class="card-header">
					<div class="data">
						<span class="title">
						<a class="btn btn-info" href="mohon.php?idsa=<?php echo $idpekerja;?>">Mohon Stok</a>
						</span>
					</div>
					<span class="card-detail">
					<table class="table table-bordered" id="data" border="2px" cellspacing="0" cellpadding="5">
						<tr>
							<th onclick="sortTable(0)">NAMA SALESMAN</th>
							<th onclick="sortTable(1)">NEGERI</th>
							<th onclick="sortTable(2)">ALAMAT BENGKEL</th>
							<th onclick="sortTable(3)">JENIS DAN KUANTITI</th>
							<th onclick="sortTable(4)">TARIKH PERMOHONAN</th>  
							<th onclick="sortTable(5)">STATUS</th>
							<th>TINDAKAN</th>
						</tr>
						<?php
						include('../config.php');
						$show = mysqli_query($con, "SELECT * FROM orders WHERE idpekerja = $idpekerja");
							while ($res = mysqli_fetch_array($show)) {
							// $idor=$res['idor'];
								echo "<tr>";
								echo "<td><center>" . $res['nama'] . "</center></td>";
								echo "<td><center>" . $res['negeri'] . "</center></td>";
								echo "<td><center>" . $res['alamat'] . "</center></td>";
								echo "<td><center>" . $res['senarai'] . "</center></td>";
								echo "<td><center>" . $res['tarikh'] . "</center></td>";
								echo "<td><center>" . $res['status'] . "</center></td>";
								echo "<td><button class='btn btn-danger' type='submit' name='del_mohon'>Delete</button></td>";
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
</body>
</html>