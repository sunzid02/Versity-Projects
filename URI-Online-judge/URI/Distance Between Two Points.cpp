#include<iostream>
#include<cstdio>
#include<math.h>
using namespace std;

int main(){

    double x1,y1,x2,y2,r;
    cin>>x1>>y1>>x2>>y2;
    r = ((x2-x1)*(x2-x1))+((y2-y1)*(y2-y1));
    printf("%.4lf\n",pow(r,.5));

return 0;
}
