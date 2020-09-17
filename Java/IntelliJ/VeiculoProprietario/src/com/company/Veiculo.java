package com.company;

public class Veiculo {
    private String placa;
    private String cor;
    private String modelo;
    private String marca;

    public Proprietario proprietario;

    //Getters e Setters
   public String getPlaca(){
       return this.placa;
   }

    public void setPlaca(String placa){
        this.placa = placa;
    }

    public String getCor() {
        return cor;
    }

    public void setCor(String cor) {
        this.cor = cor;
    }

    public String getModelo() {
        return modelo;
    }

    public void setModelo(String modelo) {
        this.modelo = modelo;
    }

    public String getMarca() {
        return marca;
    }

    public void setMarca(String marca) {
        this.marca = marca;
    }

    //Construtor
    public Veiculo(String placa){
       this.placa = placa;
    }
}
