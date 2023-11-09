import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

// обработчик события реализован в отдельном классе
public class MyAction implements ActionListener {
    private JTextField textField;

    public MyAction(JTextField textField) {
        this.textField = textField;
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        //this.textField.setText("Это обработчик события MyAction");
        System.out.println("Пример обработчика события");

        String oldName = MyFrame.myPanel1.oldn.getText();
        String newName = MyFrame.myPanel1.newn.getText();
        int is_changed = Logic.changeName(newName, oldName);
        if(is_changed == 1){
            JLabel user_found = new JLabel("User has been changed");
            MyFrame.myPanel1.add(user_found);
        }else{
            JLabel user_not_found = new JLabel("User Does Not Exists.");
            MyFrame.myPanel1.add(user_not_found);
        }
    }
}
