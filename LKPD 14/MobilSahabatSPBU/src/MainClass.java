
import Mobil.*;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Palguno Wicaksono
 */
public class MainClass {
    public static void main(String[] args) {
        
        // Mobil A
        System.out.println("Mobil A (Sedan (j: 157.6, v: 60):");
        Mobil a = new Sedan(60, 157.6);
        a.hitungMinBBM();
        a.hitungWaktu();
        a.tampilHasil();
        
        // Mobil B
        System.out.println("Mobil B (Sedan (j: 536.4, v: 65):");
        Mobil b = new Sedan(65, 536.4);
        b.hitungMinBBM();
        b.hitungWaktu();
        b.tampilHasil();
        
        // Mobil C
        System.out.println("Mobil C (SUV (j: 660.8, v: 57):");
        Mobil c = new SUV(60, 660.8);
        c.hitungMinBBM();
        c.hitungWaktu();
        c.tampilHasil();
        
        // Mobil D
        System.out.println("Mobil D (SUV (j: 532.8, v: 62):");
        Mobil d = new SUV(60, 532.8);
        d.hitungMinBBM();
        d.hitungWaktu();
        d.tampilHasil();
        
        // Mobil E
        System.out.println("Mobil E (MPV (j: 539.4, v: 64):");
        Mobil e = new MPV(60, 539.4);
        e.hitungMinBBM();
        e.hitungWaktu();
        e.tampilHasil();
        
        // Mobil F
        System.out.println("Mobil F (MPV (j: 431.1, v: 53):");
        Mobil f = new MPV(60, 431.1);
        f.hitungMinBBM();
        f.hitungWaktu();
        f.tampilHasil();

    }
}
