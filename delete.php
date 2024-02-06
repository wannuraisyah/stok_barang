<?php
require('config.php');

if (isset($_POST['del_report'])) {
    $num = $_POST['num'];

    $query = mysqli_query($con,"DELETE FROM report WHERE num =".$num);

    if (!$query) {
        echo "<script> alert('Error deleting record.'); </script>";
    }
    else {
        echo "<script> alert('Record deleted successfully.'); window.location='pekerja/laporwork.php'; </script>";
    }
}

if (isset($_POST['de_report'])) {
    $num = $_POST['num'];

    $query = mysqli_query($con,"DELETE FROM report WHERE num =".$num);

    if (!$query) {
        echo "<script> alert('Error deleting record.'); </script>";
    }
    else {
        echo "<script> alert('Record deleted successfully.'); window.location='admin/laporan.php'; </script>";
    }
}

if (isset($_POST['del_user'])) {
    $idsa = $_POST['idsa'];

    $query = mysqli_query($con,"DELETE FROM loginsa WHERE idsa =".$idsa);

    if (!$query) {
        echo "<script> alert('Error deleting record.'); </script>";
    }
    else {
        echo "<script> alert('Record deleted successfully.'); window.location='admin/senarai.php'; </script>";
    }
}

if (isset($_POST['del_mohon'])) {
    $idor = $_POST['idor'];

    $query = mysqli_query($con,"DELETE FROM orders WHERE idor =".$idor);

    if (!$query) {
        echo "<script> alert('Error deleting record.'); </script>";
    }
    else {
        echo "<script> alert('Record deleted successfully.'); window.location='pekerja/status.php'; </script>";
    }
}
?>
