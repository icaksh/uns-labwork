/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projectrerate;

import java.util.Arrays;
import java.util.Scanner;

/**
 *
 * @author Palguno Wicaksono
 */
public class ArrayProcessing {
    int n;
    int[] dataBil = new int[100];
    
    void input(){
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan banyaknya data (n): ");
        this.n = input.nextInt();
        for(int i =0; i<n;i++){
            System.out.print("Masukkan bil ke-"+(i+1)+": ");
            this.dataBil[i] = input.nextInt();
        }
    }
    
    double hitungRerata(int[] data){
        double sum = 0;
        for(int i=0; i<this.n; i++){
            sum += data[i];
        }
        double rerata = sum/this.n;
        return rerata;
    }
    
    double cariMax(int[] data){
        double max = data[0];
        for(int i=0; i<this.n; i++){
            if(data[i]>max){
                max = data[i];
            }
        }
        return max;
    }
    
    double cariMin(int[] data){
        double min = data[0];
        for(int i=0; i<this.n; i++){
            if(data[i]<min){
                min = data[i];
            }
        }
        return min;
    }
    
    int[] urutkan(int[] arr){
        for (int i = 0; i < n-1; i++){
            for (int j = 0; j < n-i-1; j++)
                if (arr[j] > arr[j+1])
                {
                    int temp = arr[j];
                    arr[j] = arr[j+1];
                    arr[j+1] = temp;
                }
        }
        return arr;
    }
    
    void output(){
        System.out.println("Rerata: " + this.hitungRerata(dataBil));
        System.out.println("Nilai Max: " + this.cariMax(dataBil));
        System.out.println("Nilai Min: " + this.cariMin(dataBil));
        System.out.println("Urutan: ");
        int[] data = this.urutkan(dataBil);
        for (int i=0; i<this.n; i++){
            System.out.print(data[i] +" ");
        }
    }
}
