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
public class BangunDatarMain {
    public static void main(String[] args) {
        PersegiPanjang pp1 = new PersegiPanjang();
        pp1.panjang = 25;
        pp1.lebar = 38;
        pp1.hitungLuas();
        pp1.hitungKeliling();
        System.out.println("Persegi A");
        Persegi p1 = new Persegi();
        p1.sisi = 10;
        p1.hitungLuas();
        p1.hitungKeliling();
        
        System.out.println("\nPersegi B");
        Persegi p2 = new Persegi();
        p2.sisi = 15;
        p2.hitungLuas();
        p2.hitungKeliling();
        
        System.out.println("\nLingkaran A");
        Lingkaran c1 = new Lingkaran();
        c1.radius = 25;
        c1.hitungLuas();
        c1.hitungKeliling();
        
        System.out.println("\nLingkaran B");
        Lingkaran c2 = new Lingkaran();
        c2.radius = 37;
        c2.hitungLuas();
        c2.hitungKeliling();
    }
}
