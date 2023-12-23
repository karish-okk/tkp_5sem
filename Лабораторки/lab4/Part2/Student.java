/**
 * Класс Student представляет базовый класс для студентов.
 */
public class Student {
    private String name; // Имя студента

    /**
     * Создает нового студента с указанным именем.
     *
     * @param name Имя студента.
     */
    public Student(String name) {
        this.name = name;
    }

    /**
     * Получить имя студента.
     *
     * @return Имя студента.
     */
    public String getName() {
        return name;
    }
}