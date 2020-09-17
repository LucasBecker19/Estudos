package com.company;

public class Cartao {
    public int numero;
    public String dataValidade;
    public Cliente cliente;

    //Getters e Setters
    public int getNumero() {
        return numero;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }

    public String getDataValidade() {
        return dataValidade;
    }

    public void setDataValidade(String dataValidade) {
        this.dataValidade = dataValidade;
    }

    //Construct
    public Cartao(){

    }
}