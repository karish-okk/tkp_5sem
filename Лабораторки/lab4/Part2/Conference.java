import java.util.ArrayList;

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
