<?php
require 'app.php';
//FUNCIÓN PARA EL INDEX
function incluirPrincipal(string $nombre2)
{
    include PAGES_URL . "/${nombre2}.php";
}

//FUNCIÓN PARA METADATOS PARA CADA TEMPLATE
function incluirTemplate(
    string $nombre,
    string $titlePage,
    string $ogDescription,
    string $ogUrl,
    string $ogFoto1


) {
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

) {
    include PAGES_URL . "/${nombre2}.php";
}




//INCLUIR LINEA DE TIEMPOS DE 4 - 3 - 2
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



) {
    include PAGES_URL . "/${nombreLinea}.php";
}

function incluirLineaTiempo3(
    string $nombreLinea,
    string $yearPlan,
    string $modulo1,
    string $descripModulo1,
    string $modulo2,
    string $descripModulo2,
    string $modulo3,
    string $descripModulo3

) {
    include PAGES_URL . "/${nombreLinea}.php";
}


function incluirLineaTiempo2(
    string $nombreLinea,
    string $yearPlan,
    string $modulo1,
    string $descripModulo1,
    string $modulo2,
    string $descripModulo2


) {
    include PAGES_URL . "/${nombreLinea}.php";
}

//FIN DE LINEA DE TIEMPO


// FUNCION PARA AÑADIR DOCENTES.

function sectionDocente(
    //NOMBRE DE LA SECCIÓN
    string $section,
    //DATOS DE CADA DOCENTE
    string $fotoDocente1,
    string $info1,
    string $programaDocente1,
    //DATOS DE CADA DOCENTE
    string $fotoDocente2,
    string $info2,
    string $programaDocente2,
    //DATOS DE CADA DOCENTE
    string $fotoDocente3,
    string $info3,
    string $programaDocente3,
    //DATOS DE CADA DOCENTE
    string $fotoDocente4,
    string $info4,
    string $programaDocente4,
    //DATOS DE CADA DOCENTE
    string $fotoDocente5,
    string $info5,
    string $programaDocente5,
    //DATOS DE CADA DOCENTE    
    string $fotoDocente6,
    string $info6,
    string $programaDocente6

) {
    include PAGES_URL . "/${section}.php";
}