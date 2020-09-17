#include<iostream>
#include<stdlib.h>
using namespace std;


void linha1()
{
	cout<<"_______________________________________"<<endl;
}
void linha2(char C,int N)
{
	for (int i=0;i<N;i++)
    {
    	cout<<C;
	}		
	cout<<endl;																																																													
}
void mensagem(string user)
{
	cout<<"Olá "<<user<<"!"<<endl;
}
main()
{
	setlocale(LC_ALL,"Portuguese");
    char letra;
    int N=50;
	string nome;
	
	
	
    linha1();
    linha2('#',10);
    linha2('*',20);
    cin>>letra;
    linha2(letra,N*2);
    
    cout<<"Nome: ";cin>>nome;
    mensagem(nome);
    

}
/* 
	for (i=0;i<69;i++)
    {
    	cout<<"_";
	}
*/	
