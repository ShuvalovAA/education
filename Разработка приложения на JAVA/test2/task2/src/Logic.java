import javax.swing.*;
import java.util.ArrayList;

public class Logic {
    public static ArrayList<User> users=new ArrayList<>();

    public static int changeName(String newName, String oldName){
        int is_changed = 0;
        for(int i = 0; i< users.size(); i++) {
            if(users.get(i).name == oldName){
                is_changed = updateName(newName, users.get(i));
            }
        }
        if(is_changed == 1){
            return 1;
        }
        return 0;
    }

    private static int updateName(String newName, User user){
        user.name = newName;
        return 1;
    }
}
