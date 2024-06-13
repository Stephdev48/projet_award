<?php

include ("models/connect.model.php");

function getStudents(){
    $query_students = $GLOBALS["pdo"]->query("SELECT * FROM candidat AS C INNER JOIN role ON C.id_role = role.id_role WHERE nom_role = 'apprenant'");
    $students = $query_students->fetchAll(PDO::FETCH_ASSOC);
    return $students;
}

function getTeachers(){
    $query_teachers = $GLOBALS["pdo"]->query("SELECT * FROM candidat AS C INNER JOIN role ON C.id_role = role.id_role WHERE nom_role = 'formateur'");
    $teachers = $query_teachers->fetchAll(PDO::FETCH_ASSOC);
    return $teachers;

}

function getStudentsCharacters(){
    $query_studentscharacters = $GLOBALS["pdo"]->query("SELECT * FROM categorie_vote AS C INNER JOIN role AS R ON C.id_role = R.id_role WHERE nom_role = 'apprenant'");
    $studentsCharacters = $query_studentscharacters->fetchAll(PDO::FETCH_ASSOC);
    return $studentsCharacters;
    
}

function getTeachersCharacters(){
    $query_teacherscharacters = $GLOBALS["pdo"]->query("SELECT * FROM categorie_vote AS C INNER JOIN role AS R ON C.id_role = R.id_role WHERE nom_role = 'formateur'");
    $teachersCharacters = $query_teacherscharacters->fetchAll(PDO::FETCH_ASSOC);
    return $teachersCharacters;
}

function checkEmail($email){
    $query_checkemail = $GLOBALS["pdo"]->prepare("SELECT email FROM vote WHERE email = ? LIMIT 1;");
    echo "<pre>";
    var_dump($email['candidat_email']);
    echo "</pre>";
    //$email['candidat_email']="jhgvjghfjfgv@jhvjhvjv.fr";
    $query_checkemail->execute([$email['candidat_email']]);
    $checkemail = $query_checkemail->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    var_dump($checkemail);
    echo "</pre>";
        if(count($checkemail) == 0){
            return true;
        }else{
            return false;
        }
}

function insertVotes($votes){
    foreach($votes['votes'] as $key => $value){
        $query_insertvotes = $GLOBALS["pdo"]->prepare("INSERT INTO vote (id_cand, id_cat, email) VALUES (?, ?, ?)");
        $query_insertvotes->execute([intval($value), intval($key), $votes['candidat_email']]);
    }
}

function getVotes(){
    $query_votes = $GLOBALS["pdo"]->query("SELECT * FROM vote ");
    $votes = $query_votes->fetchAll(PDO::FETCH_ASSOC);
    return $votes;
}
