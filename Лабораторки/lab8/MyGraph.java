import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class MyGraph extends JFrame implements ActionListener {
    private JMyPanel myPanel = new JMyPanel();

    public static void main(String[] args) {
        new MyGraph("Лабораторная работа №9");
    }

    public MyGraph(String s) {
        super(s);
        JMenuBar menu = new JMenuBar();
        JMenu first = new JMenu("Фигуры");
        JMenu second = new JMenu("Фамилия");
        JMenuItem imya = new JMenuItem("Алюбаева");
        menu.add(first);
        menu.add(second);
        second.add(imya);
        imya.addActionListener(this);
        add(menu, BorderLayout.NORTH);
        JMenuItem[] figs = new JMenuItem[5];
        for (int i = 0; i < 5; i++) {
            figs[i] = new JMenuItem(JMyPanel.Figure.values()[i].toString());
            figs[i].addActionListener(this);
            first.add(figs[i]);
        }
        Dimension dim = new Dimension(500, 500);
        setMinimumSize(dim);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        add(myPanel, BorderLayout.CENTER);
        pack();
        setVisible(true);
    }

    public void actionPerformed(ActionEvent e) {
        myPanel.ris(e.getActionCommand());
    }
}
