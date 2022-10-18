<?php
include("koneksi.php");
$query = $koneksi->query('SELECT * FROM tma ORDER BY id_tma DESC');
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Client Side</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="serverside.php">Server Side</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <table id="data" class="display" style="width:100%">
        <h1>Tabel Tinggi Permukaan Air</h1>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nilai</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
                </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#data').DataTable({
                "order": [[2, "desc"]],
                "bInfo" : false,
                "bLengthChange": false,
                "searching": false,
                "processing": true,
                "serverSide": true,
                "ajax": "data.php",
                "columnDefs": [
                    {
                    "data": "id_tma",
                    "targets": -1,
                    render: function ( data, type, row ) {
                        return '<button type=\"button\" class=\"infone btn btn-primary\" data-id=\"'+row[1]+'\">Info</button> <buttone type=\"button\" class=\"delete btn btn-danger\" id=\"'+row[0]+'\" data-id=\"'+row[0]+'\" >Delete</buttone>';
                    }
                    }
                ]
            });
            
            $('#data').on('click', 'button', function() {
                col1=$(this).data('id');
                if(col1 < 8.25){
                alert("Sungai aman");
                }else{
                    alert("Sungai limpas");
                }
            });

            $('#data').on('click', 'buttone', function() {
                console.log("Wicak")
                var el = this
                var deleteid = $(this).data('id')
                var result = confirm('Apakah Anda yakin akan menghapus data dengan ID:'+deleteid)
                if(result){
                    $.ajax({
                        url: 'handler.php',
                        type: 'POST',
                        data: { id:deleteid},
                        success: function(response){
                            if(response == 1){
                                $(el).closest('tr').css('background','tomato');
							    $(el).closest('tr').fadeOut(800,function(){
								$(this).remove();
							    });
                                }else{
                                    alert('Record not deleted.');
                                }
                            }
                    })
                }
            });
        } );
    </script>
</body>

</html>