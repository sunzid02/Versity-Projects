#include<iostream>
#include<cstdio>
using namespace std;

int main(){
    int X,Y;
    float b = Y;
    cin>>X>>b;

    switch(X)
    {
        case 3:
            printf("Total: R$ %.2f\n",b*5.00);
            break;

            case 1:
            printf("Total: R$ %.2f\n",b*4.00);
            break;

            case 2:
            printf("Total: R$ %.2f\n",b*4.50);
            break;

            case 4:
            printf("Total: R$ %.2f\n",b*2.00);
            break;

            case 5:
            printf("Total: R$ %.2f\n",b*1.50);
            break;

    }

return 0;
}


