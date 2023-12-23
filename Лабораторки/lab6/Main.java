// Главный метод для демонстрации

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        // Создание объектов различных фигур
        Triangle triangle = new Triangle("Красный", 5, 4);
        Square square = new Square("Синий", 3);
        Circle circle = new Circle("Зеленый", 2);

        // Доступ к объектам через объектную переменную суперкласса
        Figure figure1 = triangle;
        Figure figure2 = square;
        Figure figure3 = circle;

        //калькулятор
        Calculator calculator = new Calculator();

        System.out.println("Введите операцию (+, -, *, /): ");
        String operation = new Scanner(System.in).nextLine();

        // Вызов операции
        calculator.performCalculation(triangle, square, operation);

        // Вывод информации о треугольнике
        System.out.println("Площадь треугольника: " + triangle.getArea());
        System.out.println("Цвет треугольника: " + figure1.getColor() + "\n");

        // Вывод информации о квадрате
        System.out.println("Площадь квадрата: " + square.getArea());
        System.out.println("Цвет квадрата: " + figure2.getColor() + "\n");

        // О круге
        System.out.println("Площадь круга: " + circle.getArea());
        System.out.println("Цвет круга: " + figure3.getColor() + "\n");
    }
}
