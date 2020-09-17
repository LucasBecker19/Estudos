package MainApp;

import Entity.Cliente;
import DataSource.ClienteDS;

import javax.swing.*;

public class Main {

    public static void main(String[] args) {
        String menu;


        ClienteDS.criarLista();

        do {

            menu = menu();
            switch (menu) {
                case "Incluir":
                    try{
                        novo();
                    } catch (Exception exc){
                        JOptionPane.showMessageDialog(null,"Não foi possível criar um usuário. Tente novamente");
                    }

                    break;
                case "Excluir":
                    try{
                        excluir();
                    } catch (Exception exc){
                        JOptionPane.showMessageDialog(null,"Não foi possível excluir, pois este usuário não existe");
                    }

                    break;
                case "Listar Todos":
                    imprimir();
                    //JOptionPane.showMessageDialog(null,ClienteDS.listarTodos());
                    break;
                case "Pesquisar por nome":
                    try {
                        imprimirPorNome(JOptionPane.showInputDialog("Pesquisar por nome: "));
                    } catch (Exception exc){
                        JOptionPane.showMessageDialog(null,"Este nome não existe no Data Source");
                    }
                    break;
                case "Pesquisar por ID":
                        imprimirPorId(Integer.parseInt(JOptionPane.showInputDialog("Pesquisar por ID: ")));
                    break;
                case "Sair":
                    System.exit(0);
                    break;
            }

        }while(true);


    }

    private static void novo() {
        Cliente cliente = new Cliente();
        cliente.setId(Integer.parseInt(JOptionPane.showInputDialog(null, "ID do Cliente: ")));
        cliente.setNome(JOptionPane.showInputDialog(null, "Nome: "));
        cliente.setCpf(JOptionPane.showInputDialog(null, "CPF: "));
        cliente.setTelefone(JOptionPane.showInputDialog(null, "Telefone: "));
        cliente.setEndereco(JOptionPane.showInputDialog(null, "Endereço: "));
        ClienteDS.add(cliente);
    }

    private static void excluir(){
        int id = Integer.parseInt(JOptionPane.showInputDialog("Digite o ID do cliente que deseja excluir: "));
        Cliente cliente = ClienteDS.getPorId(id);

        if (cliente != null){
            ClienteDS.remove(cliente);
        } else{
            JOptionPane.showMessageDialog(null,"Cliente não encontrado");
        }
    }

    private static void imprimir(){
        JOptionPane.showMessageDialog(null,ClienteDS.listarTodos());
    }

    private static void imprimirPorId(int id) {
        try {
            JOptionPane.showMessageDialog(null,ClienteDS.getPorId(id));
        } catch (Exception exc) {
            JOptionPane.showMessageDialog(null,"Nenhum usuário possui este ID");
        }
    }

    private static void imprimirPorNome(String nome){
        JOptionPane.showMessageDialog(null,ClienteDS.getPorNome(nome));
    }

    private static String menu() {
        Object[] abrirMenu = {"Incluir","Excluir","Listar Todos","Pesquisar por nome","Pesquisar por ID","Sair"};

        Object respMenu = JOptionPane.showInputDialog(null,"Escolha um item","Seleção de itens",
                JOptionPane.PLAIN_MESSAGE,null,abrirMenu,"");

        return respMenu.toString();
    }
}
