<form action="index.php?page=confirmation" method="post">

    <div class="container mt-5">
        <h1 id="apprenants" class="text-center text-danger">Apprenants</h1>
        <div>
            <?php
                $studentsCharacters = getStudentsCharacters();
                $students = getStudents();
                foreach($studentsCharacters as $studentCharacter){
                    echo "<div class='row mt-5 p-2'>
                            <div class='d-flex flex-row justify-content-center align-items-center'>
                                <img src='".$studentCharacter['url_smiley']."' alt='humeur_pic' width='50px' class='me-3'/>
                                <h2 class='ml-3 text-center'>".$studentCharacter['nom_cat']."</h2>
                            </div>
                            <div class='d-flex flex-wrap justify-content-center'>";
                        
                                foreach($students as $student){
                                    echo "<span class='m-5'>
                                            <img src='".$student['url_avatar']."' alt='avatar' width='110px'/>
                                            <div class='d-flex flex-row justify-content-between'>
                                                <input type='radio' name='votes[".$studentCharacter['id_cat']."]' value='".$student['id_cand']."' style='height:20px; width:30px;'>
                                                <h2 class='fs-4'>".$student['prenom']."</h2>
                                            </div>
                                        </span>";
                                }

                    echo "</div>
                    </div>";
                }
            ?>
        </div>
    </div>
    <hr size="10" class="container"/>
    <div class="container mt-5">
        <h1 id="formateurs" class="text-center text-danger">Intervenants</h1>
        <?php
            $teachersCharacters = getTeachersCharacters();
            $teachers = getTeachers();

            foreach($teachersCharacters as $teacherCharacter){
                echo "<div class='row mt-5 p-2'>
                        <div class='d-flex flex-row justify-content-center'>
                            <img src='".$teacherCharacter['url_smiley']."' alt='humeur_pic' width='50px' class='me-3'/>
                            <h2 class='ml-3 text-center'>".$teacherCharacter['nom_cat']."</h2>
                        </div>
                <div class='d-flex flex-wrap justify-content-center'>";
                    foreach($teachers as $teacher){
                        echo "<span class='m-5 d-flex flex-column justify-content-center'>
                                <img src='".$teacher['url_avatar']."' alt='avatar' width='110px'/>
                                <div class='d-flex flex-row justify-content-between'>
                                    <input type='radio' name='votes[".$teacherCharacter['id_cat']."]' value='".$teacher['id_cand']."' style='height:30px; width:20px;>
                                    <h2 class='fs-4'>".$teacher['prenom']."</h2>
                                </div></span>";
                    }   
                echo "</div></div>"; 
            }
        ?>
    </div>    
    

    <div class="container">
        <div class="row m-5 inscription">
            <div class="col-4">
            </div>
            <div class="col-4 d-flex">
                <input type="email" name="candidat_email" placeholder="entrez votre email" class="nomprenom" required/>
                <button type="submit" class="btn_inscription">VOTER</button>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
</form>

<section class="d-flex justify-content-end">
    <a href="#header" class="arrow_ancre">
        <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="#000000" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
        <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
        </svg></i>
    </a>
</section>