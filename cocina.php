<?php


include 'includes/funtions.php';


incluirTemplate(
    'header2',
    $titlePage = 'COCINA',
    $ogDescription = '$decripcion',
    $ogUrl = __DIR__ . 'cocina.php',
    $ogFoto1 = FOTO_URL . "1.jpg"
);


incluirPage(
    'templatePage',

    $fotoheader = FOTO_URL . "cocina.png",

    $titulo = 'COCINA',

    $decripcion = '
    El técnico en cocina está altamente capacitado, para realizar platos y técnicas culinarias, procesos de adquisición, almacenamiento, preparación, decoración y presentación de platos Nacionales, Internacionales, panadería y pastelería, de acuerdo a procedimientos establecidos, las BPM, normas vigentes, con capacidad de trabajar en equipo, emprender y gestionar su propia empresa de restaurantes y panaderías, considerando el cuidado del medio ambiente.',

    $foto1 = FOTO_URL . "1.jpg",
    $foto2 = FOTO_URL . "6.jpg",
    $foto3 = FOTO_URL . "4.jpg",

    $nStudiantes = "150",
    $nDocentes = "8",
    $nEgresados = "500",
    $Titulados = "250"

);

incluirLineaTiempo2(
    'linetime-2',

    $yearPlan = 'PLAN DE ESTUDIOS 2022 - 2023',
    $modulo1 = 'MISE PLACE Y TÉCNICAS DE COCINA',
    $descripModulo1 = 'Realizar la mise en place del área de cocina, aplicando las BPM (Buenas Prácticas de Manipulación) y según la hoja de producción, procedimientos establecidos y normativos.',

    $modulo2 = 'COCINA PERUANA E INTERNACIONAL - PANADERIA Y PASTELERIA',
    $descripModulo2 = 'Elabora platos culinarios, aplicando las BPM (Buenas Prácticas de Manipulación), y técnicas culinarias, de acuerdo a la oferta del establecimiento, requerimiento del cliente (comanda) y normativa vigente.'


);


incluirTemplate(
    'footer',
    $titlePage = '',  //NO CORRESPONDE AL FOOTER
    $ogDescription = '', //NO CORRESPONDE AL FOOTER
    $ogUrl = '', //NO CORRESPONDE AL FOOTER
    $ogFoto1 = '' //NO CORRESPONDE AL FOOTER
);