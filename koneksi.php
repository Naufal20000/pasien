<?php
$koneksi = new mysqli('localhost', 'root', '', '12naufal')
    or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien', '$nmPasien', '$jk', '$alamat')");
    header('location:pasien.php');
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
    header("location:pasien.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("UPDATE pasien SET idPasien='$idPasien', nmPasien='$nmPasien', jk='$jk', alamat='$alamat'");
    header('location:pasien.php');
} 

if (isset($_POST['simpanuser'])) {
    $nmUser = $_POST['nmUser'];
    $Pass = $_POST['Pass'];
    $Posisi = $_POST['Posisi'];
    $koneksi->query("INSERT INTO user (nmUser, Pass, Posisi) values ('$nmUser', '$Pass', '$Posisi')");
    header('location:user.php');
}

if (isset($_GET['nmUser'])) {
    $nmUser = $_GET['nmUser'];
    $koneksi->query("DELETE FROM user where nmUser = '$nmUser'");
    header("location:user.php");
}

if (isset($_POST['edituser'])) {
    $nmUser = $_POST['nmUser'];
    $Pass = $_POST['Pass'];
    $Posisi = $_POST['Posisi'];
    $koneksi->query ("UPDATE user SET nmUser='$nmUser', Pass='$Pass', Posisi='$Posisi'");
    header('location:user.php');
} 

?>