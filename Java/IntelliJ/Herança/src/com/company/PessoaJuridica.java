package com.company;

public class PessoaJuridica extends Proprietario{

    private String cnpj;

    public String getCnpj() {
        return cnpj;
    }

    public void setCnpj(String cnpj) {
        this.cnpj = cnpj;
    }

    @Override
    public String getDados(){
        StringBuilder sb = new StringBuilder();
        sb.append(super.getDados());
        sb.append("CNPJ: "+this.getCnpj()+"\n");
        return sb.toString();
    }
}
