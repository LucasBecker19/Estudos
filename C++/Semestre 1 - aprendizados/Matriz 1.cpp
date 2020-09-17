#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"Portuguese");
	
	int M[3][3], l, c, i=0;
	float soma;
	for(l=0;l<3;l++)
	{
		for (c=0;c<3;c++)
		{
			cout<<"["<<l<<"]["<<c<<"] : ";
			cin>>M[l][c];
		}
	}
	
	cout<<"MATRIZ:"<<endl;
	
	for(l=0;l<3;l++)
	{
		for (c=0;c<3;c++)
		{
			cout<<M[l][c]<<"  ";
		}
	cout<<endl;
	}
	
	cout<<"Somatório das linhas: "<<endl;
	for(l=0;l<3;l++)
	{
		for (c=0;c<3;c++)
		{
			soma+=M[l][c];
		}
	
	cout<<soma<<endl;
	soma=0;
	}
		
		
	cout<<"Somatório das colunas: "<<endl;
	for(c=0;c<3;c++)
	{
		for (l=0;l<3;l++)
		{
			soma+=M[l][c];
		}
	
	cout<<soma<<endl;
	soma=0;
	}
	
	cout<<"Somatório da diagonal principal: "<<endl;
	for(l=0;l<3;l++)
	{
		for (c=0;c<3;c++)
		{
			if (l==c)
			soma+=M[l][c];
		}
	}
	cout<<soma<<endl;
}

