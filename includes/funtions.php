<?php
require 'app.php';
//FUNCIÓN PARA EL INDEX
function incluirPrincipal( string $nombre2){
    include PAGES_URL . "/${nombre2}.php";

}

//FUNCIÓN PARA PLANTILLA DE PROGRAMAS  DE ESTUDIO
function incluirTemplate(
    string $nombre,
    string $titlePage,
    string $ogDescription,
    string $ogUrl,
    string $ogFoto1
   

){
    include TEMPLATE_URL . "/${nombre}.php";
}

//FUNCION PARA INCLUIR DATOS DE LOS PROGRAMAS DE ESTUDIO
function incluirPage( 
    string $nombre2,
    string $fotoheader,  
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


function incluirLineaTiempo(
    string $nombreLinea,
    string $yearPlan,
    string $modulo1,
    string $descripModulo1,
    string $modulo2,
    string $descripModulo2,
    string $modulo3,
    string $descripModulo3,
    string $modulo4,
    string $descripModulo4



)
{
    include PAGES_URL . "/${nombreLinea}.php";
}

