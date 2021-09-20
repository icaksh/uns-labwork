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
public class Tabung {
    public int diameter;
    public int tinggi;
    
    public void hitungVol(){
        double areaLing = Math.PI * ((diameter * diameter)/4);
        double hasil = areaLing * tinggi;
        System.out.println("Tabung Volumenya: " + hasil);
    }
    
    public void hitungLuasSelimut(){
        double kLingkaran = Math.PI * diameter;
        double hasil = kLingkaran * tinggi;
        System.out.println("Tabung Luas Selimutnya: " + hasil);
    }
    
    public void hitungLuasPermukaan(){
        double areaLing = Math.PI * ((diameter * diameter)/4);
        double kLingkaran = Math.PI * diameter;
        double hasil = kLingkaran * tinggi + areaLing ;
        System.out.println("Tabung Luas Permukaannya: " + hasil);
    }
}
