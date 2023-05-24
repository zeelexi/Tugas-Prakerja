package com.kruwell.program;

import java.util.*;

public class Lingkaran {

    public static void main(String[] args) {
        int r;
        double L, K;

        Scanner input = new Scanner (System.in) ;
        System.out.print ("Masukkan Jari-Jari (r) : ") ;
        r = input.nextInt () ;

        L = (double) 22 / 7 * r * r;
        K = 2 * ((double) 22 / 7) * r;

        System.out.printIn ("Luas (L) Lingkaran : " + L) ;
        System.out.printIn ("Keliling (K) Lingkaran : " + K) ;
    }
}