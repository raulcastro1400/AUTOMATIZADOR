<?php
include 'app.php';

function incluirTemplate($nombre){
    include TEMPLATE_URL . "/${nombre}.php";
}

function incluirPage($nombre2){
    include PAGES_URL . "/${nombre2}.php";
}