/*Fa�a um programa para, inicialmente, gerar uma matriz quadrada (NxN) e na sequ�ncia gerar automaticamente a matriz identidade que composta por 0 (zeros) 
com exce��o da diagonal principal que s�o 1 (uns).
Dica: para gerar a matriz vc precisar� fazer uma entrada para saber o valor de N (ex.: cin>>N). Depois disso vc declara a matriz (ex,: int M [N][N]).
Ex.: Tamanho da Matriz : 3
1   0   0
0   1   0
0   0   1*/

#include<iostream>
using namespace std;

main(){
	setlocale(LC_ALL,"portuguese");
	int n,l=0,c=0,diagonal=0;
	cout<<"Digite a quantidade de linhas e colunas: ";
	cin>>n;
	
	int matriz[n][n];
	
	for(l=0;l<n;l++){ //in�cio do for LINHA
	
		for(c=0;c<n;c++){//in�cio do for COLUNA
			
			if(c==diagonal){
				matriz[l][c]=1;
				cout<<matriz[l][c]<<"   ";
			}
			else{
				matriz[l][c]=0;	
				cout<<matriz[l][c]<<"   ";
			}
			
		}//fim do for COLUNA	
		cout<<"\n";
		diagonal++;
	}//fim do for LINHA
	
	
}
