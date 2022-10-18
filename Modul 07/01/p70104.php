<?php
$ruang = 3;
include("header.php");
?>
    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="card p-3">
                    <center>
                        <h1>Ruang Bioskop 3</h1>
                        <span>Hi <?php echo $_SESSION['nama'];?>, selamat menikmati</span>
                        <hr>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/J5Z7tIq7bco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
            
    </main>
<?php

include("footer.php");
