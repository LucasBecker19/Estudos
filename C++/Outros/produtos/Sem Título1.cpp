/*Desenvolva programa um programa para ler 5 produtos. Os dados do produto s�o: o nome, a quantidade em estoque, a quantidade m�nima em estoque e o valor unit�rio.
Ap�s a entrada, apresentar os seguintes relat�rios:
- Relat�rio Geral: contendo todos os dados dos produtos;
- Relat�rio dos produtos a adquirir: contendo todos os dados onde a quantidade em estoque � menor ou igual a quantidade m�nima de estoque.

DESAFIO: tentar realizar a apresenta��o do pre�o total de cada produto (quantidade em estoque x pre�o unit�rio).*/
#include<iostream>
using namespace std;

main(){
	setlocale(LC_ALL,"portuguese");
	
	string nome[5];
	int quant[5],quantMin[5];
	float preco[5], precoTotal[5];
	
	//Entradas
	for(int i=0;i<5;i++){
		cout<<"\nDigite o nome do "<<i+1<<"� produto: ";
		cin>>nome[i];
		
		cout<<"Digite a quantidade em estoque: ";
		cin>>quant[i];
		
		cout<<"Digite a quantidade m�nima em estoque: ";
		cin>>quantMin[i];
		
		cout<<"Digite o pre�o unit�rio: R$";
		cin>>preco[i];
	}
	
	//Relat�rio Geral
	cout<<"\n\n-------------------------------\nRelat�rio Geral\n-------------------------------";
	for(int i=0;i<5;i++){
		cout<<"\nNome do "<<i+1<<"� produto: "<<nome[i];
		
		cout<<"\nQuantidade em estoque: "<<quant[i];
		
		cout<<"\nQuantidade m�nima em estoque: "<<quantMin[i];
		
		cout<<"\nPre�o unit�rio: R$"<<preco[i]<<"\n\n";
	}
	
	//Relat�rio de produtos a adquirir
	cout<<"\n\n-------------------------------\nRelat�rio de Produtos a adquirir \n-------------------------------";
	for(int i=0;i<5;i++){
		if(quant[i]<=quantMin[i]){
			cout<<"\nProduto n�mero "<<i+1;
			
			cout<<"\nNome do produto: "<<nome[i];
			
			cout<<"\nQuantidade em estoque: "<<quant[i];
			
			cout<<"\nQuantidade m�nima em estoque: "<<quantMin[i];
			
			cout<<"\nPre�o unit�rio: R$"<<preco[i]<<"\n\n";
		}
	}
	
	//Relat�rio do Pre�o total de cada produto
	cout<<"\n\n-------------------------------\nRelat�rio do Pre�o Total de Cada Produto\n-------------------------------";
	for(int i=0;i<5;i++){
		precoTotal[i]=quant[i]*preco[i];
		
		cout<<"\nNome do produto: "<<nome[i];
		
		cout<<"\nPre�o total: R$"<<precoTotal[i]<<"\n\n";	
	}	
}
