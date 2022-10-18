<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['action']=="login"){
        include_once("koneksi.php");
        $query = $koneksi->query('SELECT * from user WHERE username="'.$_POST['username'].'"AND password="'.md5($_POST['password']).'"');
        $query->execute();
        $count = $query->rowCount();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if($count == 1 && isset($row)){
            $_SESSION['username'] = $row['username'];
            echo ("<script> 
            window.alert('Sukses Login'); 
            window.location.href='../dashboard'; 
            </script>");
        }else{
            echo ("<script> 
            window.alert('Username atau Password Salah'); 
            window.location.href='login.php'; 
            </script>");
        }
    }
    if($_POST['action']=="register"){
        include_once("koneksi.php");
        include_once("koneksi.php");
        //$query = $koneksi->query('INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `tempat_lahir`, `tanggal_lahir`, `phone`) VALUES (NULL, "'$_POST['pem_nama', 'Surakarta', '2021-10-19', '081')');
    }
}