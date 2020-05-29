<?php

function get_cambilex()
{
    $url = "https://cambilex.com.uy/";
    $response = Requests::get($url);

    if ($response->success) {
        $body = $response->body;
        $html = str_get_html($body);
        $divListas = $html->find("div[class=tabla]")[0]->find('table');
        $htmlLista = str_get_html($divListas[0]);
        $pasamosPrimero = false;
        $count = 0;
        foreach ($htmlLista->find('tr') as $element) {
            if ($pasamosPrimero) {
                if ($count != 7)
                {
                    $tdNombre = $element->find('td')[0];
                    $tdValor = $element->find('td')[1];
                    $tdVenta = $element->find('td')[2];
                    echo('<tr>');
                    echo('<td>' . $count . '</td>');
                    echo('<td>' . $tdNombre->innertext . '</td>');
                    echo('<td>' . $tdValor->innertext . '</td>');
                    echo('<td>' . $tdVenta->innertext . '</td>');
                    echo('</tr>');
                }

            } else {
                $pasamosPrimero = true;
                echo '<table class="table table-striped table-dark">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">#</th>';
                echo '<th scope="col">Moneda</th>';
                echo '<th scope="col">Compra</th>';
                echo '<th scope="col">Venta</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
            }
            $count++;
        }
        echo '</tbody></table>';

    } else {
        $mensajeBCU = "Error al obtener las cotizaciones del BCU";
    }
}
