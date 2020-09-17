package com.company;

public class Main {

    public static void main(String[] args) {
        Veiculo v1 = new Veiculo();

        v1.cor="preto";
        v1.marca="Ford";
        v1.modelo="Focus";
        v1.placa="abc1234";

        Proprietario lucas = new Proprietario();

        v1.proprietario=lucas;


        lucas.nome="Lucas";
        lucas.cpf=111;

        System.out.println("Veículo 1, informações: ");
        System.out.println("Cor: "+ v1.cor);
        System.out.println("Marca: "+v1.marca);
        System.out.println("Proprietario: "+v1.proprietario.nome);
        System.out.println("CPF: "+v1.proprietario.cpf);
    }
}
