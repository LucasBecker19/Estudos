package exemplos;

public class TesteArray {

    public static void main(String[] args) {
        //inicializacao do array em um for
        int[] a = new int[5];
        for (int i = 0; i < a.length; i++) {
            a[i] = i;
        }

        //inicialização de um array com valores constantes
        int[] b = {10, 5, 20, 30, 16};
        for (int i = 0; i < b.length; i++) {
            System.out.println(b[i] + "\n");
        }
        System.exit(0);
    }
}
