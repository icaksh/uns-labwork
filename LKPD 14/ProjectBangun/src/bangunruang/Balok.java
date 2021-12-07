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
public class Balok extends BangunRuang {
    private double panjang;
    private double lebar;
    private double tinggi;
    
    public Balok(double panjang, double lebar, double tinggi) {
        this.panjang = panjang;
        this.lebar = lebar;
        this.tinggi = tinggi;
    } 
    
    public double hitungLuas(){
        return 2 * (panjang *lebar) + 2 * (panjang * tinggi) + 2 * (lebar*tinggi);
    }
    
    public double hitungVolume(){
        return panjang * lebar * tinggi;
    }
}
