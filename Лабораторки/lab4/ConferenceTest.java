public class ConferenceTest {
    public static void main(String[] args) {
        // Создание экземпляров школьников и студентов
        Schoolboy schoolboy1 = new Schoolboy("Маша", 8);
        Schoolboy schoolboy2 = new Schoolboy("Петя", 7);

        CollegeStudent student1 = new CollegeStudent("Егор", "Программист");
        CollegeStudent student2 = new CollegeStudent("Марина", "Летчик");

        // Создание конференции
        Conference conference = new Conference();

        // добавление участников
        conference.addParticipant(schoolboy1);
        conference.addParticipant(schoolboy2);
        conference.addParticipant(student1);
        conference.addParticipant(student2);

        // Подсчет
        int schoolboyCount = conference.countSchoolboys();
        int collegeStudentCount = conference.countCollegeStudents();

        System.out.println("Школьников: " + schoolboyCount);
        System.out.println("Студентов: " + collegeStudentCount);
    }
}
