<?php

require 'models/main.model.php';

function homeDisplay() {
    require 'views/header.view.php';
    require 'views/home.view.php';
    require 'views/footer.view.php';
}

function voteDisplay() {
    require 'views/header.view.php';
    require 'views/vote.view.php';
    require 'views/footer.view.php';
}

function boardDisplay() {
    require 'views/header.view.php';
    require 'views/board.view.php';
    require 'views/footer.view.php';
}

function resultsDisplay() {
    require 'views/header_resultats.view.php';
    require 'views/results.view.php';
    require 'views/footer.view.php';

}

function confirmationDisplay(){
    if(isset($_POST) && checkEmail($_POST) == true){
        insertVotes($_POST);
        require 'views/header_confirmation.view.php';
        require 'views/confirmation.view.php';
        require 'views/footer.view.php';
    }else{
        require 'views/header.view.php';
        require 'views/doublon.vote.view.php';
        require 'views/footer.view.php';
    }
}

function adminDisplay(){
    $votes = getVotes();
    require 'views/header_confirmation.view.php';
    require 'views/admin.view.php';
    require 'views/footer.view.php';
}

function toggleVote($statut, $email){
    toggleStatut($statut, $email);
    $votes = getVotes();
    require 'views/header_confirmation.view.php';
    require 'views/admin.view.php';
    require 'views/footer.view.php';
    // header('Location :index.php?page=admin');
}