<?php

function get_itau()
{
    $url = "https://www.itau.com.uy/inst/aci/cotiz.xml";
    $response = Requests::get($url);

    if ($response->success) {
        $body = $response->body;
        $cotizaciones = new SimpleXMLElement($body);
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
        // Acá el body


        echo('<tr>');
        echo('<td>' . 1 . '</td>');
        echo('<td>USD</td>');
        echo('<td>' . $cotizaciones->cotizacion[0]->compra . '</td>');
        echo('<td>' . $cotizaciones->cotizacion[0]->venta . '</td>');
        echo('</tr>');

        echo('<tr>');
        echo('<td>' . 2 . '</td>');
        echo('<td>Peso Argentino</td>');
        echo('<td>' . $cotizaciones->cotizacion[1]->compra . '</td>');
        echo('<td>' . $cotizaciones->cotizacion[1]->venta . '</td>');
        echo('</tr>');

        echo('<tr>');
        echo('<td>' . 3 . '</td>');
        echo('<td>Real Brasileño</td>');
        echo('<td>' . $cotizaciones->cotizacion[2]->compra . '</td>');
        echo('<td>' . $cotizaciones->cotizacion[2]->venta . '</td>');
        echo('</tr>');

        echo('<tr>');
        echo('<td>' . 4 . '</td>');
        echo('<td>Euro</td>');
        echo('<td>' . $cotizaciones->cotizacion[3]->compra . '</td>');
        echo('<td>' . $cotizaciones->cotizacion[3]->venta . '</td>');
        echo('</tr>');

        echo('<tr>');
        echo('<td>' . 5 . '</td>');
        echo('<td>Unidad Indexada</td>');
        echo('<td>' . $cotizaciones->cotizacion[4]->compra . '</td>');
        echo('<td>' . $cotizaciones->cotizacion[4]->venta . '</td>');
        echo('</tr>');

        echo('<tr>');
        echo('<td>' . 6 . '</td>');
        echo('<td>USD en Link</td>');
        echo('<td>' . $cotizaciones->cotizacion[5]->compra . '</td>');
        echo('<td>' . $cotizaciones->cotizacion[5]->venta . '</td>');
        echo('</tr>');

        //Fin
        echo '</tbody></table>';

    } else {
        $mensajeBCU = "Error al obtener las cotizaciones de ITAÚ";
    }
}
