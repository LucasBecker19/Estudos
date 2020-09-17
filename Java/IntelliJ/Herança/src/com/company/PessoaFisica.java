package com.company;

public class PessoaFisica extends Proprietario{

    private String cpf;

    public String getCpf() {
        return cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    @Override
    public String getDados(){
        StringBuilder sb = new StringBuilder();
        sb.append(super.getDados());
        sb.append("CPF: "+this.getCpf()+"\n");
        return sb.toString();
    }
}
