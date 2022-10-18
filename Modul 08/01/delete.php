<?php
include('header.php');
include('koneksi.php');
$msg = '';
function errorin($value){
    echo $value.' tidak terisi';
    die();
}

if (isset($_GET['id'])) {
    $stmt = $koneksi->prepare('SELECT * FROM kelas WHERE id_kelas = ?');
    $stmt->execute([$_GET['id']]);
    $kelas = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$kelas) {
        exit('Kelas tidak ditemukan, periksa ID');
    }

    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            $stmt = $koneksi->prepare('DELETE FROM kelas WHERE id_kelas = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'Kelas berhasil dihapus';
        } else {
            header('Location: index.php');
            exit;
        }
    }
} else{
    exit('ID tidak dimasukkan');
}
?>
<div class="content delete">
	<h2>Hapus Kelas <?php echo $contact['nama_kelas'];?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Apakah yakin ingin menghapus kelas <?php echo $kelas['nama_kelas'];?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?php echo $kelas['id_kelas'];?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?php echo $kelas['id_kelas'];?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>