/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.exercicio17;
import java.text.DecimalFormat;
import javax.swing.JOptionPane;
/**
 *
 * @author becke
 */
public class Exercicio17 {
    public static void main(String[]args){

    float gastos,total,juros;
    int opcoes,parcelas;
        
        do{
            do{
                gastos = Float.parseFloat(JOptionPane.showInputDialog("Digite o total gasto em Reais, ou digite 0 para sair"));
                if(gastos<0)
                    JOptionPane.showMessageDialog(null,"É impossível comprar algo com este valor");
            }while(gastos<0);
            
            if (gastos == 0) break;
            opcoes = opcoesPagamento(gastos);
            switch(opcoes){
                case 1:
                    total = calcularOpcao1(gastos);
                    parcelas=1;
                   imprimir(total,parcelas,"0% de desconto(À vista): R$");
                    break;
                case 2:
                    total=calcularOpcao2(gastos);
                    parcelas=2;
                    imprimir(total,parcelas," parcelas de: R$");
                    break;
                case 3:
                    do{
                         parcelas =  Integer.parseInt(JOptionPane.showInputDialog("Quantidade de parcelas (permitido entre 3 e 10)"));
                         if(parcelas<3 || parcelas>10)
                              JOptionPane.showMessageDialog(null,"É permitido apenas entre 3 e 10 parcelas");
                    }while(parcelas<3 || parcelas>10);
                    total=calcularOpcao3(gastos,parcelas);
                    imprimir(total,parcelas," parcelas de: R$");
                    break;
            }

        }while(true);
    
    }

    private static int opcoesPagamento(float gastos) {
        int opcao;
        do{
            do{ 
                opcao = Integer.parseInt(JOptionPane.showInputDialog(null, "MENU\n1 - À vista\n2 - 2 Vezes\n3 - 3 até 10 Vezes"));
                 if(opcao==3 && gastos<100)
                     JOptionPane.showMessageDialog(null, "Opção não permitida para compras menores de R$100");
            }while(opcao==3 && gastos<100);
             
            if(opcao!=3 && opcao!=2 && opcao!=1)
                 JOptionPane.showMessageDialog(null, "Digite uma opção correta");
             
        }while(opcao!=3 && opcao!=2 && opcao!=1);
        
        return opcao;
    }

    private static float calcularOpcao1(float gastos) {
       float total=(float) (gastos -(gastos*0.1));
       return total;
    }

    private static void imprimir(float total,int parcelas,String texto) {
        DecimalFormat df = new DecimalFormat ("##.##");
        JOptionPane.showMessageDialog(null, parcelas + texto + df.format(total));
    }

    private static float calcularOpcao2(float gastos) {
      float total=gastos/2;
      return total;
    }

    private static float calcularOpcao3(float gastos, int parcelas) {
        //float total=(float)(((gastos*0.03)*parcelas+gastos)/parcelas);
        float juros=0;
        for(int i=0;i<parcelas;i++){
          juros=(float)(gastos*0.03);
           gastos+=juros;
        } 
        float total=gastos/parcelas;
        return total;
    }
}
