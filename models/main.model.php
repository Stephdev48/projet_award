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

function insertVotes(){
    // $query_insertvotes = $GLOBALS["pdo"]->query("INSERT INTO vote (id_cand, id_cat, email) VALUES ('$_POST['']', '$_POST[''], $_POST['candidat_email']) WHERE ;");
    $insertvotes = $GLOBALS["pdo"]->prepare($query_insertvotes);
    $insertvotes->execute();
    return true;
}

    // $ajout_id_cat = ("INSERT INTO cat_fav (id_fav, id_cat) VALUES (:id_favori, :cat);");
    // $arrayParam1 = array(':id_favori'=>$last_id_fav, ':cat'=>$cat);
    // $result_id_fav = $pdo->prepare($ajout_id_cat);
    // $result_id_fav->execute($arrayParam1);