#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"Portuguese");
	float peso, altura,imc,somapeso=0,somaaltura=0;
	int cont=0,magro=0,obeso=0;
	char resp;
	
	do
	{
		cout<<"Digite o peso (kg): "; cin>>peso;
		cout<<"Digite a altura (m): ";cin>>altura;
		imc=peso/(altura*altura);
		cout<<"O IMC �: "<<imc<<endl;
		
		if (imc<=17)
		{
			cout<<"Muito abaixo do peso\n";
			magro++;
		}
			else if (imc<=18.5)
			{
				cout<<"Abaixo do peso\n";
				magro++;
			}
				else if (imc<=25)
				{
					cout<<"Peso normal\n";
				}
					else if (imc<=30)
					{
						cout<<"Acima do peso\n";
					}
						else if (imc<=35)
						{
							cout<<"Obesidade I";
							obeso++;
						}
							else if (imc<=40)
							{
								cout<<"Obesidade II (severa)";
								obeso++;
							}
								else
								{
									cout<<"Obesidade III (m�rbida)";
									obeso++;
								}
		cont++;
		somapeso+=peso;	   // usar o += � a mesma coisa que usar somapeso=somapeso+altura
		somaaltura+=altura; // usar o += � a mesma coisa que usar somaaltura=somaaltura+altura
		
		do
		{
			cout<<"Deseja continuar? (S/N)"; cin>>resp;	
			if (resp!='S' and resp!='s' and resp!='N' and resp!='n')
			cout<<"Resposta inv�lida! Digite S ou N."<<endl;
		}while (resp!='S' and resp!='s' and resp!='N' and resp!='n');
		
	}while (resp=='S' or resp=='s');
	
	cout<<"N�mero de participantes da pesquisa: "<<cont<<endl;
	cout<<"Percentual de pessoas abaixo do peso: "<<magro*100/cont<<"%"<<endl;
	cout<<"Percentual de pessoas obesas: "<<obeso*100/cont<<"%"<<endl;
	cout<<"Peso M�dio: "<<somapeso/cont<<endl;
	cout<<"Altura M�dia: "<<somaaltura/cont<<endl;
	
}
