<?php
session_start();
if(isset($_POST['nama']) && isset($_POST['ruang'])){
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['ruang'] = $_POST['ruang'];
}
if(isset($_SESSION['nama']) && isset($_SESSION['ruang'])){
    $status = "Sudah membeli tiket (Ruang $_SESSION[ruang])";
    $tombol = "disabled";
}else{
    $status = "belum membeli tiket";
    $tombol = "";
}
?>

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
                    <a class="nav-link" href="p70102.php">Ruang 1</a>
                    <a class="nav-link" href="p70103.php">Ruang 2</a>
                    <a class="nav-link" href="p70104.php">Ruang 3</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="card p-3">
                    <center>
                        <h1>Halaman Lobby</h1>
                        <span>Status pengunjung: <?php echo $status; ?></span>
                        <form action="" method="post">
                            <label>Nama:</label>
                            <input type="text" name="nama" required></input><br>
                            <label>Ruang:</label>
                            <input type="radio" name="ruang" value="1">
                            <label for="html">Ruang 1</label>
                            <input type="radio" name="ruang" value="2">
                            <label for="html">Ruang 2</label>
                            <input type="radio" name="ruang" value="3">
                            <label for="html">Ruang 3</label><br>
                            <button type="submit" class="btn btn-success"<?php echo $tombol;?>>Beli tiket</button>
                        </form>
                    </center>
                </div>
            </div>
    </main>
    <div style="bottom: 0;width: 100%;margin-top: 10px;margin-right: auto;margin-left: auto;color: #bbb;position: absolute;">
<hr>
<h6 class="text-center copyright">© 2021 Palguno Wicaksono</h6>
<br>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>