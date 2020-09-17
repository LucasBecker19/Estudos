#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"Portuguese");
	
	int N=5,i;
	int V[N],aux,cont;
	
	for (i=0;i<N;i++)
	{
		cout<<"Digite o "<<i+1<<"o. valor: ";
		cin>>V[i];
	}
	
	
	for (cont=0;cont<N-1;cont++)
	{
		for(i=0;i<N-1-cont;i++)
		if (V[i]>V[i+1])
		{
			aux=V[i];
			V[i]=V[i+1];
			V[i+1]=aux;
		}
	}
	
	for (i=0;i<N;i++)
	{
		cout<<V[i]<<" ";
	}
}
