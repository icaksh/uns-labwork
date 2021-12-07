/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Mobil;

/**
 *
 * @author Palguno Wicaksono
 */
public abstract class Mobil {
    public abstract double hitungMinBBM();
    public abstract String hitungWaktu();
    
    public void tampilHasil(){
        System.out.println("BBM Minimal : " + this.hitungMinBBM() + " liter");
        System.out.println("Lama Waktu  : " + this.hitungWaktu() +" menit");
    }
}
