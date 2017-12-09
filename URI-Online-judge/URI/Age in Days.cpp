#include<iostream>
#include<cstdio>
using namespace std;

int main(){

    int day , year , u , month , days;
    cin>>day;
    year = day/365;
    u = day%365;
    month = u/30;
    days = u % 30;
    /*printf("%d ano(s)\n",year);
    printf("%d mes(es)\n",month);
    printf("%d dia(s)\n",days);*/
    printf("%d year\n",year);
    printf("%d month\n",month);
    printf("%d days\n",days);


return 0;
}
