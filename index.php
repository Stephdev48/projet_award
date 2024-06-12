<?php

require 'controllers/main.controller.php';

switch ($_GET['page']){
    case 'home': 
        homeDisplay();
        break ;
    case 'vote':
        voteDisplay();
        break ;
    case 'board' :
        boardDisplay();
        break ;
     case 'results' :
        resultsDisplay();
        break ;
    default: 
        throw new Exception ('Paramètre invalide !');
}
