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
        tglPinjam = input.nextInt();
        System.out.print("Masukkan Bulan Pinjam: ");
        blnPinjam = input.nextInt();
        System.out.print("Masukkan Tahun Pinjam: ");
        thnPinjam = input.nextInt();
        System.out.print("Masukkan Tgl Kembali: ");
        tglKembali = input.nextInt();
        System.out.print("Masukkan Bulan Kembali: ");
        blnKembali = input.nextInt();
        System.out.print("Masukkan Tahun Kembali: ");
        thnKembali = input.nextInt();
        System.out.println();
        this.calPinjam = tglPinjam+"-"+blnPinjam+"-"+thnPinjam;
        this.calKembali = tglKembali+"-"+blnKembali+"-"+thnKembali;
        
        LocalDate calePinjam = LocalDate.of(thnPinjam, blnPinjam, tglPinjam);
        LocalDate caleKembali = LocalDate.of(thnKembali, blnKembali, tglKembali);
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
}
