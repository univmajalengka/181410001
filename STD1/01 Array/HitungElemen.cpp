#include<iostream>
using namespace std;


void garis(){
	cout<<"\n============================================ \n";
}

//Fungsi untuk proses input array
void InputArray(int A[],int N)	{
	for (int C=0; C<N; C++)	{
		cout<<"Masukkan nilai A["<<C<<"]:";
		cin>>A[C];
	}
}

//Fungsi untuk menghitung jumlah (sum) dari semua elemen array
long Jumlah(int A[], int N)	{
	long jml = 0;
	//Jumlahkan semua elemen array
	for (int C=0; C<N; C++)	{
		jml +=A[C];
	}
	return jml;
}

int main()	{
	int X[100];			//maksimal 100 elemen
	int BanyakElemen;
	long HASIL;
	cout<<"====== Apk Hitung Jumlah elemen array ====== \n";
	cout<<"Masukkan banyaknya elemen yang diinginkan :  ";
	cin>>BanyakElemen;
	garis();
	

	InputArray(X, BanyakElemen);
	garis();
	HASIL = Jumlah(X, BanyakElemen);
	cout<<"Jumlah elemen array =  "<<HASIL;
	garis();

	return 0;
}
