package com.company;

public class Correr extends Porta{
    private String trilho;

    public String getTrilho() {
        return trilho;
    }

    public void setTrilho(String trilho) {
        this.trilho = trilho;
    }

    @Override
    public void abrir() {
        System.out.println("Abrindo porta de correr");
    }

    @Override
    public void fechar() {
        System.out.println("Fechando porta de correr");
    }
}
