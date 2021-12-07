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
public class SUV extends Mobil{
    private double kecepatan, jarak;
    
    public SUV(double kecepatan, double jarak) {
        this.kecepatan = kecepatan;
        this.jarak = jarak;
    } 
    
    // method untuk hitung luas lingkaran
    public double hitungMinBBM(){
        return Math.ceil(this.jarak/12);
    }
    
    // method untuk hitung keliling
    public String hitungWaktu(){
 	double waktu = this.jarak/this.kecepatan;
        int hour = (int) Math.floor(waktu);
        int min = (int) (waktu*60) % 60;
        return Integer.toString(hour) + " jam " +Integer.toString(min);
    }
}
