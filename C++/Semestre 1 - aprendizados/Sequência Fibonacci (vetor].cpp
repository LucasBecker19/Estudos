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
	int i, N;
	cout<<"Quantidade de números desejados na sequência Fibonacci:"; cin>>N;
	unsigned int F[N];
	
	F[0]=0;
	F[1]=1;
	cout<<F[0]<<" "<<F[1]<<" ";
	for (i=2; i<N; i++)
	{
		F[i]=F[i-1]+F[i-2];
		cout<<F[i]<<" ";
	}
}
