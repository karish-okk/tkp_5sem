// Подкласс, который наследует суперкласс Calculator и реализует интерфейсы
class AdvancedCalculator extends Calculator implements CalculatorResult, DisplayResult {

    public AdvancedCalculator() {
        super(); // Вызываем конструктор суперкласса
    }

    @Override
    public double calculateResult(double area1, double area2) {
        // В данном случае, реализуем сложение площадей фигур
        return area1 + area2;
    }

    @Override
    public void displayResult(double result) {
        System.out.println("Заголовок результата:");
        System.out.println("Результат операции: " + result);
    }
}