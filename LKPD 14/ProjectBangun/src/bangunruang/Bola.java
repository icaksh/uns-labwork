/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package bangunruang;

/**
 *
 * @author Palguno Wicaksono
 */
public class Bola extends BangunRuang {
    private double diameter;
    
    public Bola(double diameter) {
        this.diameter = diameter;
    }

    public double hitungLuas(){
        return (4/3) * Math.PI * ((diameter * diameter * diameter)/8);
    }
    
    public double hitungVolume(){
        return 4 * Math.PI * ((diameter * diameter)/4);
    }
}
