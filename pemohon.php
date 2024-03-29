<?php include '../config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Senarai Permohonan</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0//css/all.min.css">
</head>
<style>
	tr {
		text-align: center;
	}
	<?php include '../sidebar.css' ?>
</style>
<body>
<div style="background: #eeeeee; width:100%; height:100%;">
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
				<form method="GET">
					<div class="input-group">
					<input type="text" id="search" name="search" class="form-control" placeholder="Search" />
					<button type="submit" class="btn btn-primary">Search</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    <div class="card-container">
		<h3 class="main-title">Permohon Stok Minyak</h3>
		<div class="card-wrapper">
			<div class="data-card">
				<div class="card-header">
					<div class="data searchable">
						<table class="table table-bordered" id="data" border="2px" cellspacing="1" cellpadding="3">
							<tr>
								<th onclick="sortTable(0)">NAMA SALESMAN</th>
								<th onclick="sortTable(1)">ALAMAT BENGKEL</th>
								<th onclick="sortTable(2)">NEGERI</th>
								<th onclick="sortTable(3)">JENIS DAN KUANTITI</th>
								<th onclick="sortTable(4)">TARIKH PERMOHONAN</th>
								<th onclick="sortTable(5)">STATUS</th>
								<th>TINDAKAN</th>
							</tr>
							<?php
							include('../config.php');
							$show = mysqli_query($con, "SELECT * FROM orders");
								while ($res = mysqli_fetch_array($show)) {
								// $idor=$res['idor'];
									echo "<tr>";
									echo "<td><center>" . $res['nama'] . "</center></td>";
									echo "<td><center>" . $res['alamat'] . "</center></td>";
									echo "<td><center>" . $res['negeri'] . "</center></td>";
									echo "<td><center>" . $res['senarai'] . "</center></td>";
									echo "<td><center>" . $res['tarikh'] . "</center></td>";
									echo "<td><center>" . $res['status'] . "</center></td>";
									echo "<td><button><a class='btn btn-warning' href= \"kemaskinis.php?idor=$res[idor]\">Kemaskini</a></button></td>";
									echo "</tr>";
								}
							?>
							<script>
								document.getElementById('search').addEventListener('input', function() {
									var filter, tableContainers, trs, tds, i, j, txtValue;
									filter = document.getElementById('search').value.toUpperCase();
									tableContainers = document.querySelectorAll('.searchable');

									for (i = 0; i < tableContainers.length; i++) {
										trs = tableContainers[i].querySelectorAll('tr');

										for (j = 0; j < trs.length; j++) {
											if (trs[j].querySelector('th')) {
												continue;
											}

											tds = trs[j].querySelectorAll('td');
											var found = false;

											for (var k = 0; k < tds.length; k++) {
												txtValue = tds[k].textContent || tds[k].innerText;
												if (txtValue.toUpperCase().indexOf(filter) > -1) {
													found = true;
													break;
												}
											}

											trs[j].style.display = found ? '' : 'none';
										}
									}
								});
							</script>
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
					</div>
					<span class="card-detail">
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>