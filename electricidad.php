<?php


include 'includes/funtions.php';


incluirTemplate('header2');


incluirPage('templatePage',

    $titulo='MANTENIMIENTO DE SISTEMAS ELECTRICOS',
    $decripcion='El Técnico del Programa de Estudios de Plataformas y Servicios de Tecnologías de la Información, es competente para el diseño, implementación y manejo de plataformas de Tecnologías de la Información(TI), tiene dominio en el manejo de herramientas empresariales, configuración y mantenimiento de equipos de cómputo, conectividad de datos, gestión de software a medida en plataformas de escritorio y web. Está capacitado para desempeñarse en cualquier organización o su propia empresa,  brinda soluciones innovadoras en los procesos productivos y de servicios, interactuando con una comunicación asertiva, emprendimiento como soporte de sus actividades profesionales y aplica las tecnologías de información y comunicación para el control y corrección en las organizaciones públicas y privadas.',

    $foto1 = FOTO_URL . "1.jpg",
    $foto2 = FOTO_URL . "6.jpg",
    $foto3 = FOTO_URL . "4.jpg",

    $nStudiantes = "100",
    $nDocentes = "3",
    $nEgresados = "150",
    $Titulados = "100"

);


incluirTemplate('footer');
