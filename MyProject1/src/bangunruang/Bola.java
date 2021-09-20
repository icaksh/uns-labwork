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
public class Bola {
    public int diameter;
    
    public void hitungVol(){
        double hasil = (4/3) * Math.PI * ((diameter * diameter * diameter)/8);
        System.out.println("Bola Volumenya: " + hasil);
    }
    
    public void hitungLuasPermukaan(){
        double hasil = 4 * Math.PI * ((diameter * diameter)/4);
        System.out.println("Bola Luas Permukaannya: " + hasil);
    }
}
