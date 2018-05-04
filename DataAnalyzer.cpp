#include <iostream>
#include <fstream>
#include <map>
#include <vector>
#include <algorithm>

using namespace std;

const int MAXN = 1000*1000 + 1000;
map <string, int> mp;
int cnt[MAXN];
string words[MAXN];
vector < pair <int, string> > ans;

int32_t main()
{
	ifstream fin("Keywords.txt");
	ofstream fout("Analyzed.txt");
	string s;
	int num = 0;
	int cnt_tot = 0;
	while (getline(fin, s))
	{
	    //cerr << s << endl;
		if (mp.find(s) == mp.end())
        {
            words[num] = s;
			mp[s] = num++;
        }
		cnt_tot++;
		cnt[mp[s]]++;
	}
	//for (int i = 0; i < 3; i++)
    //    cerr << cnt[i] << ' ';
    // cerr << cnt_tot << endl;
    for (int i = 0; i < num; i++)
    {
        pair <int, string> mypair;
        mypair.first = cnt[i] * 100 / cnt_tot;
        mypair.second = words[i];
        ans.push_back(mypair);
    }
    sort(ans.begin(), ans.end());
    for (int i = num - 1; i >= 0; i--)
        fout << ans[i].second << ' ' << ans[i].first << " %" << endl;
}
