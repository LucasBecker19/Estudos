package com.mycompany.exercicio21;
import javax.swing.JOptionPane;
/**
Utilize um array bidimensional para resolver o seguinte problema. Uma empresa tem quatro
equipes de vendas (1 a 4) que vendem cinco produtos diferentes (1 a 5). Uma vez por dia,
cada vendedor passa uma nota de cada tipo de produto diferente vendido. Cada nota
contém:
g) O número da equipe do vendedor.
h) O número do produto.
i) O valor total em reais desse produto vendido nesse dia.
Portanto, cada vendedor passa entre 0 e 5 notas de vendas por dia. Pressuponha que as
informações a partir de todas as notas durante o mês estão disponíveis. Escreva um
programa para ler todas as informações das vendas do mês e que resumirá as vendas totais
por equipe de vendas e produto. Todos os totais devem ser armazenados no array
bidimensional. Depois de processar todas as informações durante o mês, exiba os
resultados em formato tabular com cada uma das colunas representando um vendedor
específico e cada uma das linhas representando um produto específico. Cruze cada linha
de total para obter as vendas
 */
public class Exercicio21 {
    public static void main(String[]args){
        int l,c,resp;
        float[][] vendas = new float [4][5];
        float[] somatorio = new float [4];
        float[] somatorioProdutos = new float [5];
        
        do{
            
            for(l=0;l<4;l++){
                for(c=0;c<5;c++){
                    vendas[l][c]=Float.parseFloat(JOptionPane.showInputDialog("Equipe "+(l+1)+"\nDigite o valor de vendas do produto "+(c+1)+": "));
                    somatorio[l]+=vendas[l][c];
                    somatorioProdutos[c]+=vendas[l][c];
                }
            }
            
            imprimir(vendas);
            
            do{
                resp = Integer.parseInt(JOptionPane.showInputDialog("Deseja continuar?\n1 - Continuar\n2 - Sair"));
                if(resp!=1 && resp!=2)
                    JOptionPane.showMessageDialog(null,"Opção incorreta, digite novamente");
            }while(resp!=1 && resp!=2);
        }while(resp!=2);
        
        imprimirTotais(somatorio,somatorioProdutos);
    }
    
    private static void imprimir(float[][] vendas) {
        JOptionPane.showMessageDialog(null,"                    |  Equipe 1   |   Equipe 2   |   Equipe 3   |   Equipe 4   |\n"
                                                  + "Produto 1  |       "+vendas[0][0]+"               "+vendas[1][0]+"                 "+vendas[2][0]+"                 "+vendas[3][0]+"\n"
                                                  + "Produto 2  |       "+vendas[0][1]+"               "+vendas[1][1]+"                 "+vendas[2][1]+"                 "+vendas[3][1]+"\n"
                                                  + "Produto 3  |       "+vendas[0][2]+"               "+vendas[1][2]+"                 "+vendas[2][2]+"                 "+vendas[3][2]+"\n"
                                                  + "Produto 4  |       "+vendas[0][3]+"               "+vendas[1][3]+"                 "+vendas[2][3]+"                 "+vendas[3][3]+"\n"
                                                  + "Produto 5  |       "+vendas[0][4]+"               "+vendas[1][4]+"                 "+vendas[2][4]+"                 "+vendas[3][4]+"\n"
                                                  
        );    
    } 

    private static void imprimirTotais(float[] somatorio, float[] somatorioProdutos) {
        JOptionPane.showMessageDialog(null,"Total de vendas de cada equipe\n"
                + "\nEquipe 1: " + somatorio[0]
                + "\nEquipe 2: " + somatorio[1]
                + "\nEquipe 3: " + somatorio[2]
                + "\nEquipe 4: " + somatorio[3]);

        JOptionPane.showMessageDialog(null,"Total de vendas de cada produto\n"
                + "\nProduto 1: " + somatorioProdutos[0]
                + "\nProduto 2: " + somatorioProdutos[1]
                + "\nProduto 3: " + somatorioProdutos[2]
                + "\nProduto 4: " + somatorioProdutos[3]
                + "\nProduto 5: " + somatorioProdutos[4]);
    }
}
