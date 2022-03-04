<?php


include 'includes/funtions.php';


incluirTemplate(
    'header2',
    $titlePage = 'ESTILISMO',
    $ogDescription = '$decripcion',
    $ogUrl = __DIR__ . 'plataformas.php',
    $ogFoto1 = FOTO_URL . "1.jpg"
);


incluirPage(
    'templatePage',

    $fotoheader = FOTO_URL . "estilismo.jpg",

    $titulo = 'ESTILISMO',

    $decripcion = 'El Técnico en Estilismo es componente para realizar servicios de peluquería y barbería, tratamiento capilar, permanentes, decoloración, con maquillaje de vanguardia y depilación básica, cuidando manos y pies haciendo uso de herramientas, equipos y accesorios de alta tecnología cumpliendo las normas de bioseguridad y brindando soluciones innovadoras, cuidando el medio ambiente, a través de una comunicación efectiva y asertiva, utilizando tecnología de información y comunicación con mentalidad emprendedora para insertarse al mercado laboral.',

    $foto1 = FOTO_URL . "1.jpg",
    $foto2 = FOTO_URL . "6.jpg",
    $foto3 = FOTO_URL . "4.jpg",

    $nStudiantes = "150",
    $nDocentes = "8",
    $nEgresados = "500",
    $Titulados = "250"

);

incluirLineaTiempo(
    'linetime',

    $yearPlan = 'PLAN DE ESTUDIOS 2022 - 2023',
    $modulo1 = 'TRATAMIENTO CAPILAR, TINTURACION, ONDULACION Y LACEADO',
    $descripModulo1 = 'Realizar procedimientos técnicos capilares, tomando en cuenta su diagnóstico, requerimientos del cliente, y de bioseguridad e higiene',

    $modulo2 = 'CORTE DE CABELLO, BARBERIA Y PEINADOS DE ESTILO.',
    $descripModulo2 = 'Ejecutar el servicio de peluquería y barbería, teniendo en cuenta el diagnóstico capilar, requerimientos del cliente, procedimientos del establecimiento, criterios técnicos, estéticos y de bioseguridad e higiene.',

    $modulo3 = 'MANICURA Y PEDICURA',
    $descripModulo3 = 'Ejecutar el servicio de estética en manos y pies teniendo en cuenta los requerimientos del cliente, los procedimientos del establecimiento, criterios técnicos, estéticos y de bioseguridad e higiene.',


    $modulo4 = 'MAQUILLAJE DEPILACION Y CARACTERIZACION',
    $descripModulo4 = 'Efectuar el servicio de maquillaje de belleza de acuerdo con los requerimientos del cliente, criterios técnicos, estéticos y de bioseguridad e higiene'


);


incluirTemplate(
    'footer',
    $titlePage = '',  //NO CORRESPONDE AL FOOTER
    $ogDescription = '', //NO CORRESPONDE AL FOOTER
    $ogUrl = '', //NO CORRESPONDE AL FOOTER
    $ogFoto1 = '' //NO CORRESPONDE AL FOOTER
);