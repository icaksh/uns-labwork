<?php

if(isset($_POST['hapus_cookie'])){
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time()-1000);
            setcookie($name, '', time()-1000, '/');
        }
        echo '<meta http-equiv="Refresh" Content="0;">';
        die();
    }
}
if(isset($_POST['background_color']) && isset($_POST['font_size']) && isset($_POST['remember'])){
    setcookie('background-color', $_POST['background_color'], time() + (86400), '/');
    setcookie('font-size', $_POST['font_size'], time() + (86400), '/');
    echo '<meta http-equiv="Refresh" Content="0;">';
    die();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Bermain dengan Tema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
            :root{
                --font_size: <?php echo isset($_COOKIE['font-size']) ? $_COOKIE['font-size'] : "15px"?>;
                --background_color: <?php echo isset($_COOKIE['background-color']) ? $_COOKIE['background-color'] : "#4e79a0"?>;
            }   
            </style>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container">
        <form method="post" action="">
            <h3>SETTING</h3>
            <div>Background</div>
            <select name="background_color">
            <?php 
            $colors = array('#4e79a0' => 'Biru', '#75b14a' => 'Hijau', '#d06353;' => 'Merah');
            foreach ($colors as $name => $value) {
                $selected = $name == $_COOKIE['background-color'] ? 'SELECTED="SELECTED"' : '';
                echo '<option value="'.$name.'"'.$selected.'>'.$value.'</option>';
            }
            ?>
            </select>
            <div>Font Size</div>
            <select name="font_size">
            <?php 
            $font_sizes = array('15px', '17px', '20px', '25px');
            foreach ($font_sizes as $value) {
                $selected = $value == $_COOKIE['font-size'] ? 'SELECTED="SELECTED"' : '';
                echo '<option value="'.$value.'"'.$selected.'>'.$value.'</option>';
            }
            ?>
            </select>
            <div class="remember">
                <input type="checkbox" id="remember" name="remember" />
                <label for="remember"> Remember</label>
            </div>
            <div class="tombol">
                <input type="submit" class="button blue" name="submit" value="Simpan" />
                <input type="submit" class="button red" name="hapus_cookie" value="Hapus Cookie" />
            </div>
        </form>
    </div>
</body>

</html>
