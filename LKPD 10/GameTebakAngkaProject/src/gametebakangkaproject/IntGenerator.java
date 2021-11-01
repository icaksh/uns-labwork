/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gametebakangkaproject;

import java.util.concurrent.ThreadLocalRandom;
/**
 *
 * @author Palguno Wicaksono
 */
public class IntGenerator {
    public int IntGenerator(){
        int randomNum = ThreadLocalRandom.current().nextInt(0, 100 + 1);
        return randomNum;
    }
}
