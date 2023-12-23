import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.GradientPaint;
import java.awt.BasicStroke;
import javax.swing.JFrame;
import javax.swing.JPanel;

public class DrawWord extends JFrame {

    private DrawPanel drawPanel;

    public DrawWord() {
        setTitle("Styled Letters");
        setSize(500, 200);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        drawPanel = new DrawPanel();
        add(drawPanel);

        setLocationRelativeTo(null);
    }

    public static void main(String[] args) {
        DrawWord app = new DrawWord();
        app.setVisible(true);
    }
}

class DrawPanel extends JPanel {

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);

        Graphics2D g2d = (Graphics2D) g;

        // Рисуем букву А
        drawGradientA(g2d, 20, 50);

        // Рисуем букву Л
        drawDashedThinPinkL(g2d, 80, 50);

        // Рисуем букву Ю
        drawThickRedYu(g2d, 150, 50);
        
        // Рисуем букву Б
        drawDashedB(g2d, 220, 50);

        // Рисуем букву А
        drawGradientA(g2d, 290, 50);

        // Рисуем букву Е
        drawDashedThinPurpleE(g2d, 360, 50);

        // Рисуем букву В
        drawThickBlueV(g2d, 440, 50);

        // Рисуем букву А
        drawGradientA(g2d, 510, 50);

    }

    private void drawGradientA(Graphics2D g2d, int x, int y) {
        GradientPaint gradient = new GradientPaint(x, y, Color.RED, x + 50, y, Color.BLUE);
        g2d.setPaint(gradient);
        g2d.setStroke(new BasicStroke(10));
        g2d.setFont(new Font("Arial", Font.BOLD, 40));
        g2d.drawString("А", x, y);
    }

    private void drawDashedB(Graphics2D g2d, int x, int y) {
        g2d.setColor(Color.YELLOW);
        g2d.setStroke(new BasicStroke(8, BasicStroke.CAP_BUTT, BasicStroke.JOIN_BEVEL, 0, new float[]{9}, 0));
        g2d.setFont(new Font("Arial", Font.BOLD, 40));
        g2d.drawString("Б", x, y);
    }

    private void drawThickRedYu(Graphics2D g2d, int x, int y) {
        g2d.setColor(Color.RED);
        g2d.setStroke(new BasicStroke(15));
        g2d.setFont(new Font("Arial", Font.BOLD, 40));
        g2d.drawString("Ю", x, y);
    }

    private void drawDashedThinPurpleE(Graphics2D g2d, int x, int y) {
        g2d.setColor(new Color(128, 0, 128)); // фиолетовый
        g2d.setStroke(new BasicStroke(2, BasicStroke.CAP_BUTT, BasicStroke.JOIN_BEVEL, 0, new float[]{5}, 0));
        g2d.setFont(new Font("Arial", Font.BOLD, 40));
        g2d.drawString("Е", x, y);
    }

    private void drawThickBlueV(Graphics2D g2d, int x, int y) {
        g2d.setColor(Color.BLUE);
        g2d.setStroke(new BasicStroke(12));
        g2d.setFont(new Font("Arial", Font.BOLD, 40));
        g2d.drawString("В", x, y);
    }

    private void drawDashedThinPinkL(Graphics2D g2d, int x, int y) {
        g2d.setColor(new Color(255, 182, 193)); // розовый
        g2d.setStroke(new BasicStroke(2, BasicStroke.CAP_BUTT, BasicStroke.JOIN_BEVEL, 0, new float[]{5}, 0));
        g2d.setFont(new Font("Arial", Font.BOLD, 40));
        g2d.drawString("Л", x, y);
    }
}