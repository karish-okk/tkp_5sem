/**
 * Класс Schoolboy представляет производный класс студентов, конкретно школьников.
 */
class Schoolboy extends Student {
    private int grade; // Класс школьника

    /**
     * Создает нового школьника с указанным именем и классом.
     *
     * @param name  Имя школьника.
     * @param grade Класс школьника.
     */
    public Schoolboy(String name, int grade) {
        super(name);
        this.grade = grade;
    }

    /**
     * Получить класс школьника.
     *
     * @return Класс школьника.
     */
    public int getGrade() {
        return grade;
    }
}
