#include <iostream>
#include <algorithm>
#include <cstdlib>
#include <iomanip>
#include <cmath>
#include <fstream>
#include <ctime>

using namespace std;

int give_random_number(int s, int e)
{
    int random_num = rand() % (e - s) + s;
    return random_num;
}

int32_t main()
{
    srand(time(0));
    ofstream fout("RandomClientNumber.txt");
    string ans;
    //cout << give_random_number(0, 10) << endl;
    //for (int i = 0; i < 8; i++)
     //   ans += (char)('a' + give_random_number(0, 26));
    for (int i = 0; i < 8; i++)
        ans += (char)('0' + give_random_number(0, 9));
    fout << ans;
    return 0;
}
