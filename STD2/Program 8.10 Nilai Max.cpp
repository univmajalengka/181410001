//Andi Alfian
//bilmaks.cpp
//Memperoleh bilangan terbesar yang ada pada array
#include<iostream>
#include<ctime>
#include<cmath>
#include<cstdlib>
using namespace std;

int main(){
	system("cls");
	const int MAKS = 10;
	int data[MAKS];
	int maks;
	
	//memperoleh data secara acak
	rand();
	for(int i=0; i<MAKS;i++){
		data[i]=rand();
		
	}
	
	//menampilkan data dan mencari data terbesar
	cout<<"DATA : "<<endl;
	cout<<data[0]<<endl;
	maks = data[0]; //Isi dengan data pertama

	for(int i=1; i<MAKS;i++){
		cout<<data[i]<<endl;
		if(data[i]>maks)
			maks=data[i];
	}
		
	cout<<"Data Terbesar = "<<maks<<endl;
	
	return 0;
}
