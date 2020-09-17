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
	int i;
	string nome[5];
	float n1[5],n2[5],m[5];
	
	for (i=0; i<5; i++)           
	{
		cout<<"Digite o nome do "<<i+1<<" aluno: ";cin>>nome[i];
		cout<<"Digite a nota 1: "<<endl; cin>>n1[i];
		cout<<"Digite a nota 2: "<<endl; cin>>n2[i];
		m[i]=(n1[i]+n2[i])/2;
		cout<<"A média é: "<<m[i]<<endl;
		if (m[i]>=6)
			cout<<"Aprovado"<<endl;
		else
			cout<<"Reprovado";
		
	}
	cout<<endl<<"Relação de alunos: "<<endl;
	for (i=0;i<5;i++)
	{
		cout<<nome[i]<<": "<<n1[i]<<" , "<<n2[i]<<" = "<<m[i]<<endl;
	}
	
	
}
