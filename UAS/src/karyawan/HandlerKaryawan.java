/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package karyawan;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.Period;
import java.util.ArrayList;
import java.util.Scanner;
import karyawan.golongan.*;

/**
 *
 * @author Palguno Wicaksono
 */
public class HandlerKaryawan{
    public DataKaryawan dataKaryawans;
    ArrayList<DataKaryawan> dataKaryawan = new ArrayList<>();
    public String kodeKaryawan, namaKaryawan, alamat, tglLahir;
    public char golongan;
    public int statusPernikahan, jumlahAnak;
    
    public boolean tambahData(){
        try{
            Scanner data = new Scanner(System.in);
            System.out.print("Masukkan Kode Karyawan\t\t\t: ");
            setKodeKaryawan(data.nextLine());
            System.out.print("Masukkan Nama Karyawan\t\t\t: ");
            setNamaKaryawan(data.nextLine());
            System.out.print("Masukkan Alamat\t\t\t\t: ");
            setAlamat(data.nextLine());
            System.out.print("Masukkan Tanggal Lahir (YYYY-MM-DD)\t: ");
            try{
                setTglLahir(new SimpleDateFormat("yyyy-MM-dd").format(new SimpleDateFormat("yyyy-MM-dd").parse(data.nextLine())));
            }catch(ParseException e){
                System.out.println("Inputan harus (yyyy-MM-dd)\n");
                return false;
            }
            System.out.print("Masukkan Golongan(A/B/C)\t\t: ");
            setGolongan(data.next().charAt(0));
            System.out.print("Masukkan Status Pernikahan (0/1)\t: ");
            statusPernikahan = data.nextInt();
            setStatusPernikahan(statusPernikahan);
            if(statusPernikahan == 1){
                System.out.print("Masukkan Jumlah Anak\t\t\t: ");
                setJumlahAnak(data.nextInt());
            }else{
                setJumlahAnak(0);
            }
            this.dataKaryawan.add(new DataKaryawan(getKodeKaryawan(),getNamaKaryawan(),getAlamat(),getTglLahir(),getGolongan(),getStatusPernikahan(),getJumlahAnak()));
            System.out.println("Data karyawan berhasil ditambahkan\n");
            return true;
        }catch(Exception e){
            System.out.println("Inputan salah\n");
            return false;
        }
    }
    
    public boolean cariData(){
        Scanner data = new Scanner(System.in);
        System.out.print("Masukkan Kode Karyawan\t: ");
        String j = data.nextLine();
        for(int i=0; i<this.dataKaryawan.size();i++){
            if(this.dataKaryawan.get(i).kodeKaryawan.equals(j)){
                DataKaryawan profileKaryawan = dataKaryawan.get(i);
                System.out.println("=========================================");
                System.out.println("DATA PROFILE KARYAWAN");
                System.out.println("-----------------------------------------");
                System.out.println("Kode Karyawan           : "+profileKaryawan.kodeKaryawan);
                System.out.println("Nama Karyawan           : "+profileKaryawan.namaKaryawan);
                System.out.println("Alamat Karyawan         : "+profileKaryawan.alamat);
                System.out.println("Golongan                : "+(char) profileKaryawan.golongan);
                System.out.println("Usia                    : "+hitungUsia(profileKaryawan.tglLahir));
                if(profileKaryawan.statusPernikahan == 1){
                    System.out.println("Status Pernikahan\t: Menikah");
                    System.out.println("Jumlah Anak\t\t\t: "+this.dataKaryawan.get(i).jumlahAnak);
                }else{
                    System.out.println("Status Pernikahan   : Belum Menikah");
                }
                System.out.println("-----------------------------------------");
                switch(profileKaryawan.golongan){
                    case 'A':
                        A a = new A(profileKaryawan.statusPernikahan, 31, profileKaryawan.jumlahAnak);
                        a.tampilkanGaji();
                        break;
                    case 'B':
                        B b = new B(profileKaryawan.statusPernikahan, 31, profileKaryawan.jumlahAnak);
                        b.tampilkanGaji();
                        break;
                    case 'C':
                        C c = new C(profileKaryawan.statusPernikahan, 31, profileKaryawan.jumlahAnak);
                        c.tampilkanGaji();
                        break;
                }
                return true;
            }
        }
        System.out.println("Data karyawan tidak ditemukan\n");
        return true;
    }
    
