<?php
if(isset($_SESSION['username'])){

}
$namaFile = "Register";
include("header.php");
?>

    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="https://i.imgur.com/CXQmsmF.png" class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <h1 > Pendaftaran Akun </h1>
                        <hr>
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Username</h6>
                            </label> <input type="text" name="username" placeholder="icaksh" required> </div>
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Password</h6>
                            </label> <input type="password" name="password" placeholder="Enter password" required> </div>
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Konfirmasi Password</h6>
                            </label> <input type="password" name="konfirm_password" placeholder="Enter password" required> </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div> <small class="or text-center">Usaha</small>
                            <div class="line"></div>
                        </div>
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Nama Usaha</h6>
                            </label> <input type="password" name="usaha_nama" placeholder="PT. Money Laundry Sejahtera"required> </div>
                            <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Alamat Usaha</h6>
                            </label> <input type="password" name="usaha_alamat" placeholder="Jln. Kavaleri 19, Kentingan"required> </div>
                            <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">NPWP</h6>
                            </label> <input type="password" name="usaha_npwp" placeholder="092542943407000"required> </div>
                            <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Golongan Usaha</h6>
                            </label></div>
                            <div class="row px-3 mb-4">
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input id="chk1" type="radio" name="usaha_gol" value="1" class="custom-control-input" required="required"> 
                                <label for="chk1" class="custom-control-label text-sm">Mikro</label> </div>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input id="chk2" type="radio" name="usaha_gol" value="2" class="custom-control-input"> 
                                <label for="chk2" class="custom-control-label text-sm">Kecil</label> </div>
                            <div class="custom-control custom-radio custom-control-inline"> 
                                <input id="chk3" type="radio" name="usaha_gol" value="3" class="custom-control-input"> 
                                <label for="chk3" class="custom-control-label text-sm">Menengah</label> </div>
                            </div>
                            <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Modal Usaha</h6>
                                
                            </label></div>
                                <div class="row px-3 mb-4">
                            <div class="custom-control custom-checkbox custom-control-inline"> 
                                <input id="chk1" type="checkbox" name="usaha_modal[]" value="1" class="custom-control-input"> 
                                <label for="chk1" class="custom-control-label text-sm">Bank</label> </div>
                            <div class="custom-control custom-checkbox custom-control-inline"> 
                                <input id="chk2" type="checkbox" name="usaha_modal[]" value="2" class="custom-control-input"> 
                                <label for="chk2" class="custom-control-label text-sm">BUMN</label> </div>
                            <div class="custom-control custom-checkbox custom-control-inline"> 
                                <input id="chk3" type="checkbox" name="usaha_modal[]" value="3" class="custom-control-input"> 
                                <label for="chk3" class="custom-control-label text-sm">Bantuan Sosial</label> </div>
                            <div class="custom-control custom-checkbox custom-control-inline"> 
                                <input id="chk4" type="checkbox" name="usaha_modal[]" value="4" class="custom-control-input"> 
                                <label for="chk4" class="custom-control-label text-sm">Lainnya</label> </div>
                            </div>
                            <div class="row px-3 mb-4">
                            <div class="line"></div> <small class="or text-center">Pemilik</small>
                            <div class="line"></div>
                            </div>
                            <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Nama Pemilik</h6>
                            </label> <input type="password" name="usaha_pemilik" placeholder="Dmitri Saklitunov"> </div>
                            <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Tempat Lahir</h6>
                            </label> <input type="password" name="usaha_pem_tl" placeholder="Surakarta"> </div>
                            <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Tanggal Lahir</h6>
                            </label> <input type="date" name="usaha_pem_tgl" placeholder="Enter password"> </div>
                            <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Nomor Telepon</h6>
                            </label> <input type="password" name="usaha_phone" placeholder="081234567890"> </div>
                        <div class="row px-3 mb-4">
                            Dengan mendaftar, saya menyetujui syarat dan ketentuan yang berlaku
                        </div>
                        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Daftar</button> </div>
                        
                    </div>
                </div>
            </div>
<?php include("footer.php");?>
</html>