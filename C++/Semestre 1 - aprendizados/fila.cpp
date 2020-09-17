#include<iostream>
#include<stdlib.h>
#include <cstdlib>
using namespace std;
main()
{
	setlocale (LC_ALL,"Portuguese");
	int n,t,i=0,cont,cont2=0;
	
	cout<<"Digite a quantidade de lugares na fila: ";cin>>n;
	int vetor[n];
	for (cont=0;cont<n;cont++)
	{
		vetor[cont]=0;
	}
	
	do
	{
		cout<<"\nMenu\nDigite 1 para inserir\nDigite 2 para apagar\nDigite 3 para sair\n";cin>>t;
		if (t==1)
		{
			cout<<"Digite o valor que entrará na fila: ";cin>>vetor[i];
			i++;
			for (cont=0;cont<n;cont++)
			{
				cout<<vetor[cont]<<" ";
			}
		}
////////////////////
		else if (t==2)
		{		

			
		
		}
/////////////////////
		else if (t==3)
		cout<<"\nVocê saiu";
		else if (t!=1 and t!=2 and t!=3)
		{
		cout<<"\nOpção inválida, tente novamente";
		cin>>t;
		}
		
	}while(t!=3);
	
	
	
	
	
}
