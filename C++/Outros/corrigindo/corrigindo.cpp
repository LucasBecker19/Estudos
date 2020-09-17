/* Faça um programa para ler o nome e as duas notas de N alunos de uma turma
A quantidade N de alunos devera ser lida no inicio do programa
Para cada aluno faça:
-calcule e mostre sua media
-apresentar a situação do aluno (Aprovado para média>=6);
Ao final do programa apresente:
- A relação geral contendo: nome, nota 1, nota2, média e situação
- a média geral da turma
- O % de aprovados;
- a relação de aprovados contendo: nota1, nota2, média;
-o % de reprovados;
- a relação de reprovados contendo: nota1, nota2, média;

*/

#include<iostream>

using namespace std;

main ()

{
	
	
	setlocale(LC_ALL,"Portuguese");
	
	
	int N,i,aprovados=0,reprovados=0;
	
	
	cout<<"Digite a quantidade de alunos: "<<endl;
	cin>>N;
	
	string nome[N], situacao[N];
	float M[N],n1[N],n2[N],mediaGeral=0;
	
		for (i=0; i<N; i++)
		
		{
			
			cout<<"Digite o nome do aluno: "<<endl;
			cin>>nome[i];
			cout<<"Digite a nota1: "<<endl;
			cin>>n1[i];
			cout<<"Digite a nota2: "<<endl;
			cin>>n2[i];
			M[i]=(n1[i]+n2[i])/2;
			cout<<"A média do aluno foi de: "<<M[i]<<endl;
			
			if (M[i]>=6)
			{
				cout<<"O aluno foi aprovado"<<endl;
				situacao[i]="Aprovado";
				aprovados++;
				
			}
				
			else {
				
				cout<<"O aluno foi reprovado"<<endl;
				situacao[i]="Reprovado";
				reprovados++;
			}
				
			
		}//fim do for

	
	cout<<"-----------------------------------------------------------------------------------"<<endl;
	cout<<"Relação Geral"<<endl;
	cout<<"Nome\t       Nota 1\t     Nota 2\t      Média\t        Situação"<<endl;
	cout<<"-----------------------------------------------------------------------------------"<<endl;
	
	for (i=0; i<N; i++)
	{
		cout<<nome[i]<<"\t""\t"<<n1[i]<<"\t""\t"<<n2[i]<<"\t""\t"<<M[i]<<"\t""\t"<<situacao[i]<<endl; 
		//somando as medias
		mediaGeral+=M[i];
	}
	
	//calculando a media
	mediaGeral= mediaGeral/N;
	cout<<"\nMédia geral: "<<mediaGeral;
	
	//Aprovados
	cout<<"\nPorcentagem de alunos aprovados: "<<aprovados*100/N<<"%";
	cout<<"\nAlunos aprovados: \n";

	for(i=0; i<N; i++)
	{
		if(situacao[i]=="Aprovado"){
			cout<<"Nome: "<<nome[i];
			cout<<"\nNota 1: "<<n1[i];
			cout<<"\nNota 2: "<<n2[i];
		}
		cout<<"\n\n";
	}
	
	//Reprovados
	cout<<"\nPorcentagem de alunos reprovados: "<<reprovados*100/N<<"%";
	cout<<"\nAlunos reprovados: ";
	for(i=0; i<N; i++)
	{
		if(situacao[i]=="Reprovado"){
				cout<<"Nome: "<<nome[i];
				cout<<"\nNota 1: "<<n1[i];
				cout<<"\nNota 2: "<<n2[i];
		}
		cout<<"\n\n";
	}
	
	
	 
	
	
}
