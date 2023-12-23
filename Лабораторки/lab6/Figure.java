// Абстрактный класс Figure, который реализует интерфейсы
public abstract class Figure implements Colorful, AreaCalculable {
    private String color;

    public Figure(String color) {
        this.color = color;
    }

    @Override
    public String getColor() {
        return color;
    }
}