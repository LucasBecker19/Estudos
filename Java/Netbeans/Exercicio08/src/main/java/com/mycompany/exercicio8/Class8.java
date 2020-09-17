/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.exercicio8;
import java.util.Scanner;

/**
 *
 * @author User
 */
public class Class8
{
    public static void main(String[] args)
    {
       
        Scanner entrada = new Scanner(System.in);
        int c1=0,c2=0,c3=0;
        boolean infoValida = false;
        float compra,venda,lucro=0,Plucro, tcompra=0, tvenda=0;
        char resp;
       
    do
    {
System.out.print("Nome do produto: ");
String nome = entrada.next();
System.out.print("Preço da compra: ");
compra = entrada.nextFloat();
        tcompra+=compra;
System.out.print("Preço da venda: ");
venda = entrada.nextFloat();
        tvenda+=venda;
Plucro = (venda*100/compra);
        lucro+=venda-compra;

if (Plucro<110)
{
c1++;
}

        else if (Plucro>=110 && Plucro<=120)
{
c2++;
}

        else if(Plucro>120)
{
c3++;
}
do
        {
            System.out.print("Deseja adicionar um novo produto? (s/n): ");
            resp = entrada.next().charAt(0);
            if (resp=='n' || resp=='N')
                        infoValida=true;
                    else if (resp=='s' || resp=='S')
                        infoValida=false;
                    else
                        System.out.println("Digite um carácter aceitável.");
        }while (resp!='n' && resp!='N' && resp!='s' && resp!='S');
    } while (!infoValida);


        System.out.println("Quantidade de produtos que renderam menos ou 10%: ......... " + c1);
        System.out.println("Quantidade de produtos que renderam entre 10 e 20%: ....... " + c2);
        System.out.println("Quantidade de produtos que renderam meais de 20%: ......... " + c3);
        System.out.println("Valor total de compra das mercadorias: .................... " + tcompra);
        System.out.println("Valor total de venda das mercadorias: ..................... " + tvenda);
        System.out.println("Valor total dos lucros: ................................... " + lucro);
    }
}