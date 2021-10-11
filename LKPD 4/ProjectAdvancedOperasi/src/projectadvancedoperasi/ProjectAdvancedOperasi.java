/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projectadvancedoperasi;

/**
 *
 * @author Palguno Wicaksono
 */
public class ProjectAdvancedOperasi {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Operasi o = new Operasi();
        
        System.out.println(o.jumlahkan(3,4));
        System.out.println(o.jumlahkan(4,7,-9));
        System.out.println(o.jumlahkan(3.14, -0.002, 0.12313));
        
        Operasi o2 = new Operasi();
        
        System.out.println(o2.kali(3,4));
        System.out.println(o2.kali(4,7,-9));
        System.out.println(o2.kali(3.14, -0.002, 0.12313));
    }
    
}
