// amota��o de 1 linha

/*
anota��o de muitas linhas
*/

#include<iostream>
using namespace std;


main()
{
	setlocale(LC_ALL,"Portuguese");
	
	string nome;                 // cadeia
	float n1,n2,m,soma=0;        // real
    int N,cont=1,cont_aprovados=0,cont_reprovados=0;                // inteiro
                                 //char= caracter
	cout<<"Qual a quantidade de alunos? "; cin>>N;
	system("cls");               // limpa a tela	while (cont<=N)              
	while (cont<=N)              // n�o precisa de  " ; "
	{	
		cout<<"Nome do "<<cont<<"o. aluno: "; //escreva
		cin>>nome;               //leia
		cout<<"Nota 1: "; cin>>n1;
		cout<<"Nota 2: "; cin>>n2;
		m=(n1+n2)/2;
		soma=soma+m;
		cout<<"A m�dia de "<<nome<<" � "<< m<<endl; //endl = \n
		if(m>=6)                      //e= and ou &&     ou= or ou ||    se=if     
		{
		cout<<"Aprovado"<<endl<<"\n\n"; 
		cont_aprovados++;  
		}
		else 
		{	
		cout<<"Reprovado\n\n";
		cont_reprovados++;
		}
				cont++;
	} // fim do while
	cout<<"A m�dia dos alunos �: "<<(soma/N)<<"\n";
	cout<<"Percentual de alunos aprovados: "<<cont_aprovados*100/N<<"%\n";
	cout<<"Percentual de alunos reprovados: "<<cont_reprovados*100/N<<"%\n\n";
	system("pause");                            //pausa 
}
