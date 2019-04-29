#include <iostream>
using namespace std;

void garis(){    
  cout<<"\n≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
}

void bulan(int p){
   string A[12] = { "Januari","Februari",
"Maret","April","Mei","Juni","Juli",
"Agustus","September","Oktober",
"November","Desember"};
  cout<<"Bulan ke-"<<p<<" adalah "<<A[p-1];
}

int main(){
   int n;
   cout<<"Bulan ke : "; cin>>n;
   garis();
   bulan(n);
   garis();
   return 0;
}
