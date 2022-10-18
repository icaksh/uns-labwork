<?php

$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 5;

include('koneksi.php');

$stmt = $koneksi->prepare('SELECT * FROM kelas ORDER BY id_kelas LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();

$kelases = $stmt->fetchAll(PDO::FETCH_ASSOC);

$banyakKelas = $koneksi->query('SELECT COUNT(*) FROM kelas')->fetchColumn();   
?>
<?php
include ('header.php');
?>
<div class="content read">
	<h2>Kelas</h2>
	<a href="create.php" class="create-contact">Tambah Kelas</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Nama Kelas</td>
                <td>Dosen</td>
                <td>SKS</td>
                <td>Deskripsi</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($kelases as $kelas){
                echo "<tr>";
                echo "<td>$kelas[id_kelas]</td>";
                echo "<td>$kelas[nama_kelas]</td>";
                echo "<td>$kelas[dosen]</td>";
                echo "<td>$kelas[sks]</td>";
                echo "<td>$kelas[deskripsi]</td>";
                echo "<td class=\"actions\"><a href=\"update.php?id=$kelas[id_kelas]\" class=\"edit\"><i class=\"fas fa-pen fa-xs\"></i></a><a href=\"delete.php?id=$kelas[id_kelas]\" class=\"trash\"><i class=\"fas fa-trash fa-xs\"></i></a></td>";
                echo"</tr>";
            }
                ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="index.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $banyakKelas): ?>
		<a href="index.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>