<?php

function getStudents(){
    $students = array(
        array(
            'id' => 1,
            'name' => 'Noé',
            'avatar' => 'public/images/Apprenants/Noé.png',
        ),
        array(
            'id' => 2,
            'name' => 'Stéphane',
            'avatar' => 'public/images/Apprenants/stephane.png',
        ),
        array(
            'id' => 3,
            'name' => 'Vincent',
            'avatar' => 'public/images/Apprenants/vincent.png',
        ),
        array(
            'id' => 4,
            'name' => 'Martin',
            'avatar' => 'public/images/Apprenants/martin.png',
        ),
        array(
            'id' => 5,
            'name' => 'Killian',
            'avatar' => 'public/images/Apprenants/kilian.png',
        ),
        array(
            'id' => 6,
            'name' => 'Cyril',
            'avatar' => 'public/images/Apprenants/cyril.png',
        ),
        array(
            'id' => 7,
            'name' => 'Christophe',
            'avatar' => 'public/images/Apprenants/Christophe.png',
        ),
        array(
            'id' => 8,
            'name' => 'Barnabé',
            'avatar' => 'public/images/Apprenants/barnabe.png',
        ),
        array(
            'id' => 9,
            'name' => 'Annaelle',
            'avatar' => 'public/images/Apprenants/annaelle.png',
        ),
        array(
            'id' => 10,
            'name' => 'Agustin',
            'avatar' => 'public/images/Apprenants/agustin.png',
        ),
    );
    return $students;
}

function getTeachers(){
    $teachers = array(
        array(
            'id' => 1,
            'name' => 'Cedric',
            'avatar' => 'public/images/Formateurs/cedric.png',
        ),
        array(
            'id' => 2,
            'name' => 'Christophe',
            'avatar' => 'public/images/Formateurs/Christophe.png',
        ),
        array(
            'id' => 3,
            'name' => 'Laetitia',
            'avatar' => 'public/images/Formateurs/laetitia.png',
        ),
        array(
            'id' => 4,
            'name' => 'Luc',
            'avatar' => 'public/images/Formateurs/luc.png',
        ),
        array(
            'id' => 5,
            'name' => 'Tony',
            'avatar' => 'public/images/Formateurs/tony.png',
        ),

    );
    return $teachers;

}

function getStudentsCaracters(){
    $studentsCaracters = array(
        array(
            'id' => 1,
            'caracter' => 'John',
            
        ),
        array(
            'id' => 2,
            'caracter' => 'Jane',
            
        ),
        array(
            'id' => 3,
            'caracter' => 'Jack',
            
        ),
        array(
            'id' => 4,
            'caracter' => 'Jill',
            
        ),
        array(
            'id' => 5,
            'caracter' => 'Joe',
            
        ),
        array(
            'id' => 6,
            'caracter' => 'Jill',
            
        ),
        array(
            'id' => 7,
            'caracter' => 'Jill',
            
        ),
        array(
            'id' => 8,
            'caracter' => 'Joe',
        ),
        
    );
    
    return $studentsCaracters;
    
}

function getTeachersCaracters(){
    $teachersCaracters = array(
        array(
            'id' => 1,
            'caracter' => 'John',
            
        ),
        array(
            'id' => 2,
            'caracter' => 'Jane',
            
        ),
        array(
            'id' => 3,
            'caracter' => 'Jack',
            
        ),
    );
    
    return $teachersCaracters;
}

?>