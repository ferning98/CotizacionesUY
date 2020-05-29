<?php

function get_bcu()
{
    $url = "https://www.bcu.gub.uy/Estadisticas-e-Indicadores/Paginas/Cotizaciones.aspx";
    $response = Requests::get($url);

    if ($response->success) {
        $body = $response->body;
        $html = str_get_html($body);
        $divListas = $html->find("div[id=list_cotizaciones]");
        $htmlLista = str_get_html($divListas[0]);
        $pasamosPrimero = false;
        $count = 0;
        foreach ($htmlLista->find('tr') as $element) {
            if ($pasamosPrimero) {
                if ($count != 7)
                {
                    $tdNombre = $element->find('td')[1];
                    $tdValor = $element->find('td')[2];;
                    echo('<tr>');
                    echo('<td>' . $count . '</td>');
                    if ($count == 6) {
                        echo('<td>UI ' . $tdNombre->innertext . '</td>');
                    } else {
                        echo('<td>' . $tdNombre->innertext . '</td>');
                    }
                    echo('<td>' . $tdValor->innertext . '</td>');
                    echo('</tr>');
                }

            } else {
                $pasamosPrimero = true;
                echo '<table class="table table-striped table-dark">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">#</th>';
                echo '<th scope="col">Moneda</th>';
                echo '<th scope="col">Promedio</th>';
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
