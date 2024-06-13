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
     case 'results':
        resultsDisplay();
        break ;
    case 'confirmation':
        confirmationDisplay();
        break ;
    case 'admin':
        adminDisplay();
        break ;
    case 'togglevote':
        toggleVote($_GET['statut'], $_GET['email']);
        break;

    default: 
        throw new Exception ('Paramètre invalide !');
}
