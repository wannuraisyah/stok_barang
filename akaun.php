<?php
include ('../config.php');
?>
<?php
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $emel = $_POST['emel'];
        $uname = $_POST['uname'];
        $pass= $_POST['pass'];
        $negeri = $_POST['negeri'];
        $daerah = $_POST['daerah'];
        $bengkel = $_POST['bengkel'];

        $query="INSERT INTO loginsa(name,emel,uname,pass,negeri,daerah,bengkel) VALUES('{$name}', '{$emel}', '{$uname}', '{$pass}', '{$negeri}', '{$daerah}', '{$bengkel}') ";
        $adduser=mysqli_query($con,$query);

        if (!$adduser){
            echo "Something went wrong",mysqli_error($con);
        }
        else{
            header("location:senarai.php");
        }
    }
?>
<head>
    <title>Tambah Akaun</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0//css/all.min.css">
</head>
<style>
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
				<h2>Dashboard</h2>
			</div>
			<div class="user-info">
				<div class="search-box">
			    </div>
		</div>
        </div>
        <div class="card-container">
			<h3 class="main-title">Tambah Akaun</h3>
			<div class="card-wrapper">
				<div class="data"></div>
				<span class="card-detail">
					<div class="container col-4 rounded bg-light mt-5" style='--bs-bg-opacity: .5'>
                        <form action="" method="post"><br>
                            <h1 class="text-center">Tambah Pekerja</h1><br>
                            <b>---Maklumat Bengkel---</b>
                            <div class="mb-3">
                                <label for="negeri" class="form-label">Negeri</label>
                                  <input type="text" class="form-control" name="negeri" id="" placeholder="Masukkan negeri" required>
                            </div>
                            <div class="mb-3">
                                <label for="daerah" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="daerah" id="" placeholder="Masukkan alamat" required>
                            </div>
                            <div class="mb-3">
                                <label for="bengkel" class="form-label">Nama Bengkel</label>
                                <input type="text" class="form-control" name="bengkel" id="" placeholder="Masukkan bengkel" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Salesman Name</label>
                                <input type="text" class="form-control" name="name" id="" placeholder="Masukkan nama salesman" required>
                            </div>
                            <br>
                            <b>---Maklumat Log Masuk---</b>
                            <div class="mb-3">
                                 <label for="uname" class="form-label">Username</label>
                                   <input type="text" class="form-control" name="uname" id="" placeholder="Masukkan username" required>
                            </div>
                            <div class="mb-3">
                                <label for="emel" class="form-label">Emel</label>
                                <input type="email" class="form-control" name="emel" id="" placeholder="Masukkan emel" required>
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control" name="pass" id="myInput" placeholder="Masukkan kata laluan" required>
                                <input type="checkbox" onclick="myFunction()">Show Password
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("myInput");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                        }
                                </script>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Signup" name="signup" class="btn btn-primary"><br><br>
                            </div>
                            
                        </form>
                    </div>
				</span>
			</div>
		</div>
	</div>
</body>