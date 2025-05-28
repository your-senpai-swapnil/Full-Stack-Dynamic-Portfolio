#include <bits/stdc++.h>
using namespace std;

#define ll                  long long
#define ld                  long double
#define ull                 unsigned long long
#define nl                  cout << "\n";
#define case                cout << "Case " << case_number << ": "; case_number++;
#define fast                ios_base::sync_with_stdio(false);cin.tie(NULL);cout.tie(NULL);
#define PI                  (acos(-1))

#define arr(a,n)            for(ll i =0; i < n; i++) cin >> a[i];
#define arrab(arr,a,b)      for(ll i =a; i <= b ;i++) cin >> arr[i];
#define vec(v)              for(auto &i:v) cin >> i;
#define tot(a)              a.begin(),a.end()
#define srt(a)              sort(a.begin(), a.end());
#define dsrt(a)             sort(a.rbegin(), a.rend());

ll gcd(ll a, ll b){ return (__gcd(a,b));}
ll lcm(ll a, ll b){ return (abs(a*b)/gcd(a,b));}

void solve()
{
    cout << "Shefat";nl;

    for(int i =1 ; i <= 10;i++){
        cout << i;nl;
    }
    string s;cin >> s;
    cout << s;nl;

}


int main()
{
    solve();
}
