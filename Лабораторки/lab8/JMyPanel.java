import java.awt.*;
import java.awt.geom.Ellipse2D;
import javax.swing.JPanel;

public class JMyPanel extends JPanel {
    public static enum Figure {
        Линия, Круг, Квадрат, Закругленный_квадрат, Очистить, Алюбаева
    };

    private Figure vibor = Figure.Очистить;

    public JMyPanel() {
    }

    public void ris(String s) {
        vibor = Figure.valueOf(s);
        repaint();
    }

    public void paintComponent(Graphics gr) {
        super.paintComponent(gr);
        Graphics2D g = (Graphics2D) gr;
        BasicStroke pen;
        g.setRenderingHint(RenderingHints.KEY_ANTIALIASING,
                RenderingHints.VALUE_ANTIALIAS_ON);
        switch (vibor) {
            case Линия:
                pen = new BasicStroke(20, BasicStroke.CAP_ROUND, BasicStroke.JOIN_ROUND);
                g.setStroke(pen);
                g.setColor(Color.blue);
                g.drawLine(20, 20, 100, 100);
            break;

            case Круг:
                float[] dash = { 10, 30 };
                pen = new BasicStroke(10, BasicStroke.CAP_SQUARE, BasicStroke.JOIN_ROUND, 10, dash, 0);
                g.setStroke(pen);
                g.setColor(Color.red);
                g.setPaint(new GradientPaint(30, 30, Color.red, 50, 50, Color.green, true));
                g.fill(new Ellipse2D.Double(20, 20, 100, 100));
            break;

            case Квадрат:
                float[] dash2 = { 20, 20 };
                pen = new BasicStroke(5, BasicStroke.CAP_SQUARE, BasicStroke.JOIN_BEVEL, 1, dash2, 0);
                g.setStroke(pen);
                g.setColor(Color.magenta);
                g.drawRect(20, 20, 100, 100);
            break;

            case Закругленный_квадрат:
                float[] dash3 = { 20, 20, 2, 20, 2, 20 };
                pen = new BasicStroke(10, BasicStroke.CAP_ROUND, BasicStroke.JOIN_BEVEL, 1, dash3, 0);
                g.setStroke(pen);
                g.setColor(Color.yellow);
                g.drawRoundRect(20, 20, 100, 100, 60, 60);
            break;

            case Очистить: 
                g.clearRect(0, 0, getSize().width, getSize().height);
            break;

            case Алюбаева:
                float[] dash4 = { 10 };
                int margin = 0;

                //А
                pen = new BasicStroke(20, BasicStroke.CAP_ROUND, BasicStroke.JOIN_ROUND);
                g.setStroke(pen);
                g.setPaint(new GradientPaint(30, 30, Color.red, 50, 50, Color.pink, true));
                g.drawLine(20 + margin, 100, 47 + margin, 20);
                g.drawLine(47 + margin, 20, 75 + margin, 100);
                g.drawLine(28 + margin, 75, 65 + margin, 75);
                margin += 90;

                //Л
                pen = new BasicStroke(20, BasicStroke.CAP_SQUARE, BasicStroke.JOIN_MITER, 1, dash4, 0);
                g.setStroke(pen);
                g.setColor(Color.green);
                g.drawLine(20 + margin, 100, 47 + margin, 20);
                g.drawLine(47 + margin, 20, 75 + margin, 100);
                margin += 90;
                
                
                // Ю
                pen = new BasicStroke(10, BasicStroke.CAP_ROUND, BasicStroke.JOIN_MITER, 1, dash4, 0);
                g.setStroke(pen);
                g.setColor(Color.yellow);
                g.drawLine(50 + margin, 60, 20 + margin, 60);
                g.drawLine(20 + margin, 20, 20 + margin, 110);
                g.drawRoundRect(50 + margin, 20, 50, 100, 60, 60);
                margin += 105; 

                // Б
                pen = new BasicStroke(20, BasicStroke.CAP_ROUND, BasicStroke.JOIN_ROUND);
                g.setStroke(pen);
                g.setPaint(new GradientPaint(30, 30, Color.blue, 50, 50, Color.pink, true));
                g.drawLine(20 + margin, 20, 20 + margin, 100);
                g.drawArc(10 + margin, 50, 50, 50, -90,180);
                g.drawLine(20 + margin, 20, 60 + margin, 20);
                margin += 80;

                //А
                pen = new BasicStroke(20, BasicStroke.CAP_ROUND, BasicStroke.JOIN_ROUND);
                g.setStroke(pen);
                g.setPaint(new GradientPaint(30, 30, Color.red, 50, 50, Color.pink, true));
                g.drawLine(20 + margin, 100, 47 + margin, 20);
                g.drawLine(47 + margin, 20, 75 + margin, 100);
                g.drawLine(28 + margin, 75, 65 + margin, 75);
                margin += 110;

                // Е
                pen = new BasicStroke(20, BasicStroke.CAP_ROUND, BasicStroke.JOIN_ROUND);
                g.setStroke(pen);
                g.setColor(Color.orange);
                g.drawLine(margin, 20, margin, 100);
                g.drawLine(margin, 20, margin + 50, 20);
                g.drawLine(margin, 100, margin + 50, 100);
                g.drawLine(margin, 50, margin + 40, 50);
                margin +=90;

                // В
                pen = new BasicStroke(10, BasicStroke.CAP_ROUND, BasicStroke.JOIN_ROUND);
                g.setStroke(pen);
                g.setColor(Color.pink);
                g.drawLine(margin, 20, margin, 100);
                g.drawArc(margin-10, 50, 50, 50, -90,180);
                g.drawArc(margin, 20, 30, 30, -90,180);
                margin +=50;

                //А
                pen = new BasicStroke(20, BasicStroke.CAP_ROUND, BasicStroke.JOIN_ROUND);
                g.setStroke(pen);
                g.setPaint(new GradientPaint(30, 30, Color.red, 50, 50, Color.pink, true));
                g.drawLine(20 + margin, 100, 47 + margin, 20);
                g.drawLine(47 + margin, 20, 75 + margin, 100);
                g.drawLine(28 + margin, 75, 65 + margin, 75);
                margin += 110;
            break;
        }
    }
}