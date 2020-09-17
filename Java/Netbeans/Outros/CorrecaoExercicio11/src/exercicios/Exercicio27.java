/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package exercicios;

import javax.swing.JOptionPane;

/**
 *
 * @author mpisching
 */
public class Exercicio27 {

    /**
     * @param args the command line arguments
     * 27.Deseja-se fazer uma pesquisa a respeito do consumo mensal de energia 
     * elétrica em uma determinada cidade. Para isso, são fornecidos os 
     * seguintes dados: 
     * • Preço do KWh consumido;
     * • Número do consumidor; 
     * • Quantidade de KWh consumidos durante o mês; 
     * • Código do tipo de consumidor (residencial, comercial, industrial). 
     * Fazer um programa que:
     * • Leia os dados descritos acima; 
     * • Calcule: 
     *       Para cada consumidor, o total a pagar; 
     *       O maior consumo verificado; 
     *       O menor consumo verificado; 
     *       O total de consumo para cada um dos três tipos de consumidores; 
     *       A média geral de consumo 
     * • Escreva: 
     *       Para cada consumidor, o seu número e o total a pagar 
     *       O que foi calculado nos itens anteriores.
     * 
     */
    public static void main(String[] args) {
        
        Object[] opcoes = {"001-Residencial", "002-Comercial", "003-Industrial"};
        float precoKWh = Float.parseFloat(JOptionPane.showInputDialog(""
                + "Valor do KWh"));
        int numero = 0, qtdConsumidores = 0, consumoResidencial = 0, consumoComercial = 0, consumoIndustrial = 0;
        int maiorConsumo = 0, menorConsumo = 0;
        do {
            numero = Integer.parseInt(JOptionPane.showInputDialog(""
                + "Número do consumidor: (Digite 0 para sair) "));
            if (numero == 0) break;
            int consumoKWh = Integer.parseInt(JOptionPane.showInputDialog(""
                + "Consumo mensal de energia em KWh"));
            Object tipoConsumidor = JOptionPane.showInputDialog(null, "Escolha o tipo de consumidor" , "Selecao de itens" ,
				JOptionPane.PLAIN_MESSAGE , null ,opcoes,"");
            float totalAPagar = consumoKWh * precoKWh;
            
            //primeira ocorrência para definir o menorConsumo
            if (qtdConsumidores++ == 0) menorConsumo = consumoKWh;
            
            if (consumoKWh > maiorConsumo) maiorConsumo = consumoKWh;
            
            if (consumoKWh < menorConsumo) menorConsumo = consumoKWh;           
            
            switch ((String)tipoConsumidor) {
                case "001-Residencial": consumoResidencial+=consumoKWh; break;
                case "002-Comercial": consumoComercial+=consumoKWh; break;
                case "003-Industrial": consumoIndustrial+=consumoKWh; break;
            }
            
/** 
 * Alternativamente, o switch acima pode ser resolvido com uma instrução if..else..if.. 
 * como mostra o trecho de código abaixo:
 *          if (((String)tipoConsumidor).equalsIgnoreCase("001-Residencial")) {
                consumoResidencial+=consumoKWh;
            } else if (((String)tipoConsumidor).equalsIgnoreCase("002-Comercial")) {
                consumoComercial+=consumoKWh;
            } else {
                consumoIndustrial+=consumoKWh;
            }
*/            
            
            JOptionPane.showMessageDialog(null, "Consumidor número: " + numero +
                    "\nTotal a pagar: " + totalAPagar);
            
        } while (true);
        
        JOptionPane.showMessageDialog(null,
                "Maior consumo: " + maiorConsumo + " KWh\n" +
                "Menor consumo: " + menorConsumo + " KWh\n" +
                "Consumo Residencial: " + consumoResidencial + " KWh\n" +
                "Consumo Comercial: " + consumoComercial + " KWh\n" +
                "Consumo Industrial: " + consumoIndustrial + " KWh\n" +
                "Média geral de consumo: " + ((consumoResidencial + consumoComercial + consumoIndustrial) / 3) + " KWh");
    }
    
}
