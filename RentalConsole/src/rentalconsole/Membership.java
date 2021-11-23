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
public class Membership extends Handler{
    
    public void tambahMember(DataMember data) {
        this.dataMember.add(data);
    }
    
    public DataMember cariMember(String memberId){
        boolean found = false;
        int j = -1;
        for(int i=0; i<this.dataMember.size(); i++){
            if (this.dataMember.get(i).memberId.equals(memberId)){
                j = i;
                found = true;
                break;
            }
        }

        if(j>-1){
            this.dataMembers = this.dataMember.get(j);
        }else{
            System.out.println("ID Member tidak valid/ditemukan");
            System.exit(1);
        }
        return this.dataMembers;
    }
    
    public void printMember(){
        System.out.println("ID Member           : "+this.dataMembers.memberId);
        System.out.println("Nama Member         : "+this.dataMembers.memberNama);
        System.out.println("Jenis Member        : "+this.dataMembers.memberJenis+"\n");
    }
}
