/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rentalconsole;

/**
 *
 * @author Palguno Wicaksono
 */
public class Silver extends Handler {
    int biayaSewa = 25000;
    int diskon = 1/100;
    int poin = 1;
    int cashback = 0;
    int bonusPulsa = 0;
    
    public int hitungTotalSewa(int banyakHari){
        int totalSewaMula = biayaSewa * banyakHari;
        int totalSewaDisc = totalSewaMula * diskon;
        return totalSewaMula - totalSewaDisc;
    }
    
    public int hitungPoint(int banyakHari){
        return poin * banyakHari;
    }
    
    
    public void printHasil(String calPinjam, String calKembali, int banyakHari){
        
        System.out.println("Tanggal Pinjam      : " + calPinjam);
        System.out.println("Tanggal Kembali     : " + calKembali);
        System.out.println("Lama Sewa           : " + banyakHari + " hari\n");
        
        System.out.println("Total Sewa          : Rp"+hitungTotalSewa(banyakHari));
        System.out.println("Jumlah Poin         : "+hitungPoint(banyakHari));
        System.out.println("Jumlah Cashback     : "+cashback);
        System.out.println("Jumlah Bonus Pulsa  : "+bonusPulsa);
    }
}
