package com.company;

public class Main {

    public static void main(String[] args) {

    PessoaFisica pf1 = new PessoaFisica();
    PessoaJuridica pj1 = new PessoaJuridica();

    //Testando se PF extende Proprietario
    pf1.setNome("Lucas");
    System.out.println("Nome: "+pf1.getNome());

    //Testando Pessoa Física
    pf1.setCpf("123");
    System.out.println("CPF: "+pf1.getCpf());


    //Testando se PJ extende Proprietario
    pj1.setNome("Becker");
    System.out.println("Nome: "+pj1.getNome());

    //Testando Pessoa Jurídica
    pj1.setCnpj("456");
    System.out.println("CPF: "+pj1.getCnpj());

    //Getdados pessoa fisica
        System.out.println("Fisica\n"+pf1.getDados());

    //Getdados pessoa juridica
        System.out.println("Juridica\n"+pj1.getDados());

    }
}
