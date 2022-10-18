<?php


include('koneksi.php');
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'],  PHP_URL_PATH);
$uri_segmen = explode('/', $uri_path);

function get_mahasiswa($id=null){
    global $koneksi;
    $query = "SELECT * FROM mahasiswa";
    if(!empty($id)){
        $query .= " WHERE id=$id LIMIT 1";
    }
    $respon = array();
    $data = array();
    $results = $koneksi->query($query)->fetchAll(PDO::FETCH_ASSOC);
    if($results){
        $respon = array(
            'status' => "sukses",
            'pesan' => "data berhasil diambil"
        );
        foreach ($results as $result => $value) {
            $respon['data'][] = array(
                'nim' => $value['nim'],
                'nama' => $value['nama'],
                'angkatan' => $value['angkatan'],
                'semester' => $value['semester'],
                'ipk' => $value['ipk'],
                'email' => $value['email'],
                'telepon' => $value['telepon']
            );
        }
    }else{
        $respon = array(
            'status' => "gagal",
            'pesan' => "data tidak berhasil diambil"
        );
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}

function insert_mahasiswa($id=null){
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'),true);
    $query = $koneksi->prepare('INSERT INTO mahasiswa VALUES (?, ?, ?, ?, ?, ?, ?)');
    $execute = $query->execute([$data['nim'], $data['nama'], $data['angkatan'], $data['semester'], $data['ipk'],$data['email'],$data['telepon']]);
    if($execute){
        $respon = array(
            'status' => "sukses",
            'pesan' => "data berhasil ditambahkan"
        );
    }else{
        $respon = array(
            'status' => "gagal",
            'pesan' => "data gagal ditambahkan"
        );
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}

function update_mahasiswa($id=null){
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'),true);
    $query = $koneksi->prepare('UPDATE mahasiswa SET nama = ?, angkatan = ?, semester = ?, ipk = ?, email = ?, telepon=? WHERE nim = ?');
    $execute = $query->execute([$data['nama'], $data['angkatan'], $data['semester'], $data['ipk'],$data['email'],$data['telepon'], $data['nim']]);
    if($execute){
        $respon = array(
            'status' => "sukses",
            'pesan' => "data berhasil diperbarui"
        );
    }else{
        $respon = array(
            'status' => "gagal",
            'pesan' => "data gagal diperbarui"
        );
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}

function delete_mahasiswa($id=null){
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'),true);
    $query = $koneksi->prepare('DELETE FROM mahasiswa WHERE nim = ?');
    $execute = $query->execute([ $data['nim']]);
    if($execute){
        $respon = array(
            'status' => "sukses",
            'pesan' => "data berhasil dihapus"
        );
    }else{
        $respon = array(
            'status' => "gagal",
            'pesan' => "data gagal dihapus"
        );
    }
    header('Content-type:application/json');
    echo json_encode($respon);
}


switch ($request) {
    case 'GET':
        if(!empty($uri_segmen[2])){
            $id = intval($uri_segmen[2]);
            get_mahasiswa($id);
        }else{
            get_mahasiswa();
        }
        break;
    case 'POST':
        insert_mahasiswa();
        break;
    case 'PUT':
        update_mahasiswa($id);
        break;
    case 'DELETE':
        delete_mahasiswa($id);
        break;
    default:
        break;
}