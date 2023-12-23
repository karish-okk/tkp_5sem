/**
 * Класс CollegeStudent представляет производный класс студентов, конкретно студентов колледжа.
 */
class CollegeStudent extends Student {
    private String major; // Специальность студента

    /**
     * Создает нового студента колледжа с указанным именем и специальностью.
     *
     * @param name  Имя студента.
     * @param major Специальность студента.
     */
    public CollegeStudent(String name, String major) {
        super(name);
        this.major = major;
    }

    /**
     * Получить специальность студента колледжа.
     *
     * @return Специальность студента.
     */
    public String getMajor() {
        return major;
    }
}