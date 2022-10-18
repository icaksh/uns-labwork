<?php
include("koneksi.php");
$query = $koneksi->query('SELECT * FROM provinces ORDER BY name DESC');
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">JavaScript AJAX</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">jQuery AJAX</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container-fluid mt-3">
            <div class="row d-flex justify-content-center">
                <dic class="col-sm-9">
                    <div class="card-body">
                        <h5 class="card-title">Dependent Dropdown Wilayah Indonesia</h5>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border text-primary" role="status" id="load" style="position: absolute; top: 50%; display: none"></div>
                        </div>
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-3">Provinsi:</label>
                                <div class="col-sm-12">
                                    <select name="provinsi" id="provinsi" class="form-control">
                                    <option>--Pilih Provinsi--</option>
                                    <?php
                                        foreach ($rows as $row) {
                                            echo "<option value=\"$row[id]\">$row[name]</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Kota/Kabupaten:</label>
                                <div class="col-sm-12">
                                    <select name="kota" id="kota" class="form-control">
                                    <option>--Pilih Kota/Kabupaten--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Kecamatan:</label>
                                <div class="col-sm-12">
                                    <select name="kecamatan" id="kecamatan" class="form-control">
                                    <option>--Pilih Kecamatan--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Kelurahan:</label>
                                <div class="col-sm-12">
                                    <select name="kelurahan" id="kelurahan" class="form-control">
                                    <option>--Pilih Kelurahan--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <button type="button" class="btn btn-success" id="btnSubmit">Simpan</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#provinsi").change(function() {
                $("#load").show();
                var id= $(this).val();
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "data.php?jenis=kota",
                    data: "id_provinsi="+id,
                    success: function(msg){
                        $("select#kota").html("<option>--Pilih Kota/Kabupaten--</option>"+msg);
                        $("select#kecamatan").html("<option>--Pilih Kecamatan--</option>");
                        $("select#kelurahan").html("<option>--Pilih Kelurahan--</option>");
                        $("#load").hide(); 
                    }
                })  

                $("#kota").change(getAjaxKota);
                function getAjaxKota() {
                    $("#load").show();
                    var id= $("#kota").val();
                    $.ajax({
                        type: "POST",
                        dataType: "html",
                        url: "data.php?jenis=kecamatan",
                        data: "id_kota="+id,
                        success: function(msg){
                            $("select#kecamatan").html("<option>--Pilih Kecamatan--</option>"+msg);
                            $("select#kelurahan").html("<option>--Pilih Kelurahan--</option>");
                            $("#load").hide();
                        }
                    })
                }

                $("#kecamatan").change(getAjaxKecamatan);
                function getAjaxKecamatan() {
                    $("#load").show();
                    var id= $("#kecamatan").val();
                    $.ajax({
                        type: "POST",
                        dataType: "html",
                        url: "data.php?jenis=kelurahan",
                        data: "id_kecamatan="+id,
                        success: function(msg){
                            $("select#kelurahan").html("<option>--Pilih Kelurahan--</option>"+msg);
                            $("#load").hide();
                        }
                    })
                }
            })
            $("#btnSubmit").click(function(){
                var provinsi = $("#provinsi option:selected").text();
                var kota = $("#kota option:selected").text();
                var kecamatan = $("#kecamatan option:selected").text();
                var kelurahan = $("#kelurahan option:selected").text();
                alert(provinsi + " - " + kota + " - " + kecamatan + " - " + kelurahan);
            })
        })
    </script>
  </body>
</html>