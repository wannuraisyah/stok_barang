<?php
  session_start();
  include "../config.php";
?>

<?php

if (isset($_POST["signin"])) {
  $count=0;
  $res= mysqli_query($con, "select * from logad where uname='$_POST[uname]' && pass= '$_POST[pass]' ");
  $count = mysqli_num_rows($res);
  if ($count==0) {
      ?>
          <div class="alert alert-warning">
              <strong style="color:#333">Invalid!</strong> <span style="color: red;font-weight: bold; ">Username Or Password.</span>
          </div>
      <?php
  }
  else{
      $_SESSION["uname"] = $_POST["uname"];
      ?>
      <script type="text/javascript">
          window.location="admin.php";
      </script>
      <?php  
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
        &nbsp;<input type="checkbox" onclick="myFunction()">Show Password
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