#include<iostream>
#include<stdlib.h>
#include<stdio.h>
using namespace std;
void opcoes ()
{
	cout<<"\nInsira o número da operação desejada\n";
	cout<<"\n1. Sacar\n";
	cout<<"2. Recarregar\n";
	cout<<"3. Sair\n";
	cout<<"4. Relatório\n";
}
int recarregar(int rec[],int aux[])
{
	int i,outraaux[6],resp;          
		system("cls");
		cout<<"\nRelatório de notas: \n";
		for (i=0;i<6;i++)
		{
			cout<<rec[i]<<" notas de "<<aux[i]<<endl;
		}	
		cout<<"\n\nRecarregando...\n";
		for (i=0;i<6;i++)
		{
			cout<<"Digite quantas notas de "<<aux[i]<<" você deseja recarregar: ";outraaux[i]=rec[i];cin>>resp;rec[i]+=resp; resp=0;
			if (rec[i]>200)
			{
				cout<<"\nNão pode ultrapassar de 200 notas! Tente novamente.\n";  rec[i]=outraaux[i];i--;
			}
		}
		cout<<"Caixa recarregado com sucesso!\n";
}
int relatorio(int rec[],int aux[],int saldo)
{
		//system("cls");
		cout<<"\nRelatório de notas: \n";
		for (int i=0;i<6;i++)
		{
			cout<<rec[i]<<" notas de "<<aux[i]<<endl;
		}
		cout<<"Total em caixa: R$"<<saldo<<endl;	
}
main()
{
	setlocale (LC_ALL,"Portuguese");
	int rec[6],aux[6],cont=0,saldo,opcao,valor=0,money=0,resto=0;	
	rec[0]=10;rec[1]=10;rec[2]=10;rec[3]=10;rec[4]=10;rec[5]=10; aux[0]=2;aux[1]=5;aux[2]=10;aux[3]=20;aux[4]=50;aux[5]=100;
	opcoes();
	do
	{
		cout<<"Digite a opção desejada: ";cin>>opcao;
		if(opcao!=1 and opcao!=2 and opcao!=3 and opcao!=4)
		{
			cout<<"Opção inválida, tente novamente: ";
		}
	}while(opcao!=1 and opcao!=2 and opcao!=3 and opcao!=4);
	saldo=0;saldo=(rec[5]*100)+(rec[4]*50)+(rec[3]*20)+(rec[2]*10)+(rec[1]*5)+(rec[0]*2);
	do
	{
		switch (opcao)
		{
			case 1:
				cout<<"Digite o valor que deseja sacar: ";cin>>valor;
				if (valor>=10 and valor <=1000)
				{
					if(valor<=saldo)
					{
						if (valor%10==1)
						{
							money+=2;rec[0]--; valor-=2;
						}
						if (valor%10==3)
						{
							money+=4; rec[0]-=2; valor-=4;
						}
						if (valor%10==6)
						{
							money+=2; rec[0]--; valor-=2;
						}
						if (valor%10==8)
						{
							money+=4; rec[0]-=2; valor-=4;
						}	
						if (valor>=100 and rec[5]>0)
						{
							do
							{
								resto=0;
								money+=100;
								rec[5]--;	
								valor-=100;
							}while(valor>=100 and rec[5]>0);	
						}
						if (valor>=50 and rec[4]>0)
						{
							do
							{
								money+=50;
								rec[4]--;
								valor-=50;					
							}while(valor>=50 and rec[4]>0);
			
						}
						if (valor>=20 and rec[3]>0)
						{
							do
							{
								money+=20;
								rec[3]--;
								valor-=20;					
							}while(valor>=20 and rec[3]>0);
						}
						if (valor>=10 and rec[2]>0)
						{
							do
							{
								money+=10;
								rec[2]--;
								valor-=10;					
							}while(valor>=10 and rec[2]>0);
						}
						if (valor>=5 and rec[1]>0)
						{
							do
							{
								money+=5;
								rec[1]--;
								valor-=5;
								cont++;					
							}while(valor>=5 and rec[1]>0);
						}
						if (valor>=2 and rec[0]>0)
						{
							do
							{
								money+=2;
								rec[0]--;
								valor-=2;					
							}while(valor>=2 and rec[0]>0);
						}
						if (valor==1 and cont>0)
						{
							valor=0; rec[1]++; rec[0]-=3; money+=6;
						}
					}
					else
					cout<<"Este caixa não tem dinheiro suficiente!";
				}
				else
				{
					cout<<"Você só pode sacar valores entre 10 e 1000 reais\n";
				}
				cout<<"\nDinheiro sacado: "<<money<<endl;
				saldo=0;saldo=(rec[5]*100)+(rec[4]*50)+(rec[3]*20)+(rec[2]*10)+(rec[1]*5)+(rec[0]*2);
				relatorio(rec,aux,saldo);
				money=0;
				system("pause");
				system("cls");
				opcoes();
				do
				{
					cout<<"Digite a opção desejada: ";cin>>opcao;
					if(opcao!=1 and opcao!=2 and opcao!=3 and opcao!=4)
					{
						cout<<"Opção inválida, tente novamente: ";
					}
				}while(opcao!=1 and opcao!=2 and opcao!=3 and opcao!=4);
				break;
			case 2:
				recarregar(rec,aux);
				saldo=0;saldo=(rec[5]*100)+(rec[4]*50)+(rec[3]*20)+(rec[2]*10)+(rec[1]*5)+(rec[0]*2);
				system("pause");
				system("cls");
				opcoes();
				do
				{
					cout<<"Digite a opção desejada: ";cin>>opcao;
					if(opcao!=1 and opcao!=2 and opcao!=3 and opcao!=4)
					{
						cout<<"Opção inválida, tente novamente: ";
					}
				}while(opcao!=1 and opcao!=2 and opcao!=3 and opcao!=4);				
				break;
			case 4:
				relatorio(rec,aux,saldo);
				system("pause");
				system("cls");
				opcoes();
				do
				{
					cout<<"Digite a opção desejada: ";cin>>opcao;
					if(opcao!=1 and opcao!=2 and opcao!=3 and opcao!=4)
					{
						cout<<"Opção inválida, tente novamente: ";
					}
				}while(opcao!=1 and opcao!=2 and opcao!=3 and opcao!=4);
				break;
		}
	}while(opcao!=3);
}
