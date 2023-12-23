import java.util.*;

public class lab3_1 {

    // Напишите программу с методом для отображения текстовой строки в обратном порядке

    public static void main(String[] args) {
        String original = "Привет, мир!"; //исходная строка
        String reversed = ""; //измененная строка

        // Проходим по исходной строке справа налево
        for (int i = original.length() - 1; i >= 0; i--) {
            // К каждому символу из исходной строки добавляем его в начало перевернутой строки
            reversed += original.charAt(i);
        }
        
        // Выводим исходную и перевернутую строки на экран
        System.out.println("Исходная строка: " + original);
        System.out.println("Перевернутая строка: " + reversed);
    }
}
