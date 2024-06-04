<form action="" method="post">

    <div class="students">
        <h1>Apprenants</h1>
        <?php
        $studentsCaracters = getStudentsCaracters();
        $students = getStudents();
        $teachersCaracters = getTeachersCaracters();
        $teachers = getTeachers();
        foreach($studentsCaracters as $studentCaracter){
            echo "
            <h2>".$studentCaracter['caracter']."</h2>";
        
        
        foreach($students as $student){
            echo "
            <input type='radio' name='apprenants_".$studentCaracter['caracter']."' value='".$student['name']."'>";
        }
        
        }
        ?>
    </div>

    <div class="teachers">
        <h1>Intervenants</h1>
        <?php
        foreach($teachersCaracters as $teacherCaracter){
            echo "
            <h2>".$teacherCaracter['caracter']."</h2>";

        foreach($teachers as $teacher){
            echo "
            <input type='radio' name='intervenants_".$teacherCaracter['caracter']."' value='".$teacher['name']."'>";
        }    
        }
        ?>
    </div>    
    
</form>