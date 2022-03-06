<?php


include 'includes/funtions.php';


incluirTemplate(
    'header2',
    $titlePage = 'COCINA',
    $ogDescription = 'El técnico en cocina está altamente capacitado, para realizar platos y técnicas culinarias, procesos de adquisición, almacenamiento, preparación, decoración y presentación de platos Nacionales, Internacionales, panadería y pastelería, de acuerdo a procedimientos establecidos, las BPM',
    $ogUrl = OG_URL . 'cocina.php',
    $ogFoto1 = FOTO_URL . "programas/gastronomia/cocina2.jpg"
);


incluirPage(
    'templatePage',

    $fotoheader = FOTO_URL . "cocina.png",

    $titulo = 'COCINA',

    $decripcion = 'El técnico en cocina está altamente capacitado, para realizar platos y técnicas culinarias, procesos de adquisición, almacenamiento, preparación, decoración y presentación de platos Nacionales, Internacionales, panadería y pastelería, de acuerdo a procedimientos establecidos, las BPM, normas vigentes, con capacidad de trabajar en equipo, emprender y gestionar su propia empresa de restaurantes y panaderías, considerando el cuidado del medio ambiente.',

    $foto1 = FOTO_PROGRAM . "gastronomia/cocina1.jpg",
    $foto2 = FOTO_PROGRAM . "gastronomia/cocina2.jpg",
    $foto3 = FOTO_PROGRAM . "gastronomia/cocina3.jpg",

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


sectionDocente(
    'templateDocente',


    //DATOS DE CADA DOCENTE
    $fotoDocente1 = FOTO_DOCENTE . 'cinthia_gastro.jpg',
    $info1 = 'CHEF. CINTHIA VICENTE MALPARTIDA',
    $programaDocente1 = 'COCINA',
    //DATOS DE CADA DOCENTE
    $fotoDocente2 = FOTO_DOCENTE . '',
    $info2 = '',
    $programaDocente2 = '',
    //DATOS DE CADA DOCENTE
    $fotoDocente3 = FOTO_DOCENTE . '',
    $info3 = '',
    $programaDocente3 = '',
    //DATOS DE CADA DOCENTE
    $fotoDocente4 = FOTO_DOCENTE . '',
    $info4 = '',
    $programaDocente4 = '',
    //DATOS DE CADA DOCENTE
    $fotoDocente5 = FOTO_DOCENTE . '',
    $info5 = '',
    $programaDocente5 = '',
    //DATOS DE CADA DOCENTE    
    $fotoDocente6 = FOTO_DOCENTE . '',
    $info6 = '',
    $programaDocente6 = ''

);


incluirTemplate(
    'footer',
    $titlePage = '',  //NO CORRESPONDE AL FOOTER
    $ogDescription = '', //NO CORRESPONDE AL FOOTER
    $ogUrl = '', //NO CORRESPONDE AL FOOTER
    $ogFoto1 = '' //NO CORRESPONDE AL FOOTER
);