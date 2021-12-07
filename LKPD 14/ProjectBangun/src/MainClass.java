
import bangundatar.*;
import bangunruang.*;

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
        
        // Persegi
        System.out.println("Persegi (s: 4):");
        BangunDatar square = new Persegi(5);
        square.hitungLuas();
        square.hitungKeliling();
        square.tampilHasil();
        
        // Persegi Panjang
        System.out.println("\nPersegi (p: 20, l: 10):");
        BangunDatar rectangle = new PersegiPanjang(20,10);
        rectangle.hitungLuas();
        rectangle.hitungKeliling();
        rectangle.tampilHasil();
        
        // Lingkaran
        System.out.println("\nLingkaran (r: 40):");
        BangunDatar circle = new Lingkaran(40);
        circle.hitungLuas();
        circle.hitungKeliling();
        circle.tampilHasil();
        
        // Balok
        System.out.println("\nBalok (p: 10, l: 7, t: 4):");
        BangunRuang balok = new Balok(10,7,4);
        balok.hitungLuas();
        balok.hitungVolume();
        balok.tampilHasil();
        
        // Tabung
        System.out.println("\nTabung (r: 10, t: 24):");
        BangunRuang cylinder = new Tabung(10,24);
        cylinder.hitungLuas();
        cylinder.hitungVolume();
        cylinder.tampilHasil();
        
        // Balok
        System.out.println("\nBola (d: 35):");
        BangunRuang sphere = new Bola(35);
        sphere.hitungLuas();
        sphere.hitungVolume();
        sphere.tampilHasil();
    }
}

