/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.exercicio14;
import javax.swing.JOptionPane;

/**
 *
 * @author becke
 */
public class Exercicio14 {
    public static void main(String[] args)
   {  
        int horas,clientes=0;
        String nome; 
        float taxa,total=0;
        
        do{
            nome = JOptionPane.showInputDialog("Digite a placa: \nDigite 0 para sair");
            if(nome.equals("0")){
                JOptionPane.showMessageDialog(null,"Você atendeu "+clientes+"clientes hoje\n"+"O total dos recibos é de: R$" + total);
                break;
            }
            clientes++;
            horas = Integer.parseInt(JOptionPane.showInputDialog("Horas estacionadas: "));
            taxa = calcularTaxa(horas);
            total+=taxa;

           JOptionPane.showMessageDialog(null,"Placa: " + nome + "\nTotal: R$" + taxa);
        
        }while(true);
   }

    private static float calcularTaxa(int horas) {
        float taxa=0;
        if(horas<=0)
            taxa=0;
        if(horas>0 && horas<=3)
            taxa=2;
        
        else if(horas>3 && horas<24){
            horas=horas-3;
            taxa=(float) (2+(horas*0.5));
        }
        else if (horas>=24)
            taxa=(float)(10+(0.5*(horas-24)));

        return taxa;
    }
    
}
