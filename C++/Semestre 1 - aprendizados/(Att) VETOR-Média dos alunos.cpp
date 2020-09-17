/*
	Exemplo 2: Fazer um programa para ler dados de uma turma com 5 alunos.
	Para cada aluno deve-se:
	-ler o nome e suas 2 notas
	-calcular e mostrar a média
	-mostrar mensagem informando se o aluno está aprovado (média>=6) ou reprovado.
	Ao final, apresentar:
	-relatório com os dados dos alunos (nome, notas e médias).
*/	
#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"Portuguese");
	int i,N;
	float soma=0;
	
	cout<<"Quantidade de alunos: "; cin>>N;
	string nome[N];
	float n1[N],n2[N],m[N],maiormedia=-1;
	
	for (i=0; i<N; i++)           
	{
		cout<<"\nDigite o nome do "<<i+1<<" aluno: ";cin>>nome[i];
		cout<<"Digite a nota 1: "; cin>>n1[i];
		cout<<"Digite a nota 2: "; cin>>n2[i];
		m[i]=(n1[i]+n2[i])/2;
		cout<<"\nA média é: "<<m[i]<<endl;
		if (m[i]>=6)
			cout<<"Aprovado\n\n"<<endl;
		else
			cout<<"Reprovado\n\n";
		soma+=m[i];         // soma=soma+m[i]
		
		if (m[i]>maiormedia)
		maiormedia=m[i];
	}
	cout<<endl<<"Relação de alunos: "<<endl;
	for (i=0;i<N;i++)
	{
		cout<<nome[i]<<": "<<n1[i]<<", "<<n2[i]<<" = "<<m[i]<<endl;
	}
	
	cout<<endl<<"Alunos aprovados: "<<endl;
	for (i=0;i<N;i++)
	{
		if (m[i]>=6)
		cout<<nome[i]<<": "<<n1[i]<<", "<<n2[i]<<" = "<<m[i]<<endl;
	}
	
	cout<<"\nA média da turma é: "<<soma/N<<endl;
	
	cout<<endl<<"Alunos acima da média da turma: "<<endl;
	for (i=0;i<N;i++)
	{
		if (m[i]>soma/N)
		cout<<nome[i]<<": "<<m[i]<<endl;
	}
	
	cout<<"\nA maior média da turma é: "<<maiormedia<<", obtida pelo(s) aluno(s): "<<endl;
	for (i=0;i<N;i++)
	{
		if (m[i]==maiormedia)
		cout<<nome[i]<<endl;
	}
	
}
