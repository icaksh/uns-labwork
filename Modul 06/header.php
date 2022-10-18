<?php
include_once "koneksi.php";
if(empty($akun)){
    $akun = false;
}
if(empty($mhs)){
    $mhs = false;
}
if(empty($user)){
    $user = false;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Halaman Mahasiswa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pertemuan 06</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item <?php echo $mhs ? "active" : ""; ?>">
                <a class="nav-link" aria-current="page" href="index.php">Mahasiswa</a>
                </li>
                <li class="nav-item <?php echo $akun ? "active" : ""; ?>">
                <a class="nav-link" aria-current="page" href="akun.php">Akun</a>
                </li>
                <li class="nav-item <?php echo $user ? "active" : ""; ?>">
                <a class="nav-link" aria-current="page" href="user.php">User</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>