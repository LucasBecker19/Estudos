/*O c�lculo do IMC (�ndice de Massa Corp�rea) � dada pela f�rmula (peso / altura�), 
onde o peso deve ser lido em quilogramas e a altura em metros.

Desenvolva dois subprogramas:

1- Uma fun��o para calcular o IMC retornando um float correspondente tendo como par�metros o peso 
e a altura;

2- Um procedimento void que deve apresentar a mensagem correspondente e que recebe como par�metro 
o valor do IMC.

-----------
A tabela do IMC � a seguinte: (imagem)
-----------

Para testar os seus subprogramas, voc� pode fazer um programa (main) que leia os dados de entrada 
e na sequ�ncia apresente os resultados.

Ex.: cout<<"O IMC � " << calcula_imc(peso,altura) << " e se encontra com " << msg_imc(imc);*/


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
