<?php include '../config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
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
				<a href="admin.php">
				<i class="fas fa-tachometer-alt"></i>
				<span>Dashboard</span>
				</a>
			</li>
			<li class="active">
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
				<div class="user-info">
					<div class="search-box">
					<form method="GET">
						<div class="input-group">
						<input type="text" id="search" name="search" class="form-control" placeholder="Search" />
						<button type="submit" class="btn btn-primary">Search</button>
						</div>
					</form>
					</div>
				<!-- <img src="" alt=""> -->
			</div>
		</div>
		<div class="card-container">
			<h3 class="main-title">Laporan Jualan Minyak</h3>
			<div class="card-wrapper">
				<div class="data-card">
					<div class="card-header">
						<div class="data">
							<span class="title">
							</span>
						</div>
						<div class="main-card searchable">
						<table class="table table-bordered" id="data" border="2px" cellspacing="0" cellpadding="5">
							<tr>
								<th onclick="sortTable(0)">NAMA SALESMAN</th>
								<th onclick="sortTable(1)">NAMA BENGKEL</th>
								<th onclick="sortTable(2)">NEGERI</th>
								<th onclick="sortTable(3)">JENIS MINYAK dan KUANTITI</th>
								<th onclick="sortTable(4)">TARIKH LAPORAN</th>
								<th>TINDAKAN</th>
							</tr>
							<script>
								// JavaScript for filtering table rows
								document.getElementById('search').addEventListener('input', function() {
									var filter, tableContainers, trs, tds, i, j, txtValue;
									filter = document.getElementById('search').value.toUpperCase();
									tableContainers = document.querySelectorAll('.searchable');

									// Loop through all table containers
									for (i = 0; i < tableContainers.length; i++) {
										trs = tableContainers[i].querySelectorAll('tr');

										// Loop through all table rows, and hide those who don't match the search query
										for (j = 0; j < trs.length; j++) {
											// Check if the current row is a header row
											if (trs[j].querySelector('th')) {
												continue; // Skip header rows
											}

											tds = trs[j].querySelectorAll('td');
											var found = false;

											// Loop through all cells in the current row
											for (var k = 0; k < tds.length; k++) {
												txtValue = tds[k].textContent || tds[k].innerText;
												if (txtValue.toUpperCase().indexOf(filter) > -1) {
													found = true;
													break; // Exit the loop if match found in any cell
												}
											}

											// Display or hide the row based on search match
											trs[j].style.display = found ? '' : 'none';
										}
									}
								});
							</script>
							<?php
							include('../config.php');
							$show = mysqli_query($con, "SELECT * FROM report");
								while ($res = mysqli_fetch_array($show)) {
									echo "<tr>";
									echo "<td><center>" . $res['namesa'] . "</center></td>";
									echo "<td><center>" . $res['bengkel'] . "</center></td>";
									echo "<td><center>" . $res['negeri'] . "</center></td>";
									echo "<td><center>" . $res['terang'] . "</center></td>";
									echo "<td><center>" . $res['tarikh'] . "</center></td>";
									echo "<form action='../delete.php' method='POST'>";
									echo "<input type='hidden' value='". $res['num'] . "' name='num'>";
									echo "<td><button class='btn btn-danger' type='submit' name='de_report'>Delete</button></td>";
									echo "</form>";
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>