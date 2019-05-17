
#include<iostream>
using namespace std;

void garis(int n){
	if(n==1)cout<<"\n==================================== \n";
	else if(n==2)cout<<"======= ROOM MABAR SQUAD NaCl======= \n";
	else if(n==3)cout<<"======= NaCl (Salty Mortals) ======= \n";
	else if(n==4)cout<<"========== MATCHING START ========== \n \n";
}

struct player{
	int Username;
}ml[4];

void printplayer(player pl){
	string NaCl[9] = {" ","Rain|G     ","SuggaMing  ","BlacklList ","KakSeto    ",
						"ALEX       ","GM-Moonton ","Zheen      ","DeAngelica "};
	string Tier[9] = {"Legend IV","Mythic 1","Legend V","Legend V",
						"Epic III","Epic II","Epic II","Epic I","Legend V"};
	cout<<"| ["<<pl.Username<<"] | [NaCl] "<<NaCl[pl.Username];
	cout<<" ("<<Tier[pl.Username]<<")\n";
}

int main(){
	garis(2);
	cout<<"| Username : [NaCl]Radhs \n";
	cout<<"| Tier     : Legend IV \n";
	
	garis(1);
	garis(3);
	cout<<"| ID  | MemberName \n";
	cout<<"| [1] | [NaCl] Rain|G \n";
	cout<<"| [2] | [NaCl] SuggaMing \n";
	cout<<"| [3] | [NaCl] BlacklList \n";
	cout<<"| [4] | [NaCl] KakSeto \n";
	cout<<"| [5] | [NaCl] ALEX \n";
	cout<<"| [6] | [NaCl] GM-Moonton \n";
	cout<<"| [7] | [NaCl] Zheen \n";
	cout<<"| [8] | [NaCl] DeAngelica \n";
	
	garis(1);
	cout<<"| Invite Member \n";
	for(int n=0; n<4;n++){
		cout<<"| ID : "; cin>>ml[n].Username;
	}
	
	garis(1);
	garis(4);
	cout<<"| [0] | [NaCl] Radhs       (Legend IV)\n";
	for(int n=0; n<4; n++){
		printplayer(ml[n]);
		
	}
	return 0;
}
