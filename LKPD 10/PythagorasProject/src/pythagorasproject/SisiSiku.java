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
public class SisiSiku {
    public SisiSiku(){
        Scanner data = new Scanner(System.in);
        System.out.println("Masukkan panjang sisi miring: ");
        double a = data.nextDouble();
        System.out.println("Masukkan panjang alas/tinggi: ");
        double b = data.nextDouble();
        cariSisiSiku(a,b);
    }
    static void cariSisiSiku(double a, double b){
        double siring = Math.sqrt(Math.pow(a, 2) - Math.pow(b,2));
        System.out.println("Alas/tinggi segitiga dengan sisi miring " +a + " dan alas/tinggi yang diketahui " +b+" adalah "+ siring);
    }
}
