/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projectbangundatar2;

/**
 *
 * @author Palguno Wicaksono
 */
public class ProjectBangunDatar2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        PersegiPanjang p = new PersegiPanjang();
        System.out.println("Persegi Panjang 1 luasnya: " + p.hitungLuas(10, 5)+" dan kelilingnya " + p.hitungKeliling(10, 5));
        System.out.println("Persegi Panjang 2 luasnya: " + p.hitungLuas(3.6, 8)+" dan kelilingnya " + p.hitungKeliling(3.6, 8));
        System.out.println("Persegi Panjang 3 luasnya: " + p.hitungLuas(6, 8.3)+" dan kelilingnya " + p.hitungKeliling(6, 8.3));
        System.out.println("Persegi Panjang 4 luasnya: " + p.hitungLuas(5.6, 8.8)+" dan kelilingnya " + p.hitungKeliling(5.6, 8.8));
        
        Persegi per = new Persegi();
        System.out.println("Persegi 1 luasnya: " + per.hitungLuas(4.5)+" dan kelilingnya " + per.hitungKeliling(4.5));
        System.out.println("Persegi 2 luasnya: " + per.hitungLuas(7)+" dan kelilingnya " + per.hitungKeliling(7));
        
        Lingkaran l = new Lingkaran();
        System.out.println("Lingkaran 1 luasnya: " + l.hitungLuas(5)+" dan kelilingnya " + l.hitungKeliling(5));
        System.out.println("Lingkaran 2 luasnya: " + l.hitungLuas(7.4)+" dan kelilingnya " + l.hitungKeliling(7.4));
        
        Segitiga s = new Segitiga();
        System.out.println("Segitiga 1 luasnya: " + s.hitungLuas(8,10)+" dan kelilingnya tidak dapat ditentukan");
        System.out.println("Segitiga 2 luasnya: " + s.hitungLuas(8,11.5)+" dan kelilingnya tidak dapat ditentukan");
        System.out.println("Segitiga 3 luasnya: " + s.hitungLuas(12.2,9)+" dan kelilingnya tidak dapat ditentukan");
        System.out.println("Segitiga 4 luasnya: " + s.hitungLuas(13.9,20.7)+" dan kelilingnya tidak dapat ditentukan");
        
        System.out.println("Segitiga tidak dapat ditentukan kelilingnya dikarenakan hanya diketahui alas dan tinggi");
    }
    
}
