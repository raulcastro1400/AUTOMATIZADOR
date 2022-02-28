<?php
require 'app.php';

function incluirTemplate($nombre){
    include TEMPLATE_URL . "/${nombre}.php";
}




function incluirPrincipal( string $nombre2){
    include PAGES_URL . "/${nombre2}.php";

}




function incluirPage( 
    string $nombre2,  
    string $titulo,
    string $descripcion,
    string $foto1,
    string $foto2,
    string $foto3,
    string $nStudiantes,
    string $nDocentes,
    string $nEgresados,
    string $Titulados
    
    )


    {
    include PAGES_URL . "/${nombre2}.php";

}