    public boolean tampilkanData(){
        System.out.println("=========================================");
        System.out.format("%-10s%-20s%-5s%-5s%-15s%-5s\n", "KODE KARY", "NAMA KARY", "GOL", "USIA", "STATUS NIKAH", "JUMLAH ANAK");
        System.out.println("---------------------------------------------");
        for(int i=0; i<this.dataKaryawan.size();i++){
            DataKaryawan tampil = this.dataKaryawan.get(i);
            String statusMenikah;
            if(tampil.statusPernikahan == 1){
                statusMenikah = "Menikah";
            }else{
                statusMenikah = "Belum Menikah";
            }
            System.out.format("%-10s%-20s%-5s%-5s%-15s%-5s\n", tampil.kodeKaryawan, tampil.namaKaryawan, (char) tampil.golongan, hitungUsia(tampil.tglLahir), statusMenikah, tampil.jumlahAnak);
        }
        System.out.println("---------------------------------------------");
        return true;
    }
    
    public boolean hapusData(){
        Scanner data = new Scanner(System.in);
        System.out.print("Masukkan Kode Karyawan1\t: ");
        String j = data.nextLine();
        for(int i=0; i<this.dataKaryawan.size();i++){
            if(this.dataKaryawan.get(i).kodeKaryawan.equals(j)){
                this.dataKaryawan.remove(i);
                System.out.println("Data karyawan berhasil dihapus\n");
                return true;
            }
        }
        System.out.println("Data karyawan tidak ditemukan\n");
        return true;
    }

    public String getKodeKaryawan() {
        return kodeKaryawan;
    }

    public String getNamaKaryawan() {
        return namaKaryawan;
    }

    public String getAlamat() {
        return alamat;
    }

    public String getTglLahir() {
        return tglLahir;
    }

    public char getGolongan() {
        return golongan;
    }

    public int getStatusPernikahan() {
        return statusPernikahan;
    }

    public int getJumlahAnak() {
        return jumlahAnak;
    }
                
    public int hitungUsia(String tglLahir){
        LocalDate today = LocalDate.now();
        String[] data = tglLahir.split("-");
        int date = Integer.parseInt(data[2]);
        int month = Integer.parseInt(data[1]);
        int year = Integer.parseInt(data[0]);
        LocalDate birthday = LocalDate.of(year,month,date);
        Period p = Period.between(birthday, today);    
        return p.getYears();
    }

    public void setKodeKaryawan(String kodeKaryawan) {
        this.kodeKaryawan = kodeKaryawan;
    }

    public void setNamaKaryawan(String namaKaryawan) {
        this.namaKaryawan = namaKaryawan;
    }

    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }

    public void setGolongan(char golongan) {
        if(golongan == 'A' || golongan == 'B' || golongan == 'C'){
            this.golongan = golongan;
            
        }else{
            System.out.println("Input tidak valid");
            System.exit(1);
        }
    }

    public void setTglLahir(String tglLahir) {
        this.tglLahir = tglLahir;
    }

    public void setStatusPernikahan(int statusPernikahan) {
        if(statusPernikahan == 0 || statusPernikahan == 1){
            this.statusPernikahan = statusPernikahan;
        }else{
            System.out.println("Input tidak valid");
            System.exit(1);
        }        
    }

    public void setJumlahAnak(int jumlahAnak) {
        this.jumlahAnak = jumlahAnak;
    }

}
