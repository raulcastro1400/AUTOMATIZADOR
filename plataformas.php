<?php


include 'includes/funtions.php';


incluirTemplate(
    'header2',
    $titlePage = 'PLATAFORMAS Y SERVICIOS TI',
    $ogDescription = '$decripcion',
    $ogUrl = __DIR__ . 'plataformas.php',
    $ogFoto1 = FOTO_URL . "1.jpg"
);


incluirPage(
    'templatePage',

    $fotoheader = FOTO_URL . "tecnologia.jpg",

    $titulo = 'PLATAFORMAS Y SERVICIOS DE TECNOLOGÍAS DE LA INFORMACIÓN  ',

    $decripcion = 'El técnico en mantenimiento de sistemas eléctricos  es competente,  para realizar los servicios de planificación, instalación, programación,  montaje, desmontaje, mantenimiento y reparación de los sistemas eléctricos - electrónicos, así mismo brinda soluciones innovadores en los procesos productivos y de servicio, considerando las normas y estándares técnicos, normas de  seguridad industrial y cuidado del medio ambiente establecidas en el sector industrial, con una comunicación efectiva, buen manejo de las TICs y habilidades de emprendimientos  en empresas de pequeña o mediana envergadura  propios de su campo profesional.',

    $foto1 = FOTO_PROGRAM . "computacion/plataformas1.jpg",
    $foto2 = FOTO_PROGRAM . "computacion/plataformas2.jpg",
    $foto3 = FOTO_PROGRAM . "computacion/plataformas3.jpg",

    $nStudiantes = "150",
    $nDocentes = "8",
    $nEgresados = "500",
    $Titulados = "250"

);

incluirLineaTiempo(
    'linetime-3',

    $yearPlan = 'PLAN DE ESTUDIOS 2022 - 2023',
    $modulo1 = 'ELECTRICIDAD Y METROLOGÍA',
    $descripModulo1 = 'Realizar la puesta en producción de los sistemas de información o servicios de TI, de acuerdo con la planificación efectuada.',

    $modulo2 = 'INSTALACIONES ELÉCTRICAS EN EDIFICACIONES',
    $descripModulo2 = 'Implementar el suministro de alimentación eléctrica en edificaciones e industrias, de acuerdo al diseño y planos eléctricos, demanda de energía, uso eficiente de la energía, recomendaciones de los fabricantes, estándares de seguridad y normativa vigente.',

    $modulo3 = 'INSTALACIONES ELÉCTRICAS INDUSTRIALES',
    $descripModulo3 = 'Instalar elementos de conducción de energía eléctrica y de comunicaciones, equipos eléctricos y electrónicos de configuración básica en las edificaciones e industrias, de acuerdo al diseño y planos eléctricos, tipos de energía, demanda de carga eléctrica, manuales de fabricantes, arquitectura de circuitos de alimentación eléctrica, estándares de seguridad y normativa vigente.',


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