<!DOCTYPE html>
<html>
<head>
	<title>Stok</title>
	<link rel="stylesheet" href="./style.css">
</head>
<style>
    header {
		background-color: #333;
		padding: 1rem;
	}

    h1 {
			margin: 0;
			padding: 1rem;
			color: #fff;
			font-size: 2rem;
			text-align: center;
			text-transform: uppercase;
			letter-spacing: 0.1rem;
	}

    a {
		color: #333;
		text-decoration: none;
	}

    nav {
		background-color: #333;
		color: #fff;
		overflow: hidden;
	}

    nav a {
		float: right;
		color: #fff;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	nav a:hover {
		background-color: #ddd;
		color: #333;
	}

	nav .active {
		background-color: #D3D3D3;
	}
</style>
<body>
    <header>
		<h1>Jariah Auto</h1>
		<nav>
			<a href="login.php">Log In</a>
		</nav>
	</header>
	<center><br>
		<table id="data" border="2px" cellspacing="0" cellpadding="5">
				<tr>
					<th>KOD PRODUK</th>
					<th>KUANTITI PRODUK</th>
					<th>HARGA SEBOTOL</th>
					<th>TARIKH KEMASKINI</th>
				</tr>
	<?php
	include('config.php');

	$show = mysqli_query($con, "SELECT * FROM barang");
	    while ($res = mysqli_fetch_array($show)) {
	    $kod_produk=$res['kod_produk'];
			echo "<tr>";
			echo "<td><center>" . $res['kod_produk'] . "</center></td>";
			echo "<td><center>" . $res['kuantiti_produk'] . "</center></td>";
			echo "<td><center>" . $res['harga_seunit'] . "</center></td>";
			echo "<td><center>" . $res['tarikh_kemaskini'] . "</center></td>";
			echo "</tr>";
		}
	?>
</table>
</center>
</body>
</html>