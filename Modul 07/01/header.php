<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bioskop PTIK</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bioskop PTIK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    arialabel="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="p70101.php">Home</a>
                        <a class="nav-link <?php echo $ruang==1 ? "active" : ""; ?>" href="p70102.php">Ruang 1</a>
                        <a class="nav-link <?php echo $ruang==2 ? "active" : ""; ?>" href="p70103.php">Ruang 2</a>
                        <a class="nav-link <?php echo $ruang==3 ? "active" : ""; ?>" href="p70104.php">Ruang 3</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

<?php
session_start();
if(isset($_POST['action'])){
    if($_POST['action'] == "exit"){
        session_unset();
        echo'<main>
        <div class="container">
            <div class="row mt-3">
                <div class="card p-3">
                    <center>
                        <h1>Anda berhasil keluar</h1>
                        <meta http-equiv="Refresh" Content="3; URL=p70101.php">
                    </center>
                </div>
            </div>
            
    </main>';
        die();
    }
}
if(empty($_SESSION['nama'])){
    include ("error.php");
    die();
}
if($_SESSION['ruang'] != $ruang){
    include ("error.php");
    die();
}
?>
