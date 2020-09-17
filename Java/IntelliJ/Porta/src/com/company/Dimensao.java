package com.company;

public class Dimensao {
    private int largura;
    private int altura;
    private int profundidade;

    public int getLargura() {
        return largura;
    }

    public void setLargura(int largura) {
        this.largura = largura;
    }

    public int getAltura() {
        return altura;
    }

    public void setAltura(int altura) {
        this.altura = altura;
    }

    public int getProfundidade() {
        return profundidade;
    }

    public void setProfundidade(int profundidade) {
        this.profundidade = profundidade;
    }

    @Override
    public String toString() {
        return "Dimensao{" + "largura=" + largura + ", altura=" + altura + ", profundidade=" + profundidade + '}';
    }

}
