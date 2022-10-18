<?php
include("koneksi.php");
$query = $koneksi->query('SELECT * FROM ch');
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
    $data[] = array($row['waktu'],floatval($row['nilai']));
}
$result = json_encode($data)
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
    <script src="https://code.highcharts.com/highcharts.src.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Tinggi Muka Air</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="ch.php">Curah Hujan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="kekeruhan.php">Kekeruhan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="kombinasi.php">Kombinasi</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Grafik Curah Hujan</div>
                        <hr>
                        <div id="grafik"></div>
                    </div>
                </div>
            </div>
        </div>
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

    <script type="text/javascript">
        Highcharts.chart('grafik', {
            title: {
            text: 'Curah Hujan'
        },
        chart: {
                type: 'column',
                zoomType: 'x'
        },
        subtitle: {
            text: 'Latihan Highcharts'
        },
        yAxis: {
            title: {
            text: 'Curah Hujan per menit'
            },
            reversed: true
        },
        xAxis: {
            type: 'category', 
            accessibility: {
                rangeDescription: 'Waktu'
            }
        },
        tooltip: {
            pointFormat: '{point.y} mm'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                }
            },
            column:{
                color: 'green'
            }
        },
        series: [{
            name: 'Curah Hujan',
            lineWidth: 2,
            data: <?= $result ?>
        }],
        responsive: {
            rules: [{
                condition: {
                maxWidth: 500
            },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
        });
    </script>
</body>

</html>