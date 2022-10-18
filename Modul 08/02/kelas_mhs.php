<?php
include ('header.php');
include('koneksi.php');
$msg='';
if(isset($_GET['id'])){
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $id_kelas = isset($_POST['id_kelas']) ? $_POST['id_kelas'] : errorin();
        $id_mahasiswa = isset($_POST['id_mahasiswa']) ? $_POST['id_mahasiswa'] : errorin();
        include_once('koneksi.php');
        $stmt = $koneksi->prepare('SELECT id_mahasiswa FROM kelas_mahasiswa WHERE id_mahasiswa = ? AND id_kelas = ?');
        $stmt->execute([$id_kelas, $id_mahasiswa]);
        if ($stmt->rowCount() > 0) {
            $msg = 'Mahasiswa sudah mengambil kelas';
        }else{
            $stmt = $koneksi->prepare('INSERT INTO kelas_mahasiswa VALUES (?, ?)');
            $stmt->execute([$id_kelas, $id_mahasiswa]);
            $msg = 'Data berhasil ditambahkan!';
        }
    }
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
    $records_per_page = 2;

    $stmt = $koneksi->prepare('SELECT kelas_mahasiswa.id_kelas, kelas_mahasiswa.id_mahasiswa, mahasiswa.nama, mahasiswa.nim FROM kelas_mahasiswa, mahasiswa WHERE mahasiswa.id_mahasiswa = kelas_mahasiswa.id_mahasiswa AND kelas_mahasiswa.id_kelas = :id LIMIT :current_page, :record_per_page');
    $stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
    $stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
    $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();

    $kelases = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$kelases) {
    $msg ='Kelas tidak ada mahasiswanya';
    }

}else{
    $msg='Belum memilih kelas';
}

$banyakMhs = $koneksi->query('SELECT COUNT(*) FROM kelas_mahasiswa')->fetchColumn();   

$stmt = $koneksi->prepare('SELECT id_kelas, nama_kelas FROM kelas ORDER BY id_kelas');
$stmt->execute();
$namakelases = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $koneksi->prepare('SELECT nama, nim, id_mahasiswa FROM mahasiswa ORDER BY id_mahasiswa');
$stmt->execute();
$namamhs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="content read">
	<h2>Kelas - Mahasiswa</h2>
    <h3> Tambah Mahasiswa </h3>
    <form method="POST" action="kelas_mhs.php?id=<?php echo $_GET['id'];?>">

    <label for="kelas">Kelas</label>
        <select name="id_kelas" id="kelas">
        <option disabled selected> Pilih </option>
        <?php
            foreach ($namakelases as $namakelas) {
                $selected = $namakelas['id_kelas'] == $_GET['id'] ? 'selected="selected"' : '';
                echo "<option value=\"$namakelas[id_kelas]\" $selected>$namakelas[nama_kelas]</option>";
            }
        ?>
        </select>
        <label for="kelas">Mahasiswa </label>
        <select name="id_mahasiswa" id="id_mhs">
        <option disabled selected> Pilih </option>
        <?php
            foreach ($namamhs as $mhs) {
                echo "<option value=\"$mhs[id_mahasiswa]\">$mhs[nama] ($mhs[nim])</option>";
            }
        ?>
        </select>
          <input type="submit" value="Simpan">
        </form>
        <br>
	<table>
        <thead>
            <tr>
                <td>No</td>
                <td>NIM</td>
                <td>Nama Mahasiswa</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php 
            echo $msg;
            $x = 1;
           
            foreach ($kelases as $kelas){
                echo "<td>".$x++."</td>";
                echo "<td>$kelas[nim]</td>";
                echo "<td>$kelas[nama]</td>";
                echo "<td class=\"actions\">
                <a href=\"kelas_mhs_del.php?id_kelas=$kelas[id_kelas]&id_mhs=$kelas[id_mahasiswa]\" class=\"trash\"><i class=\"fas fa-trash fa-xs\"></i></a></td>";
                echo"</tr>";
            }
                ?>
            
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="kelas_mhs.php?id=<?php echo $_GET['id'];?>&page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $banyakMhs): ?>
		<a href="kelas_mhs.php?id=<?php echo $_GET['id'];?>&page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>