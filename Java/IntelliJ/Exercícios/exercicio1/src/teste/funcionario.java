package teste;

public class funcionario {
    public int matricula;
    public String nome;
    public String cpf;
    public String fone;
    public double salarioBase;
    //associação
    public Cargo cargo;

    public void definirSalarioBase(double valor){
        this.salarioBase = valor;
    }
    public double calcularSalario(double descontos){
        return this.salarioBase-= descontos;
    }
    public void reajustarSalarioBase(double indice){
        //???
    }
    system.out.printl("heloo");

}
