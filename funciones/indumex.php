<?php

function get_indumex()
{
    $fecha = date("dmY");
    $url = "https://www.indumex.com/Umbraco/api/Pizarra/Cotizaciones?fecha=" . $fecha;
    $response = Requests::get($url);

    if ($response->success) {
        $body = $response->body;
        $cotizaciones = json_decode($body);
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
        echo('<td>' . $cotizaciones[0]->Compra . '</td>');
        echo('<td>' . $cotizaciones[0]->Venta . '</td>');
        echo('</tr>');

        echo('<tr>');
        echo('<td>' . 2 . '</td>');
        echo('<td>Peso Argentino</td>');
        echo('<td>' . $cotizaciones[1]->Compra . '</td>');
        echo('<td>' . $cotizaciones[1]->Venta . '</td>');
        echo('</tr>');

        echo('<tr>');
        echo('<td>' . 3 . '</td>');
        echo('<td>Real Brasileño</td>');
        echo('<td>' . $cotizaciones[2]->Compra . '</td>');
        echo('<td>' . $cotizaciones[2]->Venta . '</td>');
        echo('</tr>');

        echo('<tr>');
        echo('<td>' . 4 . '</td>');
        echo('<td>Euro</td>');
        echo('<td>' . $cotizaciones[3]->Compra . '</td>');
        echo('<td>' . $cotizaciones[3]->Venta . '</td>');
        echo('</tr>');


        //Fin
        echo '</tbody></table>';

    } else {
        $mensajeBCU = "Error al obtener las cotizaciones de ITAÚ";
    }
}
