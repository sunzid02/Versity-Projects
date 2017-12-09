#include<iostream>
#include<cstdio>
using namespace std;

int main(){

    int a , minn ,sec, hour,hr;
    cin>>a;
    hour = a/60;
    hr = hour/60;
    minn = hour%60;
    sec = a%60;
    printf("%d:%d:%d\n",hr,minn,sec);

return 0;
}
