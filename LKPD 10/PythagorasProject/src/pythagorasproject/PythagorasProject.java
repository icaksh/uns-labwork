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
public class PythagorasProject {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner data = new Scanner(System.in);
        System.out.println("Pilihan menu");
        System.out.println("1. Cek triple pythagoras\n2. Menentukan sisi miring\n3. Menentukan sisi siku\n4. Keluar");
        System.out.println("\nPilih menu:");
        int pilihan = data.nextInt();
        switch(pilihan){
            case 1: 
                System.out.println("Memilih menu triple pythagoras\n");
                TriplePythagoras triple = new TriplePythagoras();
                break
                ;
            case 2: 
                System.out.println("Memilih menu cari sisi miring\n");
                Hipotenusa hipo = new Hipotenusa();
                break;
            case 3: 
                System.out.println("Memilih menu cari sisi siku\n");
                SisiSiku siring = new SisiSiku();
                break;
            case 4: 
                System.out.println("Memilih menu keluar");
                System.exit(0);
                break;
        }
    }
    
}
