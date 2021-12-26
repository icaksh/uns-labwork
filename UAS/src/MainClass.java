
import java.util.Scanner;
import karyawan.*;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Palguno Wicaksono
 */
public class MainClass {
    HandlerKaryawan karyawan = new HandlerKaryawan();
    private int pilihanMenu, pilihanSubMenu;
    private boolean kondisiPerulangan = true;
        
    public static void main(String[] args) {
        MainClass main = new MainClass();
        main.starter();
    }
    
    public void starter(){
        Scanner data = new Scanner(System.in);
        while(this.kondisiPerulangan){
            System.out.print("Menu Utama:\n1. Tambah data\n2. Hapus Data\n3. Cari Data\n4. Lihat Data\n5. Keluar\nMenu Pilihan (1-5): ");
            
            int pilihan = data.nextInt();
            handlerMenu(pilihan);
        }
    }
    
    public void handlerSubMenu(){
        Scanner data = new Scanner(System.in);
        System.out.print("Pilihan SubMenu:\n1. Kembali\n\nPilih Submenu: ");
        int pilihan = data.nextInt();
        starter();
    }
    
    public void handlerSubMenuTambahData(){
        Scanner data = new Scanner(System.in);
        System.out.print("Pilihan SubMenu:\n1. Kembali\n2. Tambah Data Kembali\n\nPilih Submenu: ");
        int pilihan = data.nextInt();
        switch(pilihan){
            case 1:
                starter();
                break;
            case 2:
                handlerMenu(1);
                break;
            default:
                handlerSubMenuTambahData();
                break;
        }
    }
    
    public void handlerSubMenuHapusData(){
        Scanner data = new Scanner(System.in);
        System.out.print("Pilihan SubMenu:\n1. Kembali\n2. Hapus Data Kembali\n\nPilih Submenu: ");
        int pilihan = data.nextInt();
        switch(pilihan){
            case 1:
                starter();
                break;
            case 2:
                handlerMenu(2);
                break;
            default:
                handlerSubMenuHapusData();
                break;
        }
        
    }
    
    public void handlerMenu(int pilihanMenu){
        switch(pilihanMenu){
            case 1:
                if(this.karyawan.tambahData()){
                    handlerSubMenuTambahData();
                }
                break;
            case 2:
                if(this.karyawan.hapusData()){
                    handlerSubMenuHapusData();
                }
                break;
            case 3:
                if(this.karyawan.cariData()){
                    handlerSubMenu();
                }else{
                    this.kondisiPerulangan = false;
                }
                break;
            case 4:
                if(this.karyawan.tampilkanData()){
                    handlerSubMenu();
                }else{
                    this.kondisiPerulangan = false;
                }
                break;
            case 5:
                System.exit(0);
                break;
            default:
                starter();
                break;
        }
    }
}
