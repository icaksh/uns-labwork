/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rentalconsole;

import java.time.LocalDate;
import java.time.temporal.ChronoUnit;
import java.util.ArrayList;
import java.util.Scanner;

/**
 *
 * @author Palguno Wicaksono
 */
public class Handler {
    public DataMember dataMembers;
    ArrayList<DataMember> dataMember = new ArrayList<>();
    public String memberId, calPinjam, calKembali;
    public int tglPinjam, blnPinjam, thnPinjam, tglKembali, blnKembali, thnKembali, banyakHari;
    
    public void handle(){    
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan ID Member: ");
        memberId = input.nextLine();
        Membership member = new Membership();
        member.tambahMember(new DataMember("M001", "Mr. X", "Silver"));
        member.tambahMember(new DataMember("M002", "Mr. Y", "Gold"));
        member.tambahMember(new DataMember("M003", "Mr. Z", "Platinum"));
        this.dataMembers = member.cariMember(memberId);
        System.out.print("Masukkan Tgl Pinjam: ");
        setTglPinjam(input.nextInt());
        System.out.print("Masukkan Bulan Pinjam: ");
        setBlnPinjam(input.nextInt());
        System.out.print("Masukkan Tahun Pinjam: ");
        setThnPinjam(input.nextInt());
        System.out.print("Masukkan Tgl Kembali: ");
        setTglKembali(input.nextInt());
        System.out.print("Masukkan Bulan Kembali: ");
        setBlnKembali(input.nextInt());
        System.out.print("Masukkan Tahun Kembali: ");
        setThnKembali(input.nextInt());
        System.out.println();
        this.calPinjam = getTglPinjam()+"-"+getBlnPinjam()+"-"+getThnPinjam();
        this.calKembali = getTglKembali()+"-"+getBlnKembali()+"-"+getThnKembali();
        
        LocalDate calePinjam = LocalDate.of(getThnPinjam(), getBlnPinjam(), getTglPinjam());
        LocalDate caleKembali = LocalDate.of(getThnKembali(), getBlnKembali(), getTglKembali() );
        long period = ChronoUnit.DAYS.between(calePinjam, caleKembali);
        if(period <0){
            System.out.println("Waktu peminjaman tidak valid");
            System.exit(1);
        }
        switch(this.dataMembers.memberJenis){
            case "Silver":
                Silver silver = new Silver();
                member.printMember();
                silver.printHasil(calPinjam, calKembali, (int)period);
                break;
            case "Gold":
                Gold gold = new Gold();
                member.printMember();
                gold.printHasil(calPinjam, calKembali, (int)period);
                break;
            case "Platinum":
                Platinum plat = new Platinum();
                member.printMember();
                plat.printHasil(calPinjam, calKembali, (int)period);
                break;
        }
    }


    public int getTglPinjam() {
        return tglPinjam;
    }

    public void setTglPinjam(int tglPinjam) {
        if(tglPinjam>31 || tglPinjam<1){
            System.out.println("Tanggal Pinjam harus antara 1 - 31");
            System.exit(1);
        }
        this.tglPinjam = tglPinjam;
    }

    public int getBlnPinjam() {
        return blnPinjam;
    }

    public void setBlnPinjam(int blnPinjam) {
        if(blnPinjam>12 || blnPinjam<1){
            System.out.println("Bulan Pinjam harus antara 1 - 12");
            System.exit(1);
        }
        this.blnPinjam = blnPinjam;
    }

    public int getThnPinjam() {
        
        return thnPinjam;
    }

    public void setThnPinjam(int thnPinjam) {
        if(thnPinjam>2038 || thnPinjam<1900){
            System.out.println("Tahun Pinjam harus antara 1900 - 2038");
            System.exit(1);
        }
        this.thnPinjam = thnPinjam;
    }

    public int getTglKembali() {
        return tglKembali;
    }

    public void setTglKembali(int tglKembali) {
        if(tglKembali>31 || tglKembali<1){
            System.out.println("Tanggal Kembali harus antara 1 - 31");
            System.exit(1);
        }
        this.tglKembali = tglKembali;
    }

    public int getBlnKembali() {
        return blnKembali;
    }

    public void setBlnKembali(int blnKembali) {
        if(blnKembali>12 || blnKembali<1){
            System.out.println("Bulan Kembali harus antara 1 - 12");
            System.exit(1);
        }
        this.blnKembali = blnKembali;
    }

    public int getThnKembali() {
        
        return thnKembali;
    }

    public void setThnKembali(int thnKembali) {
        if(thnKembali>2038 || thnKembali<1900){
            System.out.println("Tahun Kembali harus antara 1900 - 2038");
            System.exit(1);
        }
        this.thnKembali = thnKembali;
    }
}
