# include<iostream>
# include<unistd.h>
# include<signal.h>

using namespace std;

void sigint_fun(int s){
    cout << "\nChild process: I catched signal... finished..." << endl;
    cout << "\nMain process: I catched signal #2... finished..." << endl;
    exit(0);
}

void sigchld_fun(int s){
    cout << "\nMain process: My child killed" << endl;
    exit(0);
}

void sigkill_fun(int s){
    cout << "\nKILLALL." << endl;
    exit(0);
}

int main(){
    signal(SIGINT, sigint_fun);
    signal(SIGCHLD, sigchld_fun);
    signal(SIGKILL, sigkill_fun);
    cout << "\nMain process: I'm started... PID =\t" << getpid() << endl;
    if(!fork()){
        cout << "\nChild process: I'm started...PID =\t"<< getpid() << endl;
        sleep(30);
        return 0;
    }
    sleep(30);
    cout << "after sleep" << endl;

    return 0;
}
