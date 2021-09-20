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
public class Kerucut {
    public int diameter;
    public int tinggi;
    
    public void hitungVol(){
        double areaLing = Math.PI * ((diameter * diameter)/4);
        double hasil = (areaLing * tinggi)/3;
        System.out.println("Kerucut Volumenya: " + hasil);
    }
    
    public void hitungLuasSelimut(){
        double garisPelukis = Math.sqrt( ( (diameter*diameter) /4 ) + (tinggi * tinggi) );
        double hasil = Math.PI * (diameter/2) * garisPelukis;
        System.out.println("Kerucut Luas Selimutnya: " + hasil);
    }
    
    public void hitungLuasPermukaan(){
        double areaLing = Math.PI * ((diameter * diameter)/4);
        double garisPelukis = Math.sqrt( ( (diameter*diameter) /4 ) + (tinggi * tinggi) );
        double luasSelimut = Math.PI * (diameter/2) * garisPelukis;
        double hasil = areaLing + luasSelimut;
        System.out.println("Kerucut Luas Permukaannya: " + hasil);
    }
}
