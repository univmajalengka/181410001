//Tugas STD2 - Andi Alfian
//Contoh inisialisasi array berdimensi tiga
#include<iostream>
#include<conio.h>
using namespace std;
int main(){
	//Pendefinisian array berdimensi tiga
	//dan pemberian nilai awal
	int huruf[2][8][8]=
	{
		{
			{0,1,1,1,1,1,0,0},
			{0,1,0,0,0,1,0,0},
			{0,1,0,0,0,1,0,0},
			{1,1,1,1,1,1,1,0},
			{1,1,0,0,0,0,1,0},
			{1,1,0,0,0,0,1,0},
			{1,1,0,0,0,0,1,0},
			{0,0,0,0,0,0,0,0}
		},
		{
			{1,1,1,1,1,1,0,0},
			{1,1,0,0,0,1,0,0},
			{1,1,0,0,0,1,0,0},
			{1,1,1,1,1,1,1,0},
			{1,1,0,0,0,0,1,0},
			{1,1,0,0,0,0,1,0},
			{1,1,1,1,1,1,1,0},
			{0,0,0,0,0,0,0,0}
		}
	};
	int i,j,k;
	for (i=0; i<2; i++)
	{
		for(j=0; j<8; j++)
		{
			for(k=0; k<8; k++)
				if(huruf[i][j][k]==1)
					cout<<'\xDB';
				else
					cout<<'\x20';
			cout<<endl;
		}
		cout<<endl;
	}
}
