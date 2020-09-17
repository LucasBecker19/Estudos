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
	
	cout<<"TABELA DE PULVERIZA��ES\n"<<"Pulveriza��o 	      Valor (por hectare)"<<endl<<"________________________________________\n\n"<<"Percevejo 	      R$ 500,00"<<endl<<"Lagarta 	      R$ 900,00"<<endl<<"Broca 	              R$ 1200,00"<<endl<<"Gafanhotos 	      R$ 1350,00\n";	
	do
	{	
	cout<<"\n\nNome do fazendeiro: ";cin>>nome;
	do
	{
	cout<<"\n\nDigite a letra inicial da pulveriza��o desejada (P=Percevejo, L=Lagarta, B=Broca e G=Gafanhotos): "; 	cin>>tipo;
	if (tipo!='P' and tipo!='L' and tipo!='B' and tipo!='G' and tipo!='p' and tipo!='l' and tipo!='b' and tipo!='g')
	cout<<"Pulveriza��o n�o existente, tente novamente.";
	}while (tipo!='P' and tipo!='L' and tipo!='B' and tipo!='G' and tipo!='p' and tipo!='l' and tipo!='b' and tipo!='g');
	cout<<"\nDigite a �rea (em hectares) a ser pulverizada: ";cin>>hectares;cout<<endl;
	

		switch (tipo)
		{
			case 'P':	
				cout<<"Voc� selecionou o tipo: Percevejo";
				preco=500*hectares;
				cout<<"\nVoc� gastou: R$"<< preco;
				break;
			case 'p':	
				cout<<"Voc� selecionou o tipo: Percevejo";
				preco=500*hectares;
				cout<<"\nVoc� gastou: R$"<< preco;
				break;
			case 'L':
				cout<<"Voc� selecionou o tipo: Lagarta";
				preco=900*hectares;
				cout<<"\nVoc� gastou: R$"<< preco;
				break;
			case 'l':
				cout<<"Voc� selecionou o tipo: Lagarta";
				preco=900*hectares;
				cout<<"\nVoc� gastou: R$"<< preco;
				break;			
			case 'B':
				cout<<"Voc� selecionou o tipo: Broca";
				preco=1200*hectares;
				cout<<"\nVoc� gastou: R$"<< preco;
				break;
			case 'b':
				cout<<"Voc� selecionou o tipo: Broca";
				preco=1200*hectares;
				cout<<"\nVoc� gastou: R$"<< preco;
				break;
			case 'G':
				cout<<"Voc� selecionou o tipo: Gafanhoto";
				preco=1350*hectares;
				cout<<"\nVoc� gastou: R$"<< preco;
				break;
			case 'g':
				cout<<"Voc� selecionou o tipo: Gafanhoto";
				preco=1350*hectares;
				cout<<"\nVoc� gastou: R$"<< preco;
				break;
			default:
				cout<<"\nVoc� n�o digitou a inicial de uma pulveriza��o, tente novamente.";cin>>tipo;
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
	cout<<"\nN�mero de pulveriza��es: "<<pulverizacao;
	cout<<"\nFazendeiro que mais pagou pela pulveriza��o: "<<fazendeirotop<<endl<<"Pre�o pago: R$"<<precotop<<endl<<"Tipo de pulveriza��o: "<<tipotop<<endl<<"�rea pulverizada: "<<hectartop<<endl;

}
