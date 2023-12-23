import
javax.swing.*
;
public class hello {
    public static void main(String s[]) {
        JFrame frame = new JFrame("FrameDemo");// создаем окно с заголовком FrameDemo 
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);//делаем базовым действием при 
        //закрытие окна выход из приложения, иначе окно закроется, а программа в памяти останется 
        frame.setSize(175,100);//задаем размер окна
        frame.setVisible(true);//делаем его видимым
    }
} 
