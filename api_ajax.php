<?php
//error_reporting (0);
require_once ("simple_html_dom.php");
require_once ("vendor/rmccue/requests/library/Requests.php");
Requests::register_autoloader();
require_once ("ajax/bcu.php");
require_once("ajax/brou.php");
require_once("ajax/itau.php");
require_once("ajax/bbva.php");
require_once("ajax/cambilex.php");
require_once("ajax/matriz.php");
require_once("ajax/urucambio.php");
require_once("ajax/indumex.php");

$action=$_GET['a'];

switch($action)
{
    case "bcu":
        get_bcu();
        break;
    case "brou":
        get_brou();
        break;
    case "itau":
        get_itau();
        break;
    case "bbva":
        get_bbva();
        break;
    case "cambilex":
        get_cambilex();
        break;
    case "matriz":
        get_matriz();
        break;
    case "urucambio":
        get_urucambio();
        break;
    case "indumex":
        get_indumex();
        break;
}


