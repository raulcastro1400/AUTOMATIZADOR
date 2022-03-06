<?php


include 'includes/funtions.php';


incluirTemplate(
    'header2',
    $titlePage = 'ESTILISMO',
    $ogDescription = 'El Técnico en Estilismo es componente para realizar servicios de peluquería y barbería, tratamiento capilar, permanentes, decoloración, con maquillaje de vanguardia y depilación básica, cuidando manos y pies haciendo uso de herramientas',
    $ogUrl = OG_URL . 'estilismo.php',
    $ogFoto1 = FOTO_URL . "programas/cosmetologia/estilismo1.jpg"
);


incluirPage(
    'templatePage',

    $fotoheader = FOTO_URL . "estilismo.jpg",

    $titulo = 'ESTILISMO',

    $decripcion = 'El Técnico en Estilismo es componente para realizar servicios de peluquería y barbería, tratamiento capilar, permanentes, decoloración, con maquillaje de vanguardia y depilación básica, cuidando manos y pies haciendo uso de herramientas, equipos y accesorios de alta tecnología cumpliendo las normas de bioseguridad y brindando soluciones innovadoras, cuidando el medio ambiente, a través de una comunicación efectiva y asertiva, utilizando tecnología de información y comunicación con mentalidad emprendedora para insertarse al mercado laboral.',

    $foto1 = FOTO_PROGRAM . "cosmetologia/estilismo1.jpg",
    $foto2 = FOTO_PROGRAM . "cosmetologia/estilismo2.jpg",
    $foto3 = FOTO_PROGRAM . "cosmetologia/estilismo3.jpg",

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

sectionDocente(
    'templateDocente',


    //DATOS DE CADA DOCENTE
    $fotoDocente1 = FOTO_DOCENTE . 'olinda.jpg',
    $info1 = 'MG. OLINDA RIXE TARAZONA',
    $programaDocente1 = 'DOCENTE DE ESTILISMO',
    //DATOS DE CADA DOCENTE
    $fotoDocente2 = FOTO_DOCENTE . 'frida.jpg',
    $info2 = 'PROF. FRIDA M. USCUCHAGUA ALVARES',
    $programaDocente2 = 'DOCENTE DE ESTILISMO',
    //DATOS DE CADA DOCENTE
    $fotoDocente3 = FOTO_DOCENTE . 'gisela.jpg',
    $info3 = 'LIC. GISELA PEÑA DÁVILA',
    $programaDocente3 = 'DOCENTE DE ESTILISMO',
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