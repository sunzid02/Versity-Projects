#include <iostream>

using namespace std;

int main(){
    int mark;
    cout << "What mark did you get in the test?" << endl;
    cin >> mark;

    if(mark >= 90)
    {
            cout << "You got an A*" << endl;
            cout << "You Passed!" << endl;
    }
    else if(mark >= 80)
    {
            cout << "You got an A" << endl;
            cout << "You Passed!" << endl;
    }
    else if(mark >= 70)
    {
            cout << "You got an B" << endl;
            cout << "You Passed!" << endl;
    }
    else if(mark >= 60)
    {
            cout << "You got an C" << endl;
            cout << "You Passed!" << endl;
    }
    else if(mark >= 50)
    {
            cout << "You got an D" << endl;
            cout << "You Failed!" << endl;
    }
    else if(mark >= 40)
    {
            cout << "You got an E" << endl;
            cout << "You Failed!" << endl;
    }
    else
    {
            cout << "You got an U" << endl;
            cout << "You Failed!" << endl;
    }

    return 0;
}
