//Andi Alfian
//urutData.cpp
//Contoh untuk mengurut data dengan menggunakan metoda bubble sort
#include<iostream>
#include<iomanip>
using namespace std;

int main(){
	int i,j,tmp,jumdata;
	int data[]={5,100,20,31,77,89,99,20,55,1};
	
	jumdata=sizeof(data)/sizeof(int);
	
	//Menampilkan data
	cout<<"Data semula : "<<endl;
	for(i=0;i<jumdata;i++){
		cout<<setw(4)<<data[i];
		cout<<endl; //pindah baris
	}
	
	//Mengurutkan data
	for(i=0;i<jumdata-1;i++){
		for(j=i+1; j<jumdata;j++){
			if (data[i]>data[j]){
				tmp=data[i];
				data[i]=data[j];
				data[j]=tmp;
			}
		}
	}
	
	//Menampilkan data
	cout<<"Data setelah diurutkan : "<<endl;
	for(i=0;i<jumdata;i++){
		cout<<setw(4)<<data[i];
		cout<<endl; //pindah baris
	}
	
	return 0;
}
