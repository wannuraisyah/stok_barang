<?php
include '../config.php';

if (isset($_POST['del_user'])) {
    $idsa = $_POST['idsa'];

    $query = mysqli_query($con,"DELETE FROM loginsa WHERE idsa =".$idsa);

    if (!$query) {
        echo "<script> alert('Error deleting record.'); </script>";
    }
    else {
        echo "<script> alert('Record deleted successfully.'); window.location='senarai.php'; </script>";
    }
}
?>
