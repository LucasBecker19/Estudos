#include <iostream>
#include <stdlib.h>  

using namespace std;

main()
{
	setlocale(LC_ALL,"Portuguese");
	
	int candidatos,questoes,apr=0,rep=0,L,C;
	cout<<"Digite a quantidade de candidatos: ";cin>>candidatos;
	cout<<"Digite a quantidade de questões: ";cin>>questoes;
	
	string nomes[candidatos],gab[questoes],resp[candidatos][questoes],maiorcand;
	float acertos[candidatos],nota[candidatos],notasomada=0,maiornota=0, notamedia, acertos2[questoes];
	
	for(L=0;L<questoes;L++)
	{
		do
		{
			cout<<"A resposta certa da "<<L+1<<".o questão é:";
			cin>>gab[L];
			if(gab[L]!="A" and gab[L]!="a" and gab[L]!="B" and gab[L]!="b" and gab[L]!="C" and gab[L]!="c" and gab[L]!="D" and gab[L]!="d" and gab[L]!="E" and gab[L]!="e")
			{
				cout<<"Resposta errada, tente novamente."<<endl;
			}
		}while(gab[L]!="A" and gab[L]!="a" and gab[L]!="B" and gab[L]!="b" and gab[L]!="C" and gab[L]!="c" and gab[L]!="D" and gab[L]!="d" and gab[L]!="E" and gab[L]!="e");
	}


	for(L=0;L<candidatos;L++)
	{
	cout<<endl<<"Nome do "<<L+1<<".o candidato:";
	cin>>nomes[L];
	acertos[L]=0;
		
		
		for(C=0;C<questoes;C++)
		{
			do
			{
			cout<<"Resposta escolhida na "<<C+1<<".o questão: ";
			cin>>resp[L][C];
			
			if(resp[L][C]!="A" and resp[L][C]!="a" and resp[L][C]!="B" and resp[L][C]!="b" and resp[L][C]!="C" and resp[L][C]!="c" and resp[L][C]!="D" and resp[L][C]!="d" and resp[L][C]!="E" and resp[L][C]!="e")
			{
				cout<<"Resposta errada, tente novamente.";
			}
			
			}while(resp[L][C]!="A" and resp[L][C]!="a" and resp[L][C]!="B" and resp[L][C]!="b" and resp[L][C]!="C" and resp[L][C]!="c" and resp[L][C]!="D" and resp[L][C]!="d" and resp[L][C]!="E" and resp[L][C]!="e");
				
				if(resp[L][C]==gab[C])
				{
					acertos[L]++;
					acertos2[C]++;
				}
			nota[L]=acertos[L]/questoes*10;
			if(nota[L]>maiornota)
			{
				maiorcand=nomes[L];
				maiornota=nota[L];
			}
			else if(nota[L]==maiornota)
			{
				maiorcand=maiorcand+" e "+nomes[L];             
			}		
		}
		if(nota[L]>=5)
			apr++;
			else 
			rep++;
	}	
	cout<<endl;
	for(L=0;L<candidatos;L++)
	{
		cout<<nomes[L];
		if (nota[L]>=5)
			cout<<" está classificado"<<endl;
			else
			cout<<" está desclassificado"<<endl;

	}
	
	notasomada=0;
	for(L=0;L<candidatos;L++)
	{	
		cout<<"O candidato "<<nomes[L]<<" possui "<<acertos[L]<<" acertos. Sua nota sera: "<<nota[L]<<endl;
		notasomada+=nota[L];
	}
	notamedia=notasomada/candidatos;
	
	cout<<endl<<"A média dos candidatos foi: "<<notamedia<<endl;
	
	
	cout<<"O candidato com a maior nota foi "<<maiorcand<<" possuindo a nota "<<maiornota<<endl;
	cout<<"\n\nQuantidade de candidatos aprovados: "<<apr<<" "<<(100/candidatos)*apr<<"%"<<endl;
	cout<<"Quantidade de candidator reprovados: "<<rep<<" "<<(100/candidatos)*rep<<"%"<<endl;
	for (L=0;L<questoes;L++)
	{
		cout<<"\nPorcentagem de acertos na "<<L+1<<".a questão foi de: "<<(acertos2[L]/candidatos)*100<<"%";
	}
	cout<<"\n\nCandidatos aprovados: \n";	
	for (L=0;L<candidatos;L++)
	{
		if (nota[L]>=6)
		cout<<nomes[L]<<" com média "<<nota[L]<<endl;
	}

}
