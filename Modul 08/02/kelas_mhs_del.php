<?php
include('header.php');
include('koneksi.php');
$msg = '';
function errorin($value){
    echo $value.' tidak terisi';
    die();
}

if (isset($_GET['id_kelas'])) {
    
    $stmt = $koneksi->prepare('SELECT kelas_mahasiswa.id_kelas, kelas_mahasiswa.id_mahasiswa, mahasiswa.nama, mahasiswa.nim, kelas.nama_kelas FROM kelas_mahasiswa, mahasiswa, kelas WHERE mahasiswa.id_mahasiswa = kelas_mahasiswa.id_mahasiswa AND kelas_mahasiswa.id_kelas = ? AND kelas_mahasiswa.id_mahasiswa = ? AND kelas_mahasiswa.id_kelas = kelas.id_kelas');
    $stmt->execute([$_GET['id_kelas'], $_GET['id_mhs']]);
    $kelas = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$kelas) {
        exit('Kelas tidak ditemukan, periksa ID');
    }

    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            $stmt = $koneksi->prepare('DELETE FROM kelas_mahasiswa WHERE id_mahasiswa = ? AND id_kelas = ?');
            $stmt->execute([$_GET['id_mhs'], $_GET['id_kelas']]);
            $msg = 'Kelas berhasil dihapus';
            header('Location: kelas_mhs.php?id='.$_GET['id_kelas']);
        } else {
            header('Location: kelas_mhs.php');
            exit;
        }
    }
} else{
    exit('ID tidak dimasukkan');
}
?>
<div class="content delete">
	<h2>Hapus Mahasiswa <?php echo $contact['nama_kelas'];?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Apakah yakin ingin menghapus mahasiswa <?php echo $kelas['nama'];?> dari kelas <?php echo $kelas['nama_kelas'];?>?</p>
    <div class="yesno">
        <a href="kelas_mhs_del.php?id_kelas=<?php echo $kelas['id_kelas'];?>&id_mhs=<?php echo $kelas['id_mahasiswa'];?>&confirm=yes">Yes</a>
        <a href="kelas_mhs_del.php?id_kelas=<?php echo $kelas['id_kelas'];?>&id_mhs=<?php echo $kelas['id_mahasiswa'];?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>