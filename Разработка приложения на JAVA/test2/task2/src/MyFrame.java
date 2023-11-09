import javax.swing.*;

// окно нижнего уровня
public class MyFrame extends JFrame {
    public static MyPanel myPanel1;
    public MyFrame() {
        setTitle("Прмиер");
        setSize(300, 300);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        myPanel1 = new MyPanel();
        getContentPane().add(myPanel1);
    }
}
