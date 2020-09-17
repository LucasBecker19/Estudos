package com.company;

import javax.swing.*;

public class Main {
    public static void main(String[] args) {

        Porta porta1 = new Correr();
        porta1 = new Giratoria();

        if (porta1 instanceof Correr)
            System.out.println("A porta1 é de Correr");
        else
            System.out.println("A porta1 é Giratória");

        porta1.abrir();
        porta1.fechar();

        porta1.setMarca("marca");
        porta1.setModelo("modelo");
        ((Correr)porta1).setTrilho("metal");
        Dimensao dimensao = new Dimensao();
        dimensao.setAltura(200);
        dimensao.setLargura(90);
        dimensao.setProfundidade(20);
        porta1.setDimensao(dimensao);

        getDados(porta1);

        System.out.println("\n//////////////////////////////////////////////////////////////\n");

        Porta porta2 = new Giratoria();

        if (porta2 instanceof Correr)
            System.out.println("A porta2 é de Correr");
        else
            System.out.println("A porta2 é Giratória");

        porta2.abrir();
        porta2.fechar();

        porta2.setMarca("marca");
        porta2.setModelo("modelo");
        ((Giratoria)porta2).setEixo("ferro");
        Dimensao dimensao2 = new Dimensao();
        dimensao2.setAltura(220);
        dimensao2.setLargura(140);
        dimensao2.setProfundidade(100);
        porta2.setDimensao(dimensao2);

        getDados(porta2);
    }

    private static void getDados(Porta porta) {
        System.out.println("\nMarca: "+porta.getMarca()+
                "\nModelo: "+porta.getModelo()+
                "\nDimensões: "+porta.getDimensao()
                );
        if(porta instanceof Correr){
            System.out.println("Trilho: "+((Correr)porta).getTrilho());
        }
        else {
            System.out.println("Eixo: "+((Giratoria)porta).getEixo());
        }
    }
}
