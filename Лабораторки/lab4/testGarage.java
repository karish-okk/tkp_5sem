public class testGarage {
    public static void main(String[] args) {
        GarageCar myGarage = new GarageCar(); // создаем новый гараж
        Car myCar1 = new Car("Ford", 200, "aaa000", "Mustang", 2, false); // создаем легковую машину
        myGarage.addCar(myCar1); // добавляем ее в гараж
        myGarage.addCar(new Car("LADA", 140, "bbb010", "Kalina", 4, false));// добавляем еще одну машину
        Truck myTruck = new Truck("Dove", 160, "ccc100", "DTS", 700, true);// создаем грузовик
        myGarage.addCar(myTruck); // добавляем его в гараж
        myGarage.printGarage(); // выводи на экран содержимое гаража
        if (myGarage.findCar(myCar1)) { // ищем машину
            System.out.println("Да");
        } else {
            System.out.println("Нет");
        }
        //проверка работы метода удаления машины из гаража
        myGarage.removeCar(myCar1);
        if (myGarage.findCar(myCar1)) { // ищем машину
            System.out.println("Да");
        } else {
            System.out.println("Нет");
        }
    }
}