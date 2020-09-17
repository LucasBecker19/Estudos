/*
Gerar a sequência de Fibonacci para N posições, sendo que N deve ser lido no início do programa

Sequência de Fibonacci: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ....
*/

#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"Portuguese");
	int i,N, x=1,y=0,PN=0;
	cout<<"Digite o número de resultados sequenciais que você deseja da sequência Fibonacci: "; cin>>N;
	
	for(i=0; i<N; i++)
	{		
	cout<<PN<<" ";
	PN=x+y;
	x=y;
	y=PN;
	}
	
}
