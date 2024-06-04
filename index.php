<?php

require 'controller/mainController.php';

switch ($_GET['page']){
    case 'home': 
        homeDisplay();
        break ;
    case 'votepage':
        break ;
    case 'board' :
        break ;
    case 'error' :
        break ;
    case 'results' :
        break ;

    default : throw new Exception('Paramètre invalide');
}

?>