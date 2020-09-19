/*O cálculo do IMC (Índice de Massa Corpórea) é dada pela fórmula (peso / altura²), 
onde o peso deve ser lido em quilogramas e a altura em metros.

Desenvolva dois subprogramas:

1- Uma função para calcular o IMC retornando um float correspondente tendo como parâmetros o peso 
e a altura;

2- Um procedimento void que deve apresentar a mensagem correspondente e que recebe como parâmetro 
o valor do IMC.

-----------
A tabela do IMC é a seguinte: (imagem)
-----------

Para testar os seus subprogramas, você pode fazer um programa (main) que leia os dados de entrada 
e na sequência apresente os resultados.

Ex.: cout<<"O IMC é " << calcula_imc(peso,altura) << " e se encontra com " << msg_imc(imc);*/


#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"Portuguese");
	float peso,altura,imc;
	
	//cout digite o peso
	//cin peso
	//cout digite altura
	//cin altura
	
	imc = calcula_imc(peso,altura);
	
	msg_imc(imc);
}

float calcula_imc(float peso, float altura){
	float resultado = 0;
	
	//...
	
	return resultado;
}

void msg_imc(float imc){
	// if (imc<16)
	//cout ... magreza leve

	//else if (imc<17)
	//cout djfisdjf
}
