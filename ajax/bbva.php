<?php

function get_bbva()
{
    $url = "https://bbvanet.bbva.com.uy/WebInst/Cotizaciones";
    $options = array(
        'verify' => false
    );
    $response = Requests::get($url, array(), $options);

    if ($response->success) {
        $body = $response->body;
        $html = new simple_html_dom();
        $html->load($body);
        $htmlTabla = $html->find('table');
        $htmlFinal = str_replace('<caption>Cotizaciones</caption>', '',$htmlTabla[0]);
        echo str_replace('class="table_general"', 'class="table table-striped table-dark"',$htmlFinal);
    } else {
        $mensajeBCU = "Error al obtener las cotizaciones de BBVA";
    }
}
