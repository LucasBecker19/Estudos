/*
1-Faça um procedimento (void) que receba por parâmetro um valor inteiro positivo que corresponta a uma quantidade de linhas em branco que deverá ser gerada na tela.
*/
#include<iostream>
#include<stdlib.h>
using namespace std;

void linhas_em_branco(int N)
{
	for (int i=1;i<=N;i++)
	{
		cout<<endl;
	}
}

main()
{
	setlocale (LC_ALL,"Portuguese");
	int x=2;
	
	
	cout<<"Testando a função: "<<endl;
	linhas_em_branco(5);
	cout<<"_____________________"<<endl;
	linhas_em_branco(x);
	cout<<"_____________________"<<endl;
	cin>>x;
	linhas_em_branco(x);
	cout<<"Acabou";
}
/* 
	for (i=0;i<69;i++)
    {
    	cout<<"_";
	}
*/	
