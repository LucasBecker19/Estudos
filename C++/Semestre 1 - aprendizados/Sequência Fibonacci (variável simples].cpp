/*
Gerar a sequ�ncia de Fibonacci para N posi��es, sendo que N deve ser lido no in�cio do programa

Sequ�ncia de Fibonacci: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ....
*/

#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"Portuguese");
	int i,N, x=1,y=0,PN=0;
	cout<<"Digite o n�mero de resultados sequenciais que voc� deseja da sequ�ncia Fibonacci: "; cin>>N;
	
	for(i=0; i<N; i++)
	{		
	cout<<PN<<" ";
	PN=x+y;
	x=y;
	y=PN;
	}
	
}
