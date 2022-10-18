<?php
$mhs = true;
include "header.php";
$query = $koneksi->query('SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC');
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
                        <th>Email</th>
                    </tr>
                    <?php 
                    $x = 1;
                    foreach ($rows as $row) {
                        echo "<tr>";
                        echo "<th>".$x++."</th>";
                        echo "<th>$row[nama]</th>";
                        echo "<th>$row[nim]</th>";
                        echo "<th>$row[email]</th>";
                        echo "</tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>
<?php

include "footer.php";