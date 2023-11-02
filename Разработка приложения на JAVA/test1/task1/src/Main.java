//import java.util.ArrayList;
//import java.util.List;
//import java.util.Scanner;
//
//public class Main {
//
//    public static class User {
//        private String name;
//        private String password;
//        public User(String name, String password) {
//            this.name = name;
//            this.password = password;
//        }
//    }
//
//    public static void main(String[] args) {
//        List USERS = new ArrayList<String>();
//        System.out.println("USER REGISTRATION\n");
//        System.out.println("Enter name:");
//        Scanner in = new Scanner(System.in);
//        String name = in.nextLine();
//        System.out.println("Enter user password");
//        String password = in.nextLine();
//
//        User creatingUser = new User(name=name, password=password);
//        USERS.add(creatingUser);
//        System.out.println(USERS.toString());
//        }
//    }

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {

    public static class User {
        private String name;
        private String password;
        public User(String name, String password) {
            this.name = name;
            this.password = password;
        }
    }

    public static void main(String[] args) {
        List USERS = new ArrayList<String>();
        System.out.println("USER REGISTRATION\n");
        System.out.println("Enter name:");
        Scanner in = new Scanner(System.in);
        String name = in.nextLine();
        System.out.println("Enter user password");
        String password = in.nextLine();

        User creatingUser = new User(name=name, password=password);
        USERS.add(creatingUser);

        Boolean NOT_AUTH = true;
        //authorization

        while(NOT_AUTH) {
            System.out.println("USER AUTHORIZATION\n");
            System.out.println("Enter name:");
            in = new Scanner(System.in);
            name = in.nextLine();
            System.out.println("Enter user password");
            password = in.nextLine();

            for (int x = 0; x < USERS.size(); x++) {
                User searchUser = (User) USERS.get(x);
                Boolean isNeedUser = searchUser.name.equals(name);
                if (isNeedUser) {
                    Boolean isNeedUserPassword = searchUser.password.equals(password);
                    if (isNeedUserPassword) {
                        NOT_AUTH = false;
                        System.out.println("Welcome");
                    } else {
                        System.out.println("name or password not valid. Try again");
                        continue;
                    }
                }
            }
        }


    }
}
