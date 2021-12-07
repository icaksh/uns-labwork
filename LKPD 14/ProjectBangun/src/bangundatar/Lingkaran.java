/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package bangundatar;

/**
 *
 * @author Palguno Wicaksono
 */
public class Lingkaran extends BangunDatar {
    // atribut jari-jari
    private double rad;
    
    public Lingkaran(double rad) {
        this.rad = rad;
    } 
    
    // method untuk hitung luas lingkaran
    public double hitungLuas(){
        return Math.PI * this.rad * this.rad;
    }
    
    // method untuk hitung keliling
    public double hitungKeliling(){
 	return Math.PI * this.rad * 2;
    }
}

