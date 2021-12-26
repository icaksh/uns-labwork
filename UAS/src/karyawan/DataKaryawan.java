/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package karyawan;

import java.util.Date;

/**
 *
 * @author Palguno Wicaksono
 */
public class DataKaryawan extends HandlerKaryawan {
    public String kodeKaryawan, namaKaryawan, alamat, tglLahir;
    public int golongan, statusPernikahan, jumlahAnak;
    
    public DataKaryawan(String kodeKaryawan,String namaKaryawan,String alamat, String tglLahir, char golongan, int statusPernikahan, int jumlahAnak){
        this.kodeKaryawan = kodeKaryawan;
        this.namaKaryawan = namaKaryawan;
        this.alamat = alamat;
        this.tglLahir = tglLahir;
        this.golongan = golongan;
        this.statusPernikahan = statusPernikahan;
        this.jumlahAnak = jumlahAnak;
    }
}
