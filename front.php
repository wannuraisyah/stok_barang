<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WELCOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Lato", sans-serif}
h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
body{
    background-image: url("logbg.jpg");
    width: 100%;
    height: 40%;
}
.card-wrapper{
    width: 50%;
    padding: 10px;
    margin-top: 190px;
    background: #fcedd3;
    border-radius: 10px;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.data{
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 15px;
    min-width: 100%;
    overflow: hidden;
    border-radius: 5px 5px 0 0;
}
</style>
</head>
<body>
<!-- Header -->
<center>
<div class="card-wrapper">
	<div class="data">
    <img  src="d20-nobg.png" alt="">
      <h1 class="w3-margin w3-jumbo">WELCOME!</h1>
      <p class="w3-xlarge"><mark>Pilih yang berkenaan</mark> <br> Salesman - pemilik bengkel <br> Kilang - pihak kilang</p>
      <a href="pekerja/login.php" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Salesman</a>
      &nbsp;
      <a href="kilang/logkilang.php" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Kilang</a>
  </div>
</div>
 </center>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center">  
 <p>Powered by D2O HOLDING SDN BHD</p>
</footer>
</body>
</html>
