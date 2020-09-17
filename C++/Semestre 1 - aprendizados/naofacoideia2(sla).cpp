#include<iostream>
#include<stdlib.h>
using namespace std;
int soma(int x, int y)
{
	return x+y;
}
float divide(float x, float y)
{
	if (y==0)
	cout<<"Impossível divisão por 0"<<endl;
	else
	return x/y;
}

main()
{
	setlocale (LC_ALL,"Portuguese");
	
	int a,b;
	
	cout<<"Número 1: ";cin>>a;
	cout<<"Número 2: ";cin>>b;
	
	cout<<"A soma dos valores é: "<<soma(a,b)<<endl;
	cout<<"A divisão dos valores é: "<<divide(a,b)<<endl;
	cout<<"teste "<<divide(a*b ,soma(b,a));
}
/* 
	for (i=0;i<69;i++)
    {
    	cout<<"_";
	}
*/	
