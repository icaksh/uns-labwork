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
public class A extends Golongan{
    private boolean statusPernikahan, tunjanganAnak;
    private int usiaPegawai, jumlahAnak;
    private final int gajiPokok = 5000000;
    
    public A(int statusPernikahan,int usiaPegawai,int jumlahAnak) {
        if(statusPernikahan == 1){
            this.statusPernikahan = true;
        }else{
            this.statusPernikahan = false;
        }
        this.usiaPegawai = usiaPegawai;
        this.jumlahAnak = jumlahAnak;
    } 
    
    @Override
    public double gajiPokok(){
        return this.gajiPokok;
    }
    
    @Override
    public double tunjanganPernikahan(){
        if(this.statusPernikahan){
            return 0.1*this.gajiPokok;
        }else{
            return 0;
        }
    }
    
    @Override
    public double tunjanganPegawai(){
        if(this.usiaPegawai > 30){
            return 0.15*this.gajiPokok;
        }else{
            return 0;
        }
    }
    
    @Override
    public double tunjanganAnak(){
        if(this.statusPernikahan){
            return this.jumlahAnak*0.05*this.gajiPokok;
        }else{
            return 0;
        }
    }
}