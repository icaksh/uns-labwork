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
public class Persegi {
    public int sisi;
    
    public void hitungLuas(){
        int hasil = sisi * sisi;
        System.out.println("Persegi luasnya: " + hasil);
    }
    
    public void hitungKeliling(){
        int hasil = 4 * sisi;
        System.out.println("Persegi kelilingnya: " + hasil);
    }
}
