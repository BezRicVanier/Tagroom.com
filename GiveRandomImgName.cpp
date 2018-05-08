#include <iostream>
#include <fstream>
#include <cmath>
#include <cstdlib>
#include <time.h>

using namespace std;

int give_rand(int s, int e)
{
    return rand() % (e - s) + s;
}

int32_t main()
{
    ofstream fout("RandomImgName.txt");
    srand(time(0));
    fout << "Img";
    for (int i = 0; i < 8; i++)
        fout << give_rand(0, 9);
    return 0;
}
