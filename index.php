<?php

require 'includes/funtions.php';

incluirTemplate('header',
$titlePage = '2022',
$ogDescription = 'CETPRO JULIO C. TELLO RUMBO AL LICENCIAMIENTO 2022',
$ogUrl= __DIR__ . 'inidex.php',
$ogFoto1= ''
);

incluirPrincipal('principal');

incluirTemplate('footer',
$titlePage = '',  //NO CORRESPONDE AL FOOTER
$ogDescription = '',//NO CORRESPONDE AL FOOTER
$ogUrl= '',//NO CORRESPONDE AL FOOTER
$ogFoto1= ''//NO CORRESPONDE AL FOOTER
);