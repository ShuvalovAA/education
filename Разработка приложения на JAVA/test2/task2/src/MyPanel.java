import javax.swing.*;

public class MyPanel extends JPanel {
    private JTextField jTextField;
    public static JTextField oldn;
    public static JTextField newn;

    public MyPanel() {
        JLabel label_name = new JLabel("Никнейм игрока");
        add(label_name);
        oldn = new JTextField("Введите старый ник нейм", 50);
        add(oldn);

        JLabel new_label_name = new JLabel("Новый никнейм игрока");
        add(new_label_name);
        newn = new JTextField("Введите новый ник нейм", 50);
        add(newn);

        JButton jb2 = new JButton("Изменить");
        add(jb2);


// регистрация обработчика
        MyAction myAction = new MyAction(jTextField);
        jb2.addActionListener(myAction);

    }
}