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
public class Lingkaran {
    
    double hitungLuas(int radius){
        double hasil = Math.PI * radius * radius;
        return hasil;
    }
    
    double hitungLuas(double radius){
        double hasil = Math.PI * radius * radius;
        return hasil;
    }
    
    double hitungKeliling(int radius){
        double hasil = Math.PI * 2 * radius;
        return hasil;
    }
    
    double hitungKeliling(double radius){
        double hasil = Math.PI * 2 * radius;
        return hasil;
    }
}
