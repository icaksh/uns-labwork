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
public class PersegiPanjang extends BangunDatar {
    private double panjang, lebar;

    public PersegiPanjang(double panjang, double lebar) {
        this.panjang = panjang;
        this.lebar = lebar;
    } 
    
    public double hitungLuas(){
        return this.panjang * this.lebar;
    }
    
    public double hitungKeliling(){
         return 2 * (this.panjang + this.lebar);
    }
}
