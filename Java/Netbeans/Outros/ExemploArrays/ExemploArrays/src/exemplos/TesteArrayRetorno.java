package exemplos;

/** TesteArrayRetorno.java
  Este programa retorna gera aleatoriamente os 
	números a serem apostados em uma loteria
 */
import javax.swing.*;
import java.util.*;

public class TesteArrayRetorno {

    public static int[] escolheNumeros(int maior, int qtdNum) {
        int i;
        int numeros[] = new int[maior];
        int resultado[] = new int[qtdNum];
        //preenche um array com os números 1 2 3 ... maior
        for (i = 0; i < maior; i++) {
            numeros[i] = i + 1;
        }
        for (i = 0; i < qtdNum; i++) {
            int j = (int) (Math.random() * (maior - 1));
            resultado[i] = numeros[j];
            numeros[j] = numeros[maior - 1 - i];
        }
        return resultado;
    }

    public static void main(String[] args) {
        int numeros;
        int maiorNum;
        String numStr;
        numStr = JOptionPane.showInputDialog(
                "Quantidade de números para apostar");
        numeros = Integer.parseInt(numStr);
        numStr = JOptionPane.showInputDialog(
                "Qual é maior número do jogo?");
        maiorNum = Integer.parseInt(numStr);
        int[] a = escolheNumeros(maiorNum, numeros);
        Arrays.sort(a);
        System.out.println(
                "Jogue a seguinte combinacao e tenha uma boa sorte");
        int i;
        for (i = 0; i < a.length; i++) {
            System.out.println(a[i]);
        }
        System.exit(0);
    }
}
