/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entradasaidadadosjoptionpane;

import javax.swing.JOptionPane;

/**
 *
 * @author mpisching
 */
public class EntradaSaidaDadosJOptionPane {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        String senha = JOptionPane.showInputDialog("Senha:");
        
        if (senha.equals("1234")) {
            JOptionPane.showMessageDialog(null, "Senha é válida");
        } else {
            JOptionPane.showMessageDialog(null, "Senha é inválida");
        }
        
        String nome = JOptionPane.showInputDialog("Nome:");
        String str = JOptionPane.showInputDialog("Idade: ");
        int idade = Integer.parseInt(str);
        //int idade = Integer.parseInt(JOptionPane.showInputDialog("Idade: "));

        float salario = 
                Float.parseFloat(JOptionPane.showInputDialog("Salário: "));
        
        double tamanho = Double.parseDouble(JOptionPane.showInputDialog("Tamanho: "));
        
        String sexoStr = JOptionPane.showInputDialog("Sexo (F/M)?");
        char sexo = sexoStr.charAt(0);
        
        if (sexo == 'f' || sexo == 'F') {
            JOptionPane.showMessageDialog(null, "Sexo Feminino");
        } else {
            JOptionPane.showMessageDialog(null, "Sexo Masculino");
        }
        
        JOptionPane.showMessageDialog(null, "O " + nome +" de " + 
                idade + " anos tem o salário de R$ " + salario);
        

    }
    
}
