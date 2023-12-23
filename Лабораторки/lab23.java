import java.util.*;

public class lab23 {
    public static void main(String[] args) {
        int [][] array = {{2, 5, 0}, {3, 3, 8}, {6, 2, 9}};
        List<String> evenList = new ArrayList<String>(); //создала лист (это список, в котором можно менять длину)
        List<String> oddList = new ArrayList<String>();
        for (int i = 0; i < 3; i++) { //пробегаюсь по двумерному массиву, для этого понадобится цикл в цикле
            for (int j = 0; j < 3; j++) {
                String temp = Integer.toString(array[i][j]); // int в String
                if (array[i][j] % 2 == 0) {
                    evenList.add(temp); //добавление элемента в конец массива.
                }
                else {
                    oddList.add(temp);
                }
            }
        }
        System.out.println("Новый массив из четных чисел: ");
        System.out.println(evenList); //вывод списка с четными числами
        System.out.println("Новый массив из нечетных чисел: ");
        System.out.println(oddList); //вывод списка в нечетными числами
    }

    
}