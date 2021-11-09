/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package simplearraylist;

import java.util.ArrayList;
import java.util.Scanner;

/**
 *
 * @author Palguno Wicaksono
 */
public class Handler {
    ArrayList<String> dataBil = new ArrayList<>();
    
    void add(){
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan data string: ");
        this.dataBil.add(input.nextLine());
        System.out.println("Daftar string dalam array list: "+ this.dataBil);
        System.out.println("Tekan enter untuk melanjutkan");
        input.nextLine();
    }
    
    void searcher(){
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan string yang mau dicari: ");
        String data = input.nextLine();
        int index = this.dataBil.indexOf(data);
        if(index>-1){
            System.out.println("String "+data+" ada di index ke "+index+" di dalam data");
        }else{
            System.out.println("String "+data+" tidak ada dalam data");
        }
        System.out.println("Tekan enter untuk melanjutkan");
        input.nextLine();
    }
    
    void deleter(){
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan string yang mau dicari: ");
        String data = input.nextLine();
        int index = this.dataBil.indexOf(data);
        if(index>-1){
            this.dataBil.remove(index);
            System.out.println("String "+data+" sudah dihapus di dalam data");
        }else{
            System.out.println("String "+data+" tidak ada dalam data");
        }
        System.out.println("Tekan enter untuk melanjutkan");
        input.nextLine();
    }
    
    void reader(){
        Scanner input = new Scanner(System.in);
        System.out.println("Daftar string dalam array list: "+ this.dataBil);
        System.out.println("Tekan enter untuk melanjutkan");
        input.nextLine();
    }
    
    void handler(){
        Scanner input = new Scanner(System.in);
        while(true){
            System.out.println("Menu data ArrayList\n1. Tambah data\n2. Cari data\n3. Hapus data\n4. Tampil data\n5. Keluar");
            System.out.print("Pilih nomer berapa: ");
            int handler = input.nextInt();
            switch(handler){
                case 1:
                    add();
                    break;
                case 2:
                    searcher();
                    break;
                case 3:
                    deleter();
                    break;
                case 4:
                    reader();
                    break;
                case 5:
                    System.exit(0);
                    break;
            }
        }
        
    }
}
