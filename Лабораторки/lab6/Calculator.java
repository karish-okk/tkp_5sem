import java.util.Scanner;
// Суперкласс для выполнения арифметических операций
class Calculator {
    private Scanner scanner;

    public Calculator() {
        scanner = new Scanner(System.in);
    }

    public void performCalculation(Figure figure1, Figure figure2, String operation) {
        double result = 0.0;
        switch (operation) {
            case "*":
                result = figure1.getArea() * figure2.getArea();
                break;
            case "+":
                result = figure1.getArea() + figure2.getArea();
                break;
            case "-":
                result = figure1.getArea() - figure2.getArea();
                break;
            case "/":
                result = figure1.getArea() / figure2.getArea();
                break;

            default:
                System.out.println("Неизвестная операция");
                return;
        }

        System.out.println("Результат операции: " + result + "\n");
    }
}
