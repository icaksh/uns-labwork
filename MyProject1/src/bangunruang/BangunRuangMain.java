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
public class BangunRuangMain {
    public static void main(String[] args) {
        System.out.println("Bola");
        Bola bo1 = new Bola();
        bo1.diameter = 30;  
        bo1.hitungVol();
        bo1.hitungLuasPermukaan();
        
        System.out.println("\nTabung");
        Tabung tb1 = new Tabung();
        tb1.diameter = 10;
        tb1.tinggi = 15;
        tb1.hitungVol();
        tb1.hitungLuasSelimut();
        tb1.hitungLuasPermukaan();
        
        System.out.println("\nKerucut");
        Kerucut kc1 = new Kerucut();
        kc1.diameter = 30;
        kc1.tinggi = 20;    
        kc1.hitungVol();
        kc1.hitungLuasSelimut();
        kc1.hitungLuasPermukaan();
    }
    
}
