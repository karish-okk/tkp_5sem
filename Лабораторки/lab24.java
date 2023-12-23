public class lab24 {
    public static void main(String[] args) {
        int[][] array = {{1, 3, 6}, {3, 1, 6}, {6, 9, 4}};
        int[] summs = new int[3];
        for (int i = 0; i < 3; i++) {
            int temp = 0;
            for (int j = 0; j < 3; j++) {
                temp += array[i][j];
            }
            summs[i] = temp;
        }

        for (int i = 0; i < 3 - 1; i++) {
            for (int j = i + 1; j < 3; j++) {
                if (summs[i] == summs[j]) {
                    System.out.println("Строки " + i + " и " + j + " имеют одинаковую сумму элементов: " + summs[i]);
                }
            }
        }
    }
}
