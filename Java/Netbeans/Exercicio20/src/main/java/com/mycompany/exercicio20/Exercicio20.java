/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.exercicio20;
import javax.swing.JOptionPane;
/**
Uma pequena companhia aérea acabou de comprar um computador para seu novo sistema
automatizado de reservas. Foi solicitado que você programasse o novo sistema. Você
escreverá um programa para atribuir assentos em cada vôo do único avião da companhia
(capacidade: 10 assentos).
Seu programa deve exibir o seguinte menu de alternativas:
Pressione 1 para “fumante”
Pressione 2 para “não fumante”
Se a pessoa digitar 1, seu programa deve atribuir um assento na área de fumantes (assentos
1-5). Se a pessoa digitar 2, seu programa deve atribuir um assento na área de não-fumante
(assentos 6-10). Seu programa, então, deve imprimir um ticket de embarque indicando o
número de assento da pessoa e se ele está na área de fumantes ou de não fumantes do
avião.
Utilize um array unidimensional para representar o gráfico de assentos do avião. Inicialize
todos os elementos do array com 0 para indicar que
Naturalmente, seu programa nunca deve atribuir um assento que já foi atribuído. Quando a
área de fumantes estiver lotada, seu programa deve solicitar à pessoa se é aceitável ser
colocado na área de não-fumantes (e vice-versa). Se for, faça a atribuição apropriada de
assento. Se não for, imprima a mensagem “Aguarde o próximo vôo!!!”
 */
public class Exercicio20 {
    public static void main(String[] args){  
        int l,c,cont=1,categoria,fumante=0,naoFumante=5,assento=0,resp=0;
        String[] assentos = new String [10];
        assentos[0]="1";assentos[1]="2";assentos[2]="3";assentos[3]="4";assentos[4]="5";
        assentos[5]="6";assentos[6]="7";assentos[7]="8";assentos[8]="9";assentos[9]="10";
        
        for(int i=0;i<10;i++){
            
            do{
                categoria=Integer.parseInt(JOptionPane.showInputDialog("Categorias\n0 - Sair\n1 - Fumante\n2 - Não fumante"));
                if(categoria!=1 && categoria!=2 && categoria!=0)
                    JOptionPane.showMessageDialog(null,"Erro, esta categoria não existe");
            }while(categoria!=1 && categoria!=2 && categoria!=0);

            //assentos cheios da categoria fumante
            if (categoria==1 && fumante>4){
                do{
                    resp=Integer.parseInt(JOptionPane.showInputDialog("As vagas já estão lotadas!\nVocê deseja ocupar um assento da outra categoria?\n1 - Sim\n2 - Não"));
                    if(resp!=1 && resp!=2)
                        JOptionPane.showMessageDialog(null,"Opção incorreta, digite novamente");
                }while(resp!=1 && resp!=2);
                
                if(resp==1)
                    categoria=2; //inverter categoria
            }   
            
            //assentos cheios da categoria nao fumante
             if (categoria==2 && naoFumante>9){
                do{
                    resp=Integer.parseInt(JOptionPane.showInputDialog("As vagas já estão lotadas!\nVocê deseja ocupar um assento da outra categoria?\n1 - Sim\n2 - Não"));
                    if(resp!=1 && resp!=2)
                        JOptionPane.showMessageDialog(null,"Opção incorreta, digite novamente");
                }while(resp!=1 && resp!=2);

                if(resp==1)
                    categoria=1; //inverter categoria
            }
             
             if (resp==2){
                    JOptionPane.showMessageDialog(null,"Aguarde o próximo voo!");
                    categoria=0;
                }
             
            if (categoria==0)
                break;
            
            switch(categoria){
                case 1: //fumante
                    assentos[fumante]="x"; //ocupar assento
                    assento=fumante+1;
                    fumante++;
                    break;
                case 2: //nao fumante
                    assentos[naoFumante]="x"; //ocupar assento
                    assento=naoFumante+1; 
                    naoFumante++;
                    break;
            }
            //Saída
            imprimir(assentos,assento);
        } 
    } 

    private static void imprimir(String[] assentos, int assento) {
        JOptionPane.showMessageDialog(null,"Você foi atribuído ao assento nº "+assento+"\n\n"
                                              + "Fumante              Não Fumante\n     "
                                   +assentos[0]+"                                 "+ assentos[5]+"\n     "
                                   +assentos[1]+"                                 "+ assentos[6]+"\n     "
                                   +assentos[2]+"                                 "+ assentos[7]+"\n     "
                                   +assentos[3]+"                                 "+ assentos[8]+"\n     "
                                   +assentos[4]+"                                 "+ assentos[9]+"\n     ");
    }
}