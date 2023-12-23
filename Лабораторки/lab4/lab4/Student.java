import java.util.ArrayList;

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

/**
 * Класс Conference представляет собой класс, который может содержать как школьников, так и студентов колледжа.
 */
class Conference {
    private ArrayList<Student> participants = new ArrayList<>();

    /**
     * Добавить студента (школьника или студента колледжа) на конференцию.
     *
     * @param student Студент, который будет добавлен на конференцию.
     */
    public void addParticipant(Student student) {
        participants.add(student);
    }

    /**
     * Подсчитать количество школьников на конференции.
     *
     * @return Количество школьников на конференции.
     */
    public int countSchoolboys() {
        int count = 0;
        for (Student participant : participants) {
            if (participant instanceof Schoolboy) {
                count++;
            }
        }
        return count;
    }

    /**
     * Подсчитать количество студентов колледжа на конференции.
     *
     * @return Количество студентов колледжа на конференции.
     */
    public int countCollegeStudents() {
        int count = 0;
        for (Student participant : participants) {
            if (participant instanceof CollegeStudent) {
                count++;
            }
        }
        return count;
    }
}
