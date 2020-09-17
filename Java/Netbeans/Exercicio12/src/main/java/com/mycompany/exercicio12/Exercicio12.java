/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.exercicio12;
import javax.swing.JOptionPane;

/**
 *
 * @author User
 */
public class Exercicio12
{
    public static void main(String[] args)
       {
           int op,resp;
           float a, b, c, at;
          
            do
            {
                a = Float.parseFloat(JOptionPane.showInputDialog("Digite o valor de A: "));
                b = Float.parseFloat(JOptionPane.showInputDialog("Digite o valor de B: "));
                c = Float.parseFloat(JOptionPane.showInputDialog("Digite o valor de C: "));
                do{
                    do{
                        op = Integer.parseInt(JOptionPane.showInputDialog("Deseja calcular a área do trapézio, quadrado ou superfície de um cubo?\nDigite 1 para trapézio\nDigite 2 para quadradado \nDigite 3 para superfície cubo\nDigite 0 para sair"));
                        if(op!=0 && op!=1 && op!=2 && op!=3)
                            JOptionPane.showMessageDialog(null,"Essa opção não existe");
                    }while(op!=0 && op!=1 && op!=2 && op!=3);
                          switch (op) {
                              case 0:
                                  break;
                              case 1:
                                  at=calcularTrapezio(a,b,c);
                                 imprimir(at,"do trapézio");
                                  break;
                              case 2:
                                  at=calcularQuadrado(b);
                                  imprimir(at,"do quadrado");
                                  break;
                              case 3:
                                  at=calcularCubo(c);
                                  imprimir(at,"do cubo");
                                  break;
                              default:
                                  JOptionPane.showMessageDialog(null,"Essa opção não existe");
                          }
                }while(op!=0);
                resp=Integer.parseInt(JOptionPane.showInputDialog("Deseja continuar?\nDigite 1 para continuar\nDigite 0 para sair"));
                if(resp==0)
                    break;
           }while (true);      
       }
    private static void imprimir(float at, String tipo) {
        JOptionPane.showMessageDialog(null,"A área " + tipo + " é: " + at);
    }
    
    private static float calcularTrapezio(float a, float b, float c) {
        
       float at=(a+b)/2*c;
       return at;
    }

    private static float calcularQuadrado(float b) {
        float at=b*b;
        return at;
    }

    private static float calcularCubo(float c) {
        float at=(c*c)*6;
        return at;
    } 
}