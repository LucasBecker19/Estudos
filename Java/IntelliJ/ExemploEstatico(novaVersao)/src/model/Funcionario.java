package model;

public class Funcionario {

    private int matricula;
    private String nome;
    private float salario;
    static private float auxilioAlimentacao = 15;
    private boolean ativo;
    public Cargo cargo;

    public int getMatricula() {
        return matricula;
    }

    public void setMatricula(int matricula) {
        this.matricula = matricula;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public float getSalario() {
        return salario;
    }

    public void setSalario(float salario) {
        if(salario>=this.getCargo().getPisoSalarial())
        {
            this.salario = salario;
        }
    }

    public static float getAuxilioAlimentacao() {
        return auxilioAlimentacao;
    }

    public static void setAuxilioAlimentacao(float auxilioAlimentacao) {
        Funcionario.auxilioAlimentacao = auxilioAlimentacao;
    }

    public boolean isAtivo() {
        return ativo;
    }

    public void setAtivo(boolean ativo) {
        this.ativo = ativo;
    }

    public Cargo getCargo() {
        return cargo;
    }

    public void setCargo(Cargo cargo) {
        this.cargo = cargo;
    }

    public Funcionario()
    {
        this.salario = 0;
        this.ativo = true;
        this.matricula = 0;
    }

    public Funcionario(int matricula, String nome)
    {
        this.matricula = matricula;
        this.nome = nome;

    }

    public Funcionario(int matricula, String nome, float salario, Cargo cargo)
    {
        this.matricula = matricula;
        this.nome = nome;
        this.salario = salario;
        this.cargo = cargo;

    }

    public float reajustarSalario (int taxa)
    {
        this.salario += (this.salario*taxa);
        return salario;
    }

    public float reajustarSalario ()
    {
        this.salario += (this.salario*0.1);
        return salario;
    }

    public String getDados()
    {
        StringBuilder sb = new StringBuilder();
        sb.append("Nome: "+this.getNome()+"\n"+
                "Matricula: "+this.getMatricula()+"\n"+
                "Salario: "+this.getSalario()+"\n"+
                "Auxilio Alimentação: "+this.getAuxilioAlimentacao()+"\n"+
                "Ativo: "+this.isAtivo()+"\n"+
                "Cargo: "+this.getCargo()+"\n");
        return sb.toString();
    }

    public float calcularSalarioLiquido(float adicional, float descontos)
    {
        return this.salario+adicional-descontos;
    }

}
