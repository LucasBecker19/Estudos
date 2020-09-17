/*

*/
#include<iostream>
#include<stdlib.h>
using namespace std;

void valorabsoluto(int N)
{
	int R;
 	if (N<0)
 	{
 		R=N*-1;
 		cout<<"O valor absoluto de "<<N<<" é "<<R;
	}
}

main()
{
	setlocale (LC_ALL,"Portuguese");
	int numero;
	
	
	cout<<"Digite um valor: ";
	cin>>numero;
	valorabsoluto(numero);
}
/* 
	for (i=0;i<69;i++)
    {
    	cout<<"_";
	}
*/	
