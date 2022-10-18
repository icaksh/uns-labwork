<?php
$akun = true;
include "header.php";
$query = $koneksi->query('SELECT * FROM user ORDER BY id_user DESC');
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
    <div class="row">
        <div class="col-lg-6 offset-lg-3 mt-3">
            <div class="card">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Waktu Pembuatan</th>
                    </tr>
                    <?php 
                    $x = 1;
                    foreach ($rows as $row) {
                        echo "<tr>";
                        echo "<th>".$x++."</th>";
                        echo "<th>$row[username]</th>";
                        echo "<th>$row[password]</th>";
                        echo "<th>$row[created_at]</th>";
                        echo "</tr>";
                    }?>
                </table>
            </div>
        </div>
    </div>
<?php

include "footer.php";