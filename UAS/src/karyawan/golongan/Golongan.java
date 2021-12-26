/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package karyawan.golongan;

/**
 *
 * @author Palguno Wicaksono
 */
public abstract class Golongan {
    public abstract double gajiPokok();
    public abstract double tunjanganPernikahan();
    public abstract double tunjanganPegawai();
    public abstract double tunjanganAnak();
    
    public double gajiKotor(){
        return this.gajiPokok() + this.tunjanganPernikahan() + this.tunjanganPegawai() + this.tunjanganAnak();
    }
    
    public double potonganGajiKotor(){
        return (2.5/100) * gajiPokok();
    }
    
    public double gajiBersih(){
        return gajiKotor() - potonganGajiKotor();
    }
    
    public void tampilkanGaji(){
        System.out.println("Gaji Pokok\t\t: Rp"+this.gajiPokok());
        System.out.println("Tunjangan Istri/Suami\t: Rp"+this.tunjanganPernikahan());
        System.out.println("Tunjangan Pegawai\t: Rp"+this.tunjanganPegawai());
        System.out.println("Tunjangan Anak\t\t: Rp"+this.tunjanganAnak());
        System.out.println("-----------------------------------------+");
        System.out.println("Gaji Kotor\t\t: Rp"+gajiKotor());
        System.out.println("Potongan\t\t: Rp"+potonganGajiKotor());
        System.out.println("-----------------------------------------+");
        System.out.println("Gaji Bersih\t\t: Rp"+gajiBersih()+"\n");
    }
}
