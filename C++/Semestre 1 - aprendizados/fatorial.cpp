#include<iostream>
#include<stdlib.h>
#include<time.h>
using namespace std;

int fatorial(int n)
{
	int resultado=0;
	if (n<0)
	{
		cout<<"ERRO";
		return 0;
	}
	else
	{
		int resultado=1;
		for (int i=n;i>=1;i--)
		{
			resultado=resultado*i;
		}
		return resultado;
	}

}

main()
{
	setlocale(LC_ALL,"Portuguese");
	
	int N;
	cout<<"Digite o número que quiser fatorar: "; cin>>N;
	
	cout<<"O fatorial de "<<N<<" é "<<fatorial(N)<<endl;
	
}
