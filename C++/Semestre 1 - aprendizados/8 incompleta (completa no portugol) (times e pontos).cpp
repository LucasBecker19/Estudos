#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"Portuguese");
	int maiorpontuacao=0,pontos=0,vitorias=0,derrotas=0,empates=0;
	string melhortime="",time;
	
	
	pontos=vitorias*3+empates;
	if (pontos>maiorpontuacao)
	{
		maiorpontuacao=pontos;
		melhortime=time;
		vitoriasmaior=vitorias;
		empatesmaior=empates;
		derrotasmaior=derrotas;
	}
	aproveitamento=maiorpontuacao*100/qtidadejogos*3;
	
	
}
