#include <iostream>
#include <fstream>

using namespace std;

string s1 = "'";
char c = s1[0];

int32_t main()
{
    ifstream fin("WebInput.txt");
    string s;
    getline(fin, s);
    for (int i = 0; i < s.size(); i++)
        if (!(((s[i] <= 'z' && s[i] >= 'a') || (s[i] <= 'Z' && s[i] >= 'A')) || (s[i] <= '9' && s[i] >= '0')) && s[i] != c)
            s[i] = ' ';
    ofstream fout("WebInput.txt");
    fout << s << endl;
}
