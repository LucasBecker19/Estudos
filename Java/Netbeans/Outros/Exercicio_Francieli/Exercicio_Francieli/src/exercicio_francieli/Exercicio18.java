/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package exercicio_francieli;

import javax.swing.JOptionPane;

/**
 *
 * @author francieli
 *
 * A partir do exerecício 18 até 21 serão aplicados arrays, também conhecidos
 * como vetores e matrizes.
 */
public class Exercicio18 {
    private static final int TAMANHO = 3;
    private static final int QTD_LINHAS = 3;
    private static final int QTD_COLUNAS = 3;
        
    /**
     *
     * 18. Criar um array unidimensional (vetor) de n posições do tipo inteiro.
     * Para este array permita as seguintes operações através de um menu
     * principal (cada operação deverá ser desenvolvida em um método):
     *
     * a) Ler o conteúdo do Array; b) Gerar valores aleatórios para o array; c)
     * Mostrar o maior elemento; d) Mostrar o menor elemento; e) Mostrar a soma
     * de todos os elementos do array; f) Mostrar a média.
     *
     * @param args
     *
     */
    public static void main(String[] args) {

        int[] num = new int[TAMANHO];
        int i, maiorValor = 0, menorValor = 0, soma = 0, media = 0, numAleatorio = 0;
        String menu;
        char opcao;
        do {
            menu = JOptionPane.showInputDialog("Escolha uma das Opções: "
                    + "a) Ler o conteúdo do Array;\n"
                    + "b) Gerar valores aleatórios para o array;\n"
                    + "c) Mostrar o maior elemento;\n"
                    + "d) Mostrar o menor elemento;\n"
                    + "e) Mostrar a soma de todos os elementos do array;\n"
                    + "f) Mostrar a média;\n"
                    + "g) Imprimiro vetor;\n"
                    + "h) Gerar uma matriz aleatoria\n"
                    + "s) Sair");
            opcao = menu.charAt(0);
            switch (opcao) {
                case 'a':
                    for (i = 0; i < num.length; i++) {
                        num[i] = Integer.parseInt(JOptionPane.showInputDialog("Digite um número inteiro: "));
                    }
                    imprimir(num);
                    break;
                case 'b':
                    num = aleatorio();
                    imprimir(num);
                    break;
                case 'c':
                    maiorValor = maior(num);
                    JOptionPane.showMessageDialog(null, "O maior valor é: " + maiorValor);
                    break;
                case 'd':
                    JOptionPane.showMessageDialog(null, "O menor valor é: " + menorValor);
                    break;
                case 'e':
                    JOptionPane.showMessageDialog(null, "A soma total dos valores é: " + soma);
                    break;
                case 'f':
                    JOptionPane.showMessageDialog(null, "A média dos valores é: " + media);
                    break;
                case 'g':
                    imprimir(num);
                    break;
                case 'h':
                    criarMatriz();
                    break;
                case 's':
                    JOptionPane.showMessageDialog(null, "O programa será finalizado.");
                    break;
                default:
                    JOptionPane.showMessageDialog(null, "Opção inválida");
            }
        } while (opcao != 's');
    }
    
    private static void imprimir(int[] v) {
        String str = "";
        for (int i = 0; i < v.length; i++) {
            str += "vetor[ " + i + " ] = " + v[i] + "\n"; 
        }
        JOptionPane.showMessageDialog(null, str);
    }

    private static int[] aleatorio() {
        int[] vetor = new int[TAMANHO];
        for (int i = 0; i < vetor.length; i++) {
            vetor[i] = (int) (Math.random() * 100) + 1;
        }
        return vetor;
    }

    private static int maior(int[] vetor) {
        int maiorValor = vetor[0];
        for (int i = 1; i < vetor.length; i++) {
            if (vetor[i] > maiorValor) {
                maiorValor = vetor[i];
            }
        }
        return maiorValor;
    }

    private static int menor(int i, int[] num, int menorValor) {

        for (i = 0; i < num.length; i++) {
            num[i] += i;
        }
        if (num[i] < menorValor) {
            menorValor = num[i];
        }
        return menorValor;
    }

    private static int somaTotal(int i, int[] num, int soma) {
        for (i = 0; i < num.length; i++) {
            num[i] += i;
            soma += num[i];
        }
        return soma;
    }

    private static float calcularMedia(int[] num) {
        int soma = 0;
        for (int i = 0; i < num.length; i++) {
            soma += num[i];
        }
        float media = soma / (float)TAMANHO;
        return media;
    }

    private static void criarMatriz() {
        int[][] matriz = new int[QTD_LINHAS][QTD_COLUNAS];
        for (int i = 0; i < QTD_LINHAS; i++) {
            for (int j = 0; j < QTD_COLUNAS; j++) {
                matriz[i][j] = (int) (Math.random() * 100) + 1;
            }
        }
        
        imprimir(matriz);
    }
    
    private static void imprimir(int[][] matriz) {
        String str = "";
        for (int i = 0; i < QTD_LINHAS; i++) {
            for (int j = 0; j < QTD_COLUNAS; j++) {
                str += matriz[i][j] + "   "; 
            }
            str += "\n";
        }
        JOptionPane.showMessageDialog(null, str);
    }

}
