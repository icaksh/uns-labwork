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
public class Hipotenusa {
    public Hipotenusa(){
        Scanner data = new Scanner(System.in);
        System.out.println("Masukkan panjang alas: ");
        double a = data.nextDouble();
        System.out.println("Masukkan panjang tinggi: ");
        double b = data.nextDouble();
        cariHipotenusa(a,b);
    }
    static void cariHipotenusa(double a, double b){
        double hipotenusa = Math.sqrt(Math.pow(a, 2) + Math.pow(b,2));
        System.out.println("Sisi miring segitiga dengan alas " +a + " dan tinggi " +b+" adalah "+ hipotenusa);
    }
}
