public class Auto {
    private String firm; // создаем закрытый член нашего класса с названием фирмы автомобиля
    private int maxSpeed; // закрытый член класса, содержащий максимальную скорость
    private String gosNumber; //гос номер, закрытый член класса

    public void setFirm(String firma) { // открытая функция (метод класса) для задания
        firm = firma; // значения фирмы автомобиля
    }

    public void setMaxSpeed(int speed) { // открытая функция (метод класса) для задания
        maxSpeed = speed; // значения максимальной скорости автомобиля
    }

    public void setGosNumber(String number) { // открытая функция (метод класса) для задания
        gosNumber = number; // значения гос номера
    }

    public int getMaxSpeed() { // открытая функция (метод класса) для вывода значения
        return maxSpeed; // максимальной скорости
    }

    public String getFirm() { // открытая функция (метод класса) для вывода значения
        return firm; // заданной фирмы
    }

    public String getGosNumber() { // открытая функция (метод класса) для вывода значения
        return gosNumber; // гос номера
    }


    public Auto() { // конструктор класса (без параметров)
        firm = "Без названия";
        maxSpeed = 0;
        gosNumber = "AAA000-00";
    }

    public Auto(String firma, int speed, String number) { // конструктор класса (с параметрами)
        firm = firma;
        maxSpeed = speed;
        gosNumber = number;
    }
}
