<?php


include 'includes/funtions.php';


incluirTemplate(
    'header2',
    $titlePage = 'FABRICACIÓN DE PRENDAS DE VESTIR',
    $ogDescription = '$decripcion',
    $ogUrl = __DIR__ . 'plataformas.php',
    $ogFoto1 = FOTO_URL . "1.jpg"
);


incluirPage(
    'templatePage',

    $fotoheader = FOTO_URL . "vestir.jpg",

    $titulo = 'FABRICACIÓN DE PRENDAS DE VESTIR',

    $decripcion = 'El técnico egresado del programa de estudios de fabricación de prendas de vestir es eficiente en los procesos de fabricación, tiende, traza, corta, habilita y ensambla prendas de vestir en distintos tipos de tejidos analizando las fichas técnicas, teniendo en cuenta las normas de seguridad industrial,  salud ocupacional y cuidado del medio ambiente, con responsabilidad y trabajo en equipo, comunicándose de manera efectiva y asertiva empleando el uso de las tic e innovando oportunidades de negocio.',

    $foto1 = FOTO_PROGRAM . "confeccion/vertir1.jpg",
    $foto2 = FOTO_PROGRAM . "confeccion/vertir2.jpg",
    $foto3 = FOTO_PROGRAM . "confeccion/vertir3.jpg",

    $nStudiantes = "150",
    $nDocentes = "8",
    $nEgresados = "500",
    $Titulados = "250"

);

incluirLineaTiempo(
    'linetime',

    $yearPlan = 'PLAN DE ESTUDIOS 2022 - 2023',
    $modulo1 = 'CONTROL DE CALIDAD DE PROCESOS DE FABRICACIÓN DE PRENDAS DE VESTIR.',
    $descripModulo1 = 'Realizar el control de calidad de la preproducción y la producción de las prendas de vestir, considerando las especificaciones de la ficha técnica.',

    $modulo2 = 'TÉCNICAS DE CORTE INDUSTRIAL EN PRENDAS DE VESTIR PARA TEJIDO DE PUNTO Y TEJIDO PLANO',
    $descripModulo2 = 'Tender la tela, según la orden y especificaciones técnicas del producto, de acuerdo con las especificaciones    técnicas, considerando la optimización del material y normativa correspondiente - Trazar/tizar las piezas, según los criterios de precisión, orden de corte y especificaciones técnicas del producto, de acuerdo con las especificaciones técnicas y normativa correspondiente.',

    $modulo3 = 'ENSAMBLE DE PRENDAS DE VESTIR EN TEJIDO PUNTO Y TEJIDO PLANO',
    $descripModulo3 = 'Habilitar las piezas de tela, de acuerdo con las disposiciones técnicas y normativa correspondiente. - Unir piezas de tela, de acuerdo con las disposiciones técnicas y normativa correspondiente.',

    $modulo4 = 'PROCESOS FINALES DE LAS PRENDAS DE VESTIR',
    $descripModulo4 = 'Realizar el proceso final de la prenda de vestir, en base a los requerimientos del cliente y normativa correspondiente.',

);


incluirTemplate(
    'footer',
    $titlePage = '',  //NO CORRESPONDE AL FOOTER
    $ogDescription = '', //NO CORRESPONDE AL FOOTER
    $ogUrl = '', //NO CORRESPONDE AL FOOTER
    $ogFoto1 = '' //NO CORRESPONDE AL FOOTER
);