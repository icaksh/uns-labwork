/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projectluasbangunkompleks;

/**
 *
 * @author Palguno Wicaksono
 */
public class ProjectLuasBangunKompleks {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Persegi p = new Persegi();
        p.sisi = 42;
        
        Lingkaran l = new Lingkaran();
        l.radius = 21;
        
        double luasProject1 = p.hitungLuas() + 2 * l.hitungLuas();
        System.out.println("Luas bangun Project 1 adalah: " + luasProject1);
        
        Lingkaran lingBesar = new Lingkaran();
        lingBesar.radius = 14;
        
        Lingkaran lingKecil = new Lingkaran();
        lingKecil.radius = 7;
        
        double luasProject2 = (lingBesar.hitungLuas()/2) - lingKecil.hitungLuas();
        System.out.println("Luas bangun Project 2 adalah: " + luasProject2);
    }
}
