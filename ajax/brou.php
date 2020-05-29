<?php

function get_brou()
{
    $url = "https://www.brou.com.uy/c/portal/render_portlet?p_l_id=20593&p_p_id=cotizacionfull_WAR_broutmfportlet_INSTANCE_otHfewh1klyS&p_p_lifecycle=0&p_t_lifecycle=0&p_p_state=normal&p_p_mode=view&p_p_col_id=column-1&p_p_col_pos=0&p_p_col_count=2&p_p_isolated=1&currentURL=%2Fcotizaciones";
    $options = array(
        'verify' => false
    );
    $response = Requests::get($url, array(), $options);

    if ($response->success) {
        $body = $response->body;
        $html = new simple_html_dom();
        $html->load($body);
        $htmlTabla = $html->find('table');
        $htmlDiv = str_get_html($htmlTabla[0]);
        $finalHtml = $htmlTabla[0];
        foreach ($htmlDiv->find('div[class=bandera]') as $element) {
            $finalHtml = str_replace($element, '',$finalHtml);
        }

     //   $finalHtml = str_replace('<td style="text-align: center;">', "<td>", $finalHtml);
        echo str_replace("<table>", '<table class="table table-striped table-dark">',$finalHtml);
    } else {
        $mensajeBCU = "Error al obtener las cotizaciones del BROU";
    }
}
