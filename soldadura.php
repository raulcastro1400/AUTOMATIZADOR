<?php


include 'includes/funtions.php';


incluirTemplate(
    'header2',
    $titlePage = 'SOLDADURA',
    $ogDescription = '$decripcion',
    $ogUrl = __DIR__ . 'soldadura.php',
    $ogFoto1 = FOTO_URL . "1.jpg"
);


incluirPage(
    'templatePage',

    $fotoheader = FOTO_URL . "soldadura.jpg",

    $titulo = 'SOLDADURA',

    $decripcion = 'El técnico en Soldadura es competente en identificar y realizar planos desarrollados en la industria metal mecánica de acuerdo a las especificaciones del diseño así como el habilitado y la unión por los procesos de soldadura de fusión (SMAW, OFW, GMAW y GTAW), según especificaciones técnicas exigidas por los sectores industriales,  cumpliendo procedimientos establecidos por las diferentes empresas, en condiciones de seguridad y cuidado del medio ambiente; brinda soluciones innovadoras, aplicando normas nacionales e internacionales, tomando en cuenta el emprendimiento, una comunicación efectiva, el uso de tecnologías de información y comunicación.',

    $foto1 = FOTO_PROGRAM . "soldadura/soldadura1.jpg",
    $foto2 = FOTO_PROGRAM . "soldadura/soldadura2.jpg",
    $foto3 = FOTO_PROGRAM . "soldadura/soldadura3.jpg",

    $nStudiantes = "150",
    $nDocentes = "8",
    $nEgresados = "500",
    $Titulados = "250"

);

incluirLineaTiempo3(
    'linetime-3',

    $yearPlan = 'PLAN DE ESTUDIOS 2022 - 2023',
    $modulo1 = 'CALDERERIA INDUSTRIAL',
    $descripModulo1 = 'Dibujar planos de piezas, máquinas, equipos y planos de montaje, de acuerdo con las especificaciones del diseño',

    $modulo2 = 'CONFORMADO DE METALES',
    $descripModulo2 = 'RDar forma a la pieza de madera empleando la maquinaria correspondiente, de acuerdo con las medidas especificadas en la ficha técnica, estándares internacionales de calidad, y la normativa vigente.',

    $modulo3 = 'SOLDADURA POR FUSIÓN (SMAG – (OAW – OFW) - GTAW - GMAW)',
    $descripModulo3 = 'Ejecutar el proceso de Soldadura a los componentes de máquinas y equipos según especificaciones técnicas del diseño aprobado, plan y programa de producción, procedimientos establecidos por la empresa y la normativa correspondiente'

);


incluirTemplate(
    'footer',
    $titlePage = '',  //NO CORRESPONDE AL FOOTER
    $ogDescription = '', //NO CORRESPONDE AL FOOTER
    $ogUrl = '', //NO CORRESPONDE AL FOOTER
    $ogFoto1 = '' //NO CORRESPONDE AL FOOTER
);