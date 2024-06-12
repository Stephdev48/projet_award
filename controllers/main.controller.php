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
    require 'views/header.view.php';
    require 'views/results.view.php';
    require 'views/footer.view.php';
}

?>