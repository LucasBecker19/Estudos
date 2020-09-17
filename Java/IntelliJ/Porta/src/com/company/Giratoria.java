package com.company;

public class Giratoria extends Porta{
    private String eixo;

    public String getEixo() {
        return eixo;
    }

    public void setEixo(String eixo) {
        this.eixo = eixo;
    }

    @Override
    public void abrir() {
        System.out.println("Abrindo porta giratória");
    }

    @Override
    public void fechar() {
        System.out.println("Fechando porta giratória");
    }
}
