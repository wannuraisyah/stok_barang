<?php
  session_start();
  include "../config.php";

if (isset($_POST["signin"])) {
  $uname = $_POST['uname'];
  $pass= $_POST['pass'];
  $count=0;
  $res= mysqli_query($con, "SELECT * FROM loginsa WHERE uname='$uname' && pass= '$pass' ");
  $count = mysqli_num_rows($res);
  if (!$res) {
    die ('query failed'. mysqli_error($con));
  }
  while ($row=mysqli_fetch_array($res)) {
    $idsa=$row['idsa'];
    $uname=$row['uname'];
    $pass=$row['pass'];
  }
  if ($count==0) {
    ?>
      <div class="alert alert-warning">
        <strong style="color:#333">Invalid!</strong>
        <span style="color: red;font-weight: bold; ">Username Or Password.</span>
      </div>
    <?php
    
  }
  else {
    $_SESSION['uname']=$uname;
    $_SESSION['pass']=$pass;
    header('location:worker.php?idsa='.$idsa);
  }
}
?>

<html>
<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  body{
    background-image: url("../logbg.jpg");
  }

  form {
    align-items: center;
    margin-top: 30%;
  }

  /* h2 {
    color: beige;
  }

  .mb-3 {
    color: beige;
  } */
</style>
<body>
  <div class="container col-4 rounded bg-light mt-5">
    <form action="" method="post"><br>
      <center><h2>Log In</h2></center><br>
      <div class="mb-3">
        <label for="uname" class="form-label">Username</label>
        <input type="text" class="form-control" name="uname" placeholder="Username" required="" autofocus="" />
      </div>
      <div class="mb-3">
        <label for="pass" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" placeholder="Password" id="myInput" required=""/>
        &nbsp; <input type="checkbox" onclick="myFunction()">Show Password
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
      <center>
      <div class="mb-3">
        <!-- value nama dekat button -->
        <!-- class warna button -->
        <input type="submit" value="Log In" name="signin" class="btn btn-primary">
      </div>
      </center><br>
    </form>
  </div>
</body>
</html>