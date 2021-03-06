package exemplos;

// TesteArrayArgumento.java
// este programa ordena um array por meio do método Shell Sort
public class TesteArrayArgumento {

    public static void sort(int[] vetor) {
        int n = vetor.length;
        int incr = n / 2;
        while (incr >= 1) {
            for (int i = incr; i < n; i++) {
                int temp = vetor[i];
                int j = i;
                while (j >= incr && temp < vetor[j - incr]) {
                    vetor[j] = vetor[j - incr];
                    j -= incr;
                }
                vetor[j] = temp;
            }
            incr /= 2;
        }
    }

    public static void print(int[] a) {
        for (int i = 0; i < a.length; i++) {
            System.out.print(a[i] + " ");
        }
        System.out.println();
    }

    public static void main(String[] args) {
        // criar um array de 10 inteiros
        int[] a = new int[5];
        int i;
        // preenche o array com valores aleatórios
        for (i = 0; i < a.length; i++) {
            a[i] = (int) (Math.random() * 100) + 1;
        }
        print(a);
        sort(a);
        print(a);
        System.exit(0);
    }
}
