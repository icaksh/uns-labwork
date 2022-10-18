<?php

include("koneksi.php");
$stmt = $koneksi->prepare('DELETE FROM tma WHERE id_tma = ?');
$stmt->execute([$_POST['id']]);
echo 1;
?>