<?php

include 'includes/funtions.php';


incluirTemplate(
    'header2',
    $titlePage = 'PLATAFORMAS Y SERVICIOS TI',
    $ogDescription = 'El Técnico del Programa de Estudios de Plataformas y Servicios de Tecnologías de la Información, es competente para el diseño, implementación y manejo de plataformas de Tecnologías de la Información(TI), tiene dominio en el manejo de herramientas empresariales, configuración y mantenimiento de equipos de cómputo',
    $ogUrl = OG_URL . 'plataformas.php',
    $ogFoto1 = FOTO_URL . "1.jpg"
);


incluirPage(
    'templatePage',

    $fotoheader = FOTO_URL . "tecnologia.jpg",

    $titulo = 'PLATAFORMAS Y SERVICIOS DE TECNOLOGÍAS DE LA INFORMACIÓN  ',

    $decripcion = 'El Técnico del Programa de Estudios de Plataformas y Servicios de Tecnologías de la Información, es competente para el diseño, implementación y manejo de plataformas de Tecnologías de la Información(TI), tiene dominio en el manejo de herramientas empresariales, configuración y mantenimiento de equipos de cómputo, conectividad de datos, gestión de software a medida en plataformas de escritorio y web. Está capacitado para desempeñarse en cualquier organización o su propia empresa,  brinda soluciones innovadoras en los procesos productivos y de servicios, interactuando con una comunicación asertiva, emprendimiento como soporte de sus actividades profesionales y aplica las tecnologías de información y comunicación para el control y corrección en las organizaciones públicas y privadas.					
    ',

    $foto1 = FOTO_PROGRAM . "computacion/plataformas1.jpg",
    $foto2 = FOTO_PROGRAM . "computacion/plataformas2.jpg",
    $foto3 = FOTO_PROGRAM . "computacion/plataformas3.jpg",

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
    $descripModulo3 = 'Atender requerimientos, incidentes y problemas de primer nivel, asimismo brindar asistencia a nivel operativo y funcional en la etapa de puesta en marcha de los sistemas o servicios de TI, según los procedimientos internos de atención, diseño del sistema o servicios, plan de implantación y buenas prácticas de TI.',

    $modulo4 = 'PROYECTOS DE TI Y SOLUCIONES WEB',
    $descripModulo4 = 'Ejecutar acciones de monitoreo y otras acciones operativas programadas, de acuerdo con las buenas prácticas de aseguramiento de operación del CPD y salvaguarda de la información del negocio.'
);



sectionDocente(
    'templateDocente',


    //DATOS DE CADA DOCENTE
    $fotoDocente1 = FOTO_DOCENTE . 'raulcompu.jpg',
    $info1 = 'LIC. RAUL CASTRO CHOQUE',
    $programaDocente1 = 'DOCENTE DE PLATAFORMAS Y SERVICIOS DE TECNOLOGÍAS DE LA INFORMACIÓN',
    //DATOS DE CADA DOCENTE
    $fotoDocente2 = FOTO_DOCENTE . 'wilmer_compu.jpg',
    $info2 = 'LIC. WILMER E. CRISTOBAL TRINIDAD',
    $programaDocente2 = 'DOCENTE DE PLATAFORMAS Y SERVICIOS DE TECNOLOGÍAS DE LA INFORMACIÓN',
    //DATOS DE CADA DOCENTE
    $fotoDocente3 = FOTO_DOCENTE . 'luisportal.jpg',
    $info3 = 'LIC. LUIS PORTAL CASTRO',
    $programaDocente3 = 'DOCENTE DE PLATAFORMAS Y SERVICIOS DE TECNOLOGÍAS DE LA INFORMACIÓN',
    //DATOS DE CADA DOCENTE
    $fotoDocente4 = FOTO_DOCENTE . 'fredy_compu.jpg',
    $info4 = 'PROF. FREDY FERNANDEZ CHAMORRO',
    $programaDocente4 = 'DOCENTE DE PLATAFORMAS Y SERVICIOS DE TECNOLOGÍAS DE LA INFORMACIÓN',
    //DATOS DE CADA DOCENTE
    $fotoDocente5 = FOTO_DOCENTE . 'edgar_compu.jpg',
    $info5 = 'PROF. EDGAR JANAMPA GUZMAN',
    $programaDocente5 = 'DOCENTE DE PLATAFORMAS Y SERVICIOS DE TECNOLOGÍAS DE LA INFORMACIÓN',
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