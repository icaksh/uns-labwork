<?php
include('header.php');
include('koneksi.php');
$msg = '';
function errorin($value){
    echo $value.' tidak terisi';
    die();
}

if(isset($_GET['id'])){
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $nama = isset($_POST['nama_kelas']) ? $_POST['nama_kelas'] : errorin();
        $dosen = isset($_POST['dosen']) ? $_POST['dosen'] : errorin();
        $sks = isset($_POST['sks']) ? $_POST['sks'] : errorin();
        $deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : errorin();
        include_once('koneksi.php');
        $id = isset($_POST['id_kelas']) ? $_POST['id_kelas'] : errorin();
        $stmt = $koneksi->prepare('UPDATE kelas SET id_kelas = ? ,nama_kelas = ?, dosen = ?, sks = ?, deskripsi = ? WHERE id_kelas = ?');
        $stmt->execute([$id, $nama, $dosen, $sks, $deskripsi, $id]);
        $msg = 'Data berhasil diubah!';
    }

    $stmt = $koneksi->prepare('SELECT * FROM kelas WHERE id_kelas = ?');
    $stmt->execute([$_GET['id']]);
    $kelas = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$kelas) {
        exit('Kelas tidak ditemukan, periksa ID');
    }
} else {
    exit('ID tidak dimasukkan');
}
?>

<div class="content update">
	<h2>Pembaruan Data</h2>
    <form action="update.php?id=<?php echo $kelas['id_kelas']?>" method="post">
        <input type="text" name="id_kelas" value="<?php echo $kelas['id_kelas'];?>" hidden>
        <label for="nama_kelas">Nama Kelas</label>
        <input type="text" name="nama_kelas" placeholder="Basis Data" id="id" value="<?php echo $kelas['nama_kelas'];?>"  required>
        <label for="dosen">Dosen</label>
        <input type="text" name="dosen" placeholder="Agus Suparjo" id="email" value="<?php echo $kelas['dosen'];?>" required>
        <label for="sks">SKS</label>
        <input type="text" name="sks" placeholder="3" id="phone" value="<?php echo $kelas['sks'];?>" required>
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" placeholder="-" value="<?php echo $kelas['deskripsi'];?>" id="title">
        <input type="submit" value="Update Data">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>
