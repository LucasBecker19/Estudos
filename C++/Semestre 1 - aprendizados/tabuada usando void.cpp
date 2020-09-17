/*

*/
#include<iostream>
#include<stdlib.h>
using namespace std;

void tabuada(int N)
{
	for (int i=1;i<=10;i++)
	{
		cout<<N<<" X "<<i<<" = "<<N*i<<endl;
	}
}

main()
{
	setlocale (LC_ALL,"Portuguese");
	int numero;
	
	
	cout<<"Digite um valor: ";
	cin>>numero;
	tabuada(numero);
	
}
/* 
	for (i=0;i<69;i++)
    {
    	cout<<"_";
	}
*/	
