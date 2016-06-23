<?php

    if ($_SERVER["REMOTE_ADDR"] == "127.0.0.1") {
        $environment = 'dev';
        $jsEnvironment = 'dev';
    } else {
        $environment = 'live';
        $jsEnvironment = 'live';
    }

    // declare the server root directory for php file includes
    switch ($environment) {
        case 'dev':

            // declare the server root
            $serverRoot = $_SERVER['DOCUMENT_ROOT'].'/';

            // declare the root file directory for rendered anchors
            $rootFileDir = 'http://dev.band.com/';


            break;

        case 'live':

            //declare the server root
            $serverRoot = '/var/www/band.com/';

            // declare the root file directory for rendered anchors
            $rootFileDir = '/';

            break;

    }

    // declare the image file directory
    $imgFileDir = $rootFileDir.'img/';

    // declare the css assets file directory
    $cssFileDir = $rootFileDir.'css/';

    // declare the js assets file directory
    $jsDevFileDir = $rootFileDir.'js/';

    // band name
    $bandName = 'Band name here';
?>