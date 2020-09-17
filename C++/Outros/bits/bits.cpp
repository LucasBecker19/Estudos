#include<iostream>
using namespace std;
main ()
{
	setlocale(LC_ALL,"Portuguese");
	
	int divisor=128,resultado=0,bit[8];
	
	for(int i=0;i<8;i++){
		cout<<"\nDigite o "<<i+1<<"º bit: ";
		cin>>bit[i];
		
		if(bit[i]==1){
			resultado += divisor;
		}
		
		divisor /= 2;
	}
	
	cout<<"Bits: ";
	
	for(int i=0;i<8;i++){
		cout<<bit[i];
	}
	
	cout<<"\nResultado: "<<resultado;
}
