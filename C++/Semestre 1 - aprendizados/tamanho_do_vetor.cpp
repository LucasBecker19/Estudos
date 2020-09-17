#include<iostream>
#include<stdlib.h>
#include<time.h>
using namespace std;

void leia_vetor(int vetor[],int tamanho)
{
		for(int i=0;i<tamanho;i++)  //entrada
	{
		vetor[i]=rand()%10; 
	}
}

void escreva_vetor(int vetor[],int tamanho) //saída
{
	for(int i=0;i<tamanho;i++) 
	{
		cout<<vetor[i]<<" " ;
	}
}

int soma_vetor(int vetor[], int tamanho)
{
	int soma=0;
	for (int i=0;i<tamanho;i++)
	{
		soma+=vetor[i];
	}
	return soma;
}


main()
{
	setlocale(LC_ALL,"Portuguese");
	int N;
	
	cout<<"Tamanho do vetor: ";cin>>N;
	
	int V[N],i;
	srand(time(NULL));
	
	leia_vetor(V,N);
	escreva_vetor(V,N);

	cout<<"\nSomatório do vetor: "<<soma_vetor(V,N)<<endl;
}
