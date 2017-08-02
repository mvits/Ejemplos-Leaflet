<?php

// proxyAjax.php
// ... validation of params
// and checking of url against whitelist would happen here ...
// assume that $url now contains "http://stackoverflow.com/10m"

switch ($_REQUEST['capa']) {
    case 'amenazas_remocion_masas':
        $url = 'http://172.16.146.237:8080/geoserver/capas/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=capas:amenaza&maxFeatures=1000&outputFormat=application%2Fjson';

        break;

    case 'estados':
        $url = 'http://172.16.146.237:8080/geoserver/topp/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=topp:states&maxFeatures=50&outputFormat=json';

        break;

    default:
        echo "Capa No Disponible!!!!";
        break;
}

if (isset($url)) {
    echo file_get_contents($url);
}

exit;
