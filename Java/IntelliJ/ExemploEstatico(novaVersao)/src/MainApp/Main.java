package MainApp;

import model.Cargo;
import model.Funcionario;

public class Main {

    public static void main(String[] args) {
        Funcionario func1 = new Funcionario();
        func1.setNome("Lucas");
        Cargo devSenior = new Cargo("devSenior",6800);
        func1.setCargo(devSenior);
        func1.setSalario(10000);

        System.out.println("Nome: "+func1.getNome());
        System.out.println("Cargo: "+func1.getCargo().getDescricao());
        System.out.println("Piso salarial Dev Sênior: R$"+func1.getCargo().getPisoSalarial());
        System.out.println("Salário de "+func1.getNome()+": R$"+func1.getSalario());
    }
}
