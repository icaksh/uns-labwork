<?php
include('header.php');
include('koneksi.php');
function errorin($value){
    echo $value.' tidak terisi';
    die();
}

$msg = '';
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $nama = isset($_POST['nama_kelas']) ? $_POST['nama_kelas'] : errorin();
    $dosen = isset($_POST['dosen']) ? $_POST['dosen'] : errorin();
    $sks = isset($_POST['sks']) ? $_POST['sks'] : errorin();
    $deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : errorin();
    include_once('koneksi.php');
    $id = NULL;
    $stmt = $koneksi->prepare('INSERT INTO kelas VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $dosen, $sks, $deskripsi]);
    $msg = 'Data berhasil ditambahkan!';
}
?>

<div class="content update">
	<h2>Tambah Kelas</h2>
    <form action="create.php" method="post">
        <label for="nama_kelas">Nama Kelas</label>
        <input type="text" name="nama_kelas" placeholder="Basis Data" id="id" required>
        <label for="dosen">Dosen</label>
        <input type="text" name="dosen" placeholder="Agus Suparjo" id="email" required>
        <label for="sks">SKS</label>
        <input type="text" name="sks" placeholder="3" id="phone" required>
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" placeholder="-" id="title">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>
