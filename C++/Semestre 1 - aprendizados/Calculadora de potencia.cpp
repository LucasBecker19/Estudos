//Christian e Lucas
#include<iostream>
#include<stdlib.h>
using namespace std;

int fatorial (int b, int e)
{
	int i;
	float resultado=1;
	if (e==0)
	cout<<"Resultado: 1";
	if (e<0)
	{
		for (i=0;i<e*-1;i++)
		{
			resultado=resultado*b;
		}
		cout<<"Resultado: "<<1/resultado;
	}
	if (e>0)
	{
		for (i=0;i<e;i++)
		{
			resultado=resultado*b;
		}
		cout<<"Resultado: "<<resultado;
	}
	
	
//	return resultado
}

main()
{
	setlocale (LC_ALL,"Portuguese");
	int base, expoente;
	
	cout<<"Digite a base: "; cin>>base;
	cout<<"Digite o expoente: ";cin>>expoente;
	
	fatorial(base,expoente);
}
