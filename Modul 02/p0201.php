<!DOCTYPE html>
<html>

<head>
    <title>Contoh</title> <!-- Karena ada H1 dan tidak sepatutnya mengisi elemen body di header -->
</head>

<body>
    <h1>Latihan 1</h1>
    <?php
        echo "<p>Hello world</p>";
    ?>
    <h1>Latihan 2</h1>
    <?php
        $a = '14';
        $b = '11';
        $c = $a + $b;
        echo ("Hasil perhitungan adalah $c"); // Memberikan double quote
    ?>
    <h1>Latihan 3</h1>
    <?php
    $z = ["nama"=>'agus',"nim"=>'k1424567',"alamat"=>'Solo',"bidang"=>'RPL']; //Membuat double quote di key, mengganti -> ke =>, memberikan semicolon di akhir
    echo $z[nama];
    ?>
    <h1>Latihan 4</h1>
    <?php
        $objek = new stdClass();
        $objek ->name = "Steven William"; // => to ->
        $objek ->age = 30; // => to ->
        $objek ->city = "Kartosuro"; // => to ->
        $myJSON = json_encode($objek); // JSON encode
        echo $myJSON;
    ?>
</body>

</html>