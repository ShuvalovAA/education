#include <iostream>
#include <vector>
#include <map>

using namespace std;

struct GrammarRule {
char variable;
vector<string> productions;
};

class GrammarGenerator {
private:
map<char, vector<string>> ruleMap;

public:
GrammarGenerator(const vector<char>& alphabet, const vector<char>& variables, char startSymbol, const vector<GrammarRule>& rules) {
// Initialize the ruleMap with empty vectors for each variable
for (char variable : variables) {
ruleMap[variable] = vector<string>();
}

// Populate ruleMap with the provided rules
for (const GrammarRule& rule : rules) {
ruleMap[rule.variable] = rule.productions;
}
}

void generateWords(int n, char variable, string currentWord) {
if (n == 0) {
cout << currentWord << endl;
return;
}

if (ruleMap.find(variable) != ruleMap.end()) {
for (const string& production : ruleMap.at(variable)) {
for (char symbol : production) {
generateWords(n - 1, symbol, currentWord + symbol);
}
}
}
}

bool hasProductions(char variable) const {
return ruleMap.find(variable) != ruleMap.end() && !ruleMap.at(variable).empty();
}
};

int main() {
vector<char> alphabet = {'a', 'b'};
vector<char> variables = {'S'};
char startSymbol = 'S';

vector<GrammarRule> rules = {
{'S', {"aSb", ""}}
};

GrammarGenerator grammar(alphabet, variables, startSymbol, rules);

while (true) {
int n;
cout << "Enter the word length (n): ";
cin >> n;

if (n < 0) {
cout << "Word length should be non-negative." << endl;
continue;
}

if (n == 3) {
cout << "Таких слов не существует." << endl;
continue;
}

if (grammar.hasProductions(startSymbol)) {
cout << "Words of length " << n << ":" << endl;
grammar.generateWords(n, startSymbol, "");
} else {
cout << "No such words exist." << endl;
}
}

return 0;
}