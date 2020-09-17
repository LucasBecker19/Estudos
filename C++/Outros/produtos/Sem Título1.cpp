/*Desenvolva programa um programa para ler 5 produtos. Os dados do produto são: o nome, a quantidade em estoque, a quantidade mínima em estoque e o valor unitário.
Após a entrada, apresentar os seguintes relatórios:
- Relatório Geral: contendo todos os dados dos produtos;
- Relatório dos produtos a adquirir: contendo todos os dados onde a quantidade em estoque é menor ou igual a quantidade mínima de estoque.

DESAFIO: tentar realizar a apresentação do preço total de cada produto (quantidade em estoque x preço unitário).*/
#include<iostream>
using namespace std;

main(){
	setlocale(LC_ALL,"portuguese");
	
	string nome[5];
	int quant[5],quantMin[5];
	float preco[5], precoTotal[5];
	
	//Entradas
	for(int i=0;i<5;i++){
		cout<<"\nDigite o nome do "<<i+1<<"º produto: ";
		cin>>nome[i];
		
		cout<<"Digite a quantidade em estoque: ";
		cin>>quant[i];
		
		cout<<"Digite a quantidade mínima em estoque: ";
		cin>>quantMin[i];
		
		cout<<"Digite o preço unitário: R$";
		cin>>preco[i];
	}
	
	//Relatório Geral
	cout<<"\n\n-------------------------------\nRelatório Geral\n-------------------------------";
	for(int i=0;i<5;i++){
		cout<<"\nNome do "<<i+1<<"º produto: "<<nome[i];
		
		cout<<"\nQuantidade em estoque: "<<quant[i];
		
		cout<<"\nQuantidade mínima em estoque: "<<quantMin[i];
		
		cout<<"\nPreço unitário: R$"<<preco[i]<<"\n\n";
	}
	
	//Relatório de produtos a adquirir
	cout<<"\n\n-------------------------------\nRelatório de Produtos a adquirir \n-------------------------------";
	for(int i=0;i<5;i++){
		if(quant[i]<=quantMin[i]){
			cout<<"\nProduto número "<<i+1;
			
			cout<<"\nNome do produto: "<<nome[i];
			
			cout<<"\nQuantidade em estoque: "<<quant[i];
			
			cout<<"\nQuantidade mínima em estoque: "<<quantMin[i];
			
			cout<<"\nPreço unitário: R$"<<preco[i]<<"\n\n";
		}
	}
	
	//Relatório do Preço total de cada produto
	cout<<"\n\n-------------------------------\nRelatório do Preço Total de Cada Produto\n-------------------------------";
	for(int i=0;i<5;i++){
		precoTotal[i]=quant[i]*preco[i];
		
		cout<<"\nNome do produto: "<<nome[i];
		
		cout<<"\nPreço total: R$"<<precoTotal[i]<<"\n\n";	
	}	
}
