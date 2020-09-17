/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.exercicio11;
import java.util.Scanner;

/**
 *
 * @author User
 */
public class Class {
   
    public static void main(String[] args)
   {
        boolean infoValida=false, infoValida2=false;
        Scanner entrada = new Scanner(System.in);
        float kw,Pkw,maiorConsumo=0,menorConsumo=0,residencial=0,comercial=0,industrial=0;
        float [] TP = new float [999];
        int consumidores=0,TCon;
        int[] NCon = new int [999];
        char resp;
        do
        {
            for (int i=0;!infoValida2;i++)
            {
                infoValida=false;
                infoValida2=false;
                consumidores++;
                System.out.print("\nNúmero do consumidor: ");
                NCon[i] =entrada.nextInt();
                System.out.print("Preço do KWh consumido: R$");
                Pkw = entrada.nextFloat();
                System.out.print("Quantidade de KWh consumidos durante o mês: ");
                kw = entrada.nextFloat(); 
                TP[i] = Pkw*kw;
                if (i==0){
                    maiorConsumo=kw;
                    menorConsumo=kw;
                }
                else{
                    if(kw>maiorConsumo)
                        maiorConsumo=kw;
                    if(kw<menorConsumo)
                        menorConsumo=kw;
                }
                System.out.print("\n\nTipo de consumidor:\n1 - Residencial\n2 - Comercial\n3 - Industrial");
                do
                {
                    System.out.print("\nCódigo do tipo de consumidor: ");
                    TCon = entrada.nextInt();
                    switch(TCon){
                        case 1:
                            infoValida=true;
                            residencial+=TP[i];
                            break;
                        case 2:
                            infoValida=true;
                            comercial+=TP[i];
                            break;
                        case 3:
                            infoValida=true;
                            industrial+=TP[i];
                            break;
                        default:
                            System.out.println("Digite uma opção correta");

                    }
                }while (!infoValida);
                
                do
                {
                    System.out.print("Deseja adicionar um novo cliente?(s/n): ");
                    resp = entrada.next().charAt(0);
                    if (resp=='n' || resp=='N')
                        infoValida2=true;
                    else if (resp=='s' || resp=='S')
                        infoValida2=false;
                    else
                        System.out.println("Digite um carácter aceitável.");
                }while (resp!='n' && resp!='N' && resp!='s' && resp!='S');
            }
        }while (!infoValida2);
        System.out.println("\nRELATÓRIO");
        for (int i=0;i<consumidores;i++)
        {
            System.out.println("----------------------------------------");
            System.out.println("Número do consumidor: " + NCon[i]);
            System.out.println("Total a pagar: R$" + TP[i]);
        }
        System.out.println("----------------------------------------");
        System.out.println("Maior consumo: " + maiorConsumo + " Kw");
        System.out.println("Menor consumo: " + menorConsumo + " Kw");
        System.out.println("Total de consumo residencial: " + residencial + " Kw");
        System.out.println("Total de consumo comercial: " + comercial + " Kw");
        System.out.println("Total de consumo industrial: " + industrial + " Kw");
        System.out.println("Média geral de consumo: " + ((residencial+comercial+industrial)/3) + " Kw");
       
   }
}