#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"Portuguese");
	
	int M[3][3], l, c;
	float media;
	
	for (l=0;l<3;l++)
	{
		for (c=0;c<3;c++)
		{
			cout<<"["<<l<<"]["<<c<<"]: ";
			cin>>M[l][c];
		}
	}
	system("cls");
	cout<<"Matriz A      Vetor B"<<endl;
	for (l=0;l<3;l++)
	{
		for (c=0;c<3;c++)
		{
			cout<<M[l][c]<<"  ";
			media+=M[l][c];
		}
	cout<<"     "<<media/3;
	media=0;
	cout<<endl;
	}
	
}
