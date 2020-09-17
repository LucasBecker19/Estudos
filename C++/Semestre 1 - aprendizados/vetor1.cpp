/*
   Testando vetores
   
   Exemplo 1: Ler uma serquência de 5 números e, após o armazenamento, mostrar:
   -Todos
   -Somente os pares
   -Todos na ordem inversa
*/
#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"Portuguese");
	
	int x[5],i=0;
	
	for (i;i<5;i++)                               
	{
		cout<<"Digite um número: "; cin>>x[i];
	}


	cout<<"Todos: "<<endl;
	for(i=0;i<5;i++)                             //todos
	{
		cout<<x[i]<<endl;
	}


	cout<<"Pares: "<<endl;
	for(i=0;i<5;i++)                            //pares
	{
		if(x[i]%2==0)
		cout<<x[i]<<endl;
	}
	
	
		cout<<"Todos na ordem inversa: "<<endl;
		for (i=4;i>=0;i--)                     //todos na ordem inversa
		{
			cout<<x[i]<<endl;
		}
		
		
		
		
		
		
}
