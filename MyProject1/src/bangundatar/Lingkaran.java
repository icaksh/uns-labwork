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
public class Lingkaran {
    public int radius;
    
    public void hitungLuas(){
        double hasil = Math.PI * radius * radius;
        System.out.println("Lingkaran luasnya: " + hasil);
    }
    
    public void hitungKeliling(){
        double hasil = Math.PI * 2 * radius;
        System.out.println("Lingkaran kelilingnya: " + hasil);
    }
}
