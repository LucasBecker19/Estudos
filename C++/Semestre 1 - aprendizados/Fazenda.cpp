#include <stdlib.h>  
#include <iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"Portuguese");
	string nome,fazendeirotop;
	int pulverizacao=0,hectares=0,hectartop=0;
	float preco=0,precototal=0,precotop=0;
	char tipo,resp,tipotop;
	
	cout<<"TABELA DE PULVERIZAÇÕES\n"<<"Pulverização 	      Valor (por hectare)"<<endl<<"________________________________________\n\n"<<"Percevejo 	      R$ 500,00"<<endl<<"Lagarta 	      R$ 900,00"<<endl<<"Broca 	              R$ 1200,00"<<endl<<"Gafanhotos 	      R$ 1350,00\n";	
	do
	{	
	cout<<"\n\nNome do fazendeiro: ";cin>>nome;
	do
	{
	cout<<"\n\nDigite a letra inicial da pulverização desejada (P=Percevejo, L=Lagarta, B=Broca e G=Gafanhotos): "; 	cin>>tipo;
	if (tipo!='P' and tipo!='L' and tipo!='B' and tipo!='G' and tipo!='p' and tipo!='l' and tipo!='b' and tipo!='g')
	cout<<"Pulverização não existente, tente novamente.";
	}while (tipo!='P' and tipo!='L' and tipo!='B' and tipo!='G' and tipo!='p' and tipo!='l' and tipo!='b' and tipo!='g');
	cout<<"\nDigite a área (em hectares) a ser pulverizada: ";cin>>hectares;cout<<endl;
	

		switch (tipo)
		{
			case 'P':	
				cout<<"Você selecionou o tipo: Percevejo";
				preco=500*hectares;
				cout<<"\nVocê gastou: R$"<< preco;
				break;
			case 'p':	
				cout<<"Você selecionou o tipo: Percevejo";
				preco=500*hectares;
				cout<<"\nVocê gastou: R$"<< preco;
				break;
			case 'L':
				cout<<"Você selecionou o tipo: Lagarta";
				preco=900*hectares;
				cout<<"\nVocê gastou: R$"<< preco;
				break;
			case 'l':
				cout<<"Você selecionou o tipo: Lagarta";
				preco=900*hectares;
				cout<<"\nVocê gastou: R$"<< preco;
				break;			
			case 'B':
				cout<<"Você selecionou o tipo: Broca";
				preco=1200*hectares;
				cout<<"\nVocê gastou: R$"<< preco;
				break;
			case 'b':
				cout<<"Você selecionou o tipo: Broca";
				preco=1200*hectares;
				cout<<"\nVocê gastou: R$"<< preco;
				break;
			case 'G':
				cout<<"Você selecionou o tipo: Gafanhoto";
				preco=1350*hectares;
				cout<<"\nVocê gastou: R$"<< preco;
				break;
			case 'g':
				cout<<"Você selecionou o tipo: Gafanhoto";
				preco=1350*hectares;
				cout<<"\nVocê gastou: R$"<< preco;
				break;
			default:
				cout<<"\nVocê não digitou a inicial de uma pulverização, tente novamente.";cin>>tipo;
		}
		if (preco==precotop)
			{
			fazendeirotop=fazendeirotop+" e "+nome;
			}		
		if (preco>precotop)
		{
			fazendeirotop=nome;
			precotop=preco;
			hectartop=hectares;
			tipotop=tipo;
		}

		precototal+=preco;
		pulverizacao++;
		preco=0;
		do 
		{
		cout<<"\n\nDeseja continuar? (S/N): ";cin>>resp;
		if (resp!='S' and resp!='s' and resp!='N' and resp!='n')
		cout<<"\nResposta incorreta. Tente novamente";
		}while (resp!='S' and resp!='s' and resp!='N' and resp!='n');
	}while (resp=='S' or resp=='s');
	
	cout<<"\n\nValor total arrecadado: R$"<<precototal;
	cout<<"\nNúmero de pulverizações: "<<pulverizacao;
	cout<<"\nFazendeiro que mais pagou pela pulverização: "<<fazendeirotop<<endl<<"Preço pago: R$"<<precotop<<endl<<"Tipo de pulverização: "<<tipotop<<endl<<"Área pulverizada: "<<hectartop<<endl;

}
