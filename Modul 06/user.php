<?php
$user = true;
include "header.php";
$query = $koneksi->query('SELECT mahasiswa.id_mahasiswa, mahasiswa.nama, mahasiswa.nim, mahasiswa.email, user.id_user, user.username, user.password, user.created_at AS user_gawe FROM mahasiswa LEFT OUTER JOIN user ON mahasiswa.id_mahasiswa = user.id_mahasiswa ORDER BY mahasiswa.id_mahasiswa DESC');
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
    <div class="row">
        <div class="col-lg-6 offset-lg-3 mt-3">
            <div class="card">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Waktu Pembuatan</th>
                    </tr>
                    <?php 
                    $x = count($rows);
                    foreach ($rows as $row) {
                        echo "<tr>";
                        echo "<th>".$x--."</th>";
                        echo "<th>$row[nama]</th>";
                        echo "<th>$row[nim]</th>";
                        echo "<th>$row[username]</th>";
                        echo "<th>$row[password]</th>";
                        echo "<th>$row[user_gawe]</th>";
                        echo "</tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>
<?php

include "footer.php";