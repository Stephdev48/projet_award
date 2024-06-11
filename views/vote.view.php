<form action="index.php?page=results" method="post">

    <div class="students">
        <h1>Apprenants</h1>
        <div>
            <?php
                $studentsCharacters = getStudentsCharacters();
                $students = getStudents();
                foreach($studentsCharacters as $studentCharacter){
                    echo "
                    <h2>".$studentCharacter['nom_cat']."</h2>
                    <div class='d-flex flex-wrap'>";
                
                        foreach($students as $student){
                            echo "<span>
                                    <img src='".$student['url_avatar']."' alt='avatar' width='150px'/>
                                    <div class='d-flex flex-row'>
                                        <h2>".$student['prenom']."</h2>
                                        <input type='radio' name='apprenants_".$studentCharacter['nom_cat']."' value='".$student['nom']."'>
                                    </div>
                                </span>";
                        }

                    echo "</div>";
                }
            ?>
        </div>
    </div>

    <div class="teachers">
        <h1>Intervenants</h1>
        <?php
            $teachersCharacters = getTeachersCharacters();
            $teachers = getTeachers();

            foreach($teachersCharacters as $teacherCharacter){
                echo "
                <h2>".$teacherCharacter['nom_cat']."</h2>
                <div class='d-flex flex-wrap'>";
                    foreach($teachers as $teacher){
                        echo "<img src='".$teacher['url_avatar']."' alt='avatar'/>
                        <h2>".$teacher['prenom']."</h2>
                        <input type='radio' name='intervenants_".$teacherCharacter['nom_cat']."' value='".$teacher['nom']."'>";
                    }   
                echo "</div>"; 
            }
        ?>
    </div>    
    

<button type="submit">
    <a href="index.php?page=results">Envoyer</a>
</button>


</form>