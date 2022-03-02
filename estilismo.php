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

    $decripcion = 'COMPLLETAR EGRESADO',

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
    $modulo1 = 'HERRAMIENTAS DE TI EMPRESARIAL',
    $descripModulo1 = 'Realizar la puesta en producción de los sistemas de información o servicios de TI, de acuerdo con la planificación efectuada.',

    $modulo2 = 'SOPORTE TÉCNICO Y CONTROL DE RIESGOS EN SISTEMAS INFORMÁTICOS',
    $descripModulo2 = 'Realizar las mejoras, mantenimientos preventivos y acciones correctivas en las infraestructuras y plataformas de TI, de acuerdo con el plan de mejoras, gestión de riesgos, continuidad de negocio y políticas de seguridad.',

    $modulo3 = 'DESARROLLO DE SISTEMAS DE TI Y BASE DE DATOS',
    $descripModulo3 = 'Atender requerimientos, incidentes y problemas de primer nivel, asimismo brindar asistencia a nivel operativo y funcional en la etapa de puesta en marcha de los sistemas o servicios de TI, según los procedimientos internos de atención, diseño del sistema o servicios, plan de implantación y buenas prácticas de TI',


    $modulo4 = 'PROYECTOS DE TI Y SOLUCIONES WEB',
    $descripModulo4 = 'Ejecutar acciones de monitoreo y otras acciones operativas programadas, de acuerdo con las buenas prácticas de aseguramiento de operación del CPD y salvaguarda de la información del negocio.'


);


incluirTemplate(
    'footer',
    $titlePage = '',  //NO CORRESPONDE AL FOOTER
    $ogDescription = '', //NO CORRESPONDE AL FOOTER
    $ogUrl = '', //NO CORRESPONDE AL FOOTER
    $ogFoto1 = '' //NO CORRESPONDE AL FOOTER
);