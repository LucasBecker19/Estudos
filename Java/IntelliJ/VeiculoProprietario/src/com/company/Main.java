package com.company;

import javax.swing.*;

public class Main {

    public static void main(String[] args) {

        //Criando Veículo 1 e Pessoa 1
        Veiculo v1 = new Veiculo("abc1234");
        Proprietario p1 = new Proprietario();
        v1.proprietario = p1;

        //Coletando Informações Carro 1
        JOptionPane.showMessageDialog(null,"Veículo 1");
        infoCarro(v1);

        //Coletando Informações Pessoa 1
        JOptionPane.showMessageDialog(null,"Pessoa 1");
        infoPessoa(p1,v1);


        //Criando Veículo 2 com o mesmo dono do Veículo 1
        Veiculo v2 = new Veiculo("def5678");
        v2.proprietario = p1;

        //Coletando Informações Carro 2
        JOptionPane.showMessageDialog(null,"Veículo 2");
        infoCarro(v2);

        //RELATÓRIO Veículo 1
        JOptionPane.showMessageDialog(null, "Veículo 1\n"+
                "Dono: "+v1.proprietario.getNome()+
                "\n-----------------------\nInformações do Veículo\n-----------------------"+
                "\nPlaca: "+v1.getPlaca()+
                "\nModelo: "+v1.getModelo()+
                "\nMarca: "+v1.getMarca()+
                "\n-----------------------\nInformações Pessoais\n-----------------------"+
                "\nCPF: "+v1.proprietario.getCpf()+
                "\nTelefone: "+v1.proprietario.getTelefone()
        );

        //RELATÓRIO Veículo 2
        JOptionPane.showMessageDialog(null,"Veículo 2\n"+
                "Dono: "+v1.proprietario.getNome()+
                "\n-----------------------\nInformações do Veículo\n-----------------------"+
                "\nPlaca: "+v2.getPlaca()+
                "\nModelo: "+v2.getModelo()+
                "\nMarca: "+v2.getMarca()+
                "\n-----------------------\nInformações Pessoais\n-----------------------"+
                "\nCPF: "+v1.proprietario.getCpf()+
                "\nTelefone: "+v1.proprietario.getTelefone()
        );
    }

    private static void infoPessoa(Proprietario p1, Veiculo v1) {
        String nome, cpf, telefone;
        nome = JOptionPane.showInputDialog("Digite seu nome: ");
        v1.proprietario.setNome(nome);
        cpf = JOptionPane.showInputDialog("Digite seu cpf: ");
        v1.proprietario.setCpf(cpf);
        telefone = JOptionPane.showInputDialog("Digite seu telefone: ");
        v1.proprietario.setTelefone(telefone);
    }

    static void infoCarro(Veiculo v1){
        String modelo, marca, cor;
        modelo = JOptionPane.showInputDialog("Digite o modelo de seu carro: ");
        v1.setModelo(modelo);
        marca = JOptionPane.showInputDialog("Digite a marca de seu carro: ");
        v1.setMarca(marca);
        cor = JOptionPane.showInputDialog("Digite a cor do seu carro: ");
        v1.setCor(cor);
    }

}

