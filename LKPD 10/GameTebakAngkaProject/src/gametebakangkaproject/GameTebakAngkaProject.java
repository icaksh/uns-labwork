/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gametebakangkaproject;

import java.util.Scanner;

/**
 *
 * @author Palguno Wicaksono
 */
public class GameTebakAngkaProject {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner data = new Scanner(System.in);
        System.out.println("Hai.. nama saya Mr. Java, saya telah memilih sebuah bilangan bulat secara acak antara 0 s/d 100. Silakan tebak ya!!!");
        Handler handler = new Handler();
        int angkane = handler.Handler();
        boolean handlere = true;
        while(handlere){
            System.out.println("Masukkan tebakan anda: ");
            int angka = data.nextInt();
            handlere = handler.cekAngka(angka,angkane);
        }
    }
    
}
