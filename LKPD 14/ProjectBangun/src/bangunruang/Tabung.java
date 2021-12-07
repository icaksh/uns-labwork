/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package bangunruang;

/**
 *
 * @author Palguno Wicaksono
 */
public class Tabung extends BangunRuang {
    private double diameter;
    private double tinggi;
    
    public Tabung(double diameter, double tinggi) {
        this.diameter = diameter;
        this.tinggi = tinggi;
    }
    public double hitungLuas(){
        double areaLing = Math.PI * ((diameter * diameter)/4);
        double kLingkaran = Math.PI * diameter;
        double hasil = kLingkaran * tinggi + areaLing ;
        return hasil;
    }
    
    public double hitungVolume(){
        return Math.PI * ((diameter * diameter)/4) * tinggi;
    }
}
