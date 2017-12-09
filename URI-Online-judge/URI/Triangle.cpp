#include<iostream>
#include<cstdio>
using namespace std;

int main(){
    float A,B,C,d,t;
    cin>>A>>B>>C;
     t = ((A+B)/2) * C;

    if(A<(B+C) && B<(A+C) && C<(A+B))
    {
        printf("Perimetro = %.1f\n",A+B+C);
    }

    else {

        printf("Area = %.1f\n",t);
    }


return 0;
}
