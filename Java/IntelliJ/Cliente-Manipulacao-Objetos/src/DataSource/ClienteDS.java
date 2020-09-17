package DataSource;

import Entity.Cliente;

import javax.print.DocFlavor;
import java.util.ArrayList;
import java.util.List;

public class ClienteDS {

    //Aqui dentro será tudo estático!!

    private static List<Cliente> listaClientes = new ArrayList<>();

    public static List<Cliente> getListaClientes() {
        return listaClientes;
    }

    public static void setListaClientes(List<Cliente> listaClientes) {
        ClienteDS.listaClientes = listaClientes;
    }

    public static void criarLista(){
        add(new Cliente(1,"Lucas Becker","0050000000","48788562541","Rua a"));
        add(new Cliente(2,"Lucas de Moraes","0040000000","48977523651","Rua b"));
        add(new Cliente(3,"Alexandre Pinho","0030000000","48925364210","Rua c"));
        add(new Cliente(4,"Cleber Fonseca","0020000000","48923564871","Rua d"));
        add(new Cliente(5,"Jonas Schwertz","0010000000","48936489750","Rua e"));
    }

    public static void add(Cliente cliente){
       listaClientes.add(cliente);
    }

    public static void remove(Cliente cliente){
        listaClientes.remove(cliente);
    }

    public static String listarTodos(){
        StringBuilder sb = new StringBuilder();

        for(Cliente cliente: listaClientes){
            sb.append("ID ").append(cliente.getId()).append(" - ");
            sb.append(cliente.getNome()).append("\n");
        }
        return sb.toString();
    }

    public static Cliente getPorId(int id){
        for(Cliente cliente: listaClientes){
            if(cliente.getId()==id){
                return cliente;
            }
        }
        return null; //esse return só acontecerá se nenhum cliente tiver o id pesquisado. (A operação é encerrada no primeiro return que acontecer)
    }

    public static String getPorNome(String nome){
        StringBuilder sb = new StringBuilder();
        for(Cliente cliente: listaClientes){
            if(cliente.getNome().contains(nome)){
                sb.append(cliente);
            }
        }
        return sb.toString();
    }


}
