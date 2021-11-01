/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gametebakangkaproject;

/**
 *
 * @author Palguno Wicaksono
 */
public class Handler {
    public int Handler(){
        IntGenerator angka = new IntGenerator();
        int theNumber = angka.IntGenerator();
        return theNumber;
    }
    public boolean cekAngka(int a, int theNumber){
        if (a < theNumber){
            System.out.println("Hehehe… Bilangan tebakan anda terlalu kecil");
            return true;
        }else if(a > theNumber){
            System.out.println("Hehehe… Bilangan tebakan anda terlalu besar");
            return true;
        }else{
            System.out.println("Yeeee… Bilangan tebakan anda BENAR :-)");
            return false;
        }
    }
}
