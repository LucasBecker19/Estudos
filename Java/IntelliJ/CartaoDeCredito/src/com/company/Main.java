package com.company;
import javax.swing.*;

public class Main {
    public static void main(String[] args) {
        String nome,data;
        int numero,codigo=0;

        Cartao c1 = new Cartao();

        //Nome
        nome= JOptionPane.showInputDialog("Digite o nome do cliente: ");
        c1.cliente.setNome(nome);

        //Número
        numero=Integer.parseInt(JOptionPane.showInputDialog("Digite o número do cartão: "));
        c1.setNumero(numero);

        //Data de Validade
        data=JOptionPane.showInputDialog("Digite a data de validade: ");
        c1.setDataValidade(data);

        //Código
        c1.cliente.setCodigo(codigo);
        codigo++;

        //Relatório
        JOptionPane.showMessageDialog(null,"-----------RELATÓRIO-----------\n" +
                "\nNome: "+ c1.cliente.getNome()+
                "\nNúmero do Cartão: "+ c1.getNumero()+
                "\nData de Validade: "+ c1.getDataValidade()+
                "\nCódigo do Cliente: "+ c1.cliente.getCodigo());
    }
}
