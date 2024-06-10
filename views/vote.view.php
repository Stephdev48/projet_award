<form action="index.php?page=results" method="post">

    <div class="students">
        <h1>Apprenants</h1>
        <?php
        $studentsCharacters = getStudentsCharacters();
        $students = getStudents();
        $teachersCharacters = getTeachersCharacters();
        $teachers = getTeachers();
        foreach($studentsCharacters as $studentCharacter){
            echo "
            <h2>".$studentCharacter['character']."</h2>";
        
        
        foreach($students as $student){
            echo "
            <input type='radio' name='apprenants_".$studentCharacter['character']."' value='".$student['name']."'>";
        }
        
        }
        ?>
    </div>

    <div class="teachers">
        <h1>Intervenants</h1>
        <?php
        foreach($teachersCharacters as $teacherCharacter){
            echo "
            <h2>".$teacherCharacter['character']."</h2>";

        foreach($teachers as $teacher){
            echo "
            <input type='radio' name='intervenants_".$teacherCharacter['character']."' value='".$teacher['name']."'>";
        }    
        }
        ?>
    </div>    
    

<button type="submit">
    <a href="index.php?page=results">Envoyer</a>
</button>


</form>