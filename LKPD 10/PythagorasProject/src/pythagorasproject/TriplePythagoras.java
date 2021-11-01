/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pythagorasproject;

import java.util.Scanner;

/**
 *
 * @author Palguno Wicaksono
 */
public class TriplePythagoras {
    
    public TriplePythagoras(){
        Scanner data = new Scanner(System.in);
        System.out.println("Masukkan panjang alas: ");
        double a = data.nextDouble();
        System.out.println("Masukkan panjang tinggi: ");
        double b = data.nextDouble();
        System.out.println("Masukkan panjang sisi miring: ");
        double c = data.nextDouble();
        
        cekTriple(a,b,c);
    }
    static void cekTriple(double a, double b, double c){
        if(Math.sqrt(Math.pow(a, 2) + Math.pow(b,2)) == c){
            System.out.println(a + ", " +b+", "+ c+ " merupakan Triple Phytagoras");
        }else{
            System.out.println(a + ", " +b+", "+ c+ " bukan Triple Phytagoras");
        }
    }
}
