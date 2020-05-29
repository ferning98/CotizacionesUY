<?php require_once("api.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="Todas las cotizaciones del Uruguay en un solo lugar">
    <meta name="keywords" content="cotizaciones, dolar, peso argentino, cotizacion, uruguay">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">
    <meta name="author" content="Pablo Fernández">
    <title>Cotizaciones Uruguay</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<section class="menu cid-rNH4wRX5oz" once="menu" id="menu1-0">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="hamburger">
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#">
                        Cotizaciones Monedas Uruguay</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


        </div>
    </nav>
</section>

<section class="engine"></section>
<section class="header1 cid-rNH8joj5nW" id="header16-1">

    <div class="container">
        <div align="center" class="alert alert-info" role="alert" style="border-radius:15px;">La aplicación está actualmente en beta y puede que ocurran errores. Si tiene algún inconveniente, pruebe refrescando la página.</div>
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Todas las cotizaciones del Uruguay</h1>

                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Tené acceso a todas las cotizaciones posibles, en un solo lugar</p>
                    
                <div>En esta página web, usted tendrá acceso a la gran mayoría de cotizaciones de las monedas en Uruguay. Se toman los datos, en el momento, de las páginas web de cada una de las empresas abajo mencionadas.</div>
                    
                <div class="mbr-section-btn"><a class="btn btn-md btn-black-outline display-4"
                                                href="#accordionContainer">Ir a ver las cotizaciones</a></div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section content8 cid-rNH8lPmoEi" id="content8-2">


    <div id="accordionContainer" class="container">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button onclick="javascript:setCookie('bcu');" class="btn btn-link" data-toggle="collapse"
                                data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                            Banco Central del Uruguay
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <?php get_bcu(); ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button onclick="javascript:setCookie('brou');" class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                            BROU
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <?php get_brou(); ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button onclick="javascript:setCookie('itau');" class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                            ITAÚ
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <?php get_itau(); ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFifth">
                    <h5 class="mb-0">
                        <button onclick="javascript:setCookie('bbva');" class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseFifth"
                                aria-expanded="false" aria-controls="collapseFifth">
                            BBVA
                        </button>
                    </h5>
                </div>
                <div id="collapseFifth" class="collapse" aria-labelledby="headingFifth" data-parent="#accordion">
                    <div class="card-body">
                        <?php get_bbva(); ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingAd">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseAd"
                                aria-expanded="false" aria-controls="collapseAd">
                            Publicidad
                        </button>
                    </h5>
                </div>
                <div id="collapseAd" class="collapse show" aria-labelledby="headingAd" data-parent="#accordion">
                    <div class="card-body">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- JuegazoChat -->
                            <ins class="adsbygoogle"
                                style="display:block"
                                data-ad-client="ca-pub-7725224988753437"
                                data-ad-slot="6706870157"
                                data-ad-format="auto"
                                data-full-width-responsive="true"></ins>
                            <script>
                             (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingEight">
                    <h5 class="mb-0">
                        <button onclick="javascript:setCookie('cambilex');" class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseEight"
                                aria-expanded="false" aria-controls="collapseEight">
                            Cambilex
                        </button>
                    </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                    <div class="card-body">
                        <?php get_cambilex(); ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button onclick="javascript:setCookie('matriz');" class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                            Cambio Matriz
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        <?php get_matriz(); ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button onclick="javascript:setCookie('urucambio');" class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                            Urucambio
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <?php get_urucambio(); ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button onclick="javascript:setCookie('indumex');" class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                            Indumex
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <?php get_indumex(); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!--
begin tag cloud : generated by TagCrowd.com
Feel free to modify as long as you keep this notice.

EMBEDDING INSTRUCTIONS:
1. Customize your cloud's style by editing the CSS where it says CUSTOMIZE below.
2. Insert this code in its entirety into your webpage or blog post.

This code and its rendered image are released under the Creative Commons Attribution-Noncommercial 3.0 Unported License. (http://creativecommons.org/licenses/by-nc/3.0/)

For COMMERCIAL USE LICENSING, visit https://tagcrowd.com/licensing.html
-->
<style type="text/css"><!-- #htmltagcloud{

/******************************************
 * CUSTOMIZE CLOUD CSS BELOW (optional)
 */
	font-size: 100%;
	width: auto;		/* auto or fixed width, e.g. 500px   */
	font-family:'lucida grande','trebuchet ms',arial,helvetica,sans-serif;
	background-color:#fff;
	margin:1em 1em 0 1em;
	border:2px dotted #ddd;
	padding:2em; 
/******************************************
 * END CUSTOMIZE
 */

}#htmltagcloud{line-height:2.4em;word-spacing:normal;letter-spacing:normal;text-transform:none;text-align:justify;text-indent:0}#htmltagcloud a:link{text-decoration:none}#htmltagcloud a:visited{text-decoration:none}#htmltagcloud a:hover{color:white;background-color:#05f}#htmltagcloud a:active{color:white;background-color:#03d}.wrd{padding:0;position:relative}.wrd a{text-decoration:none}.tagcloud0{font-size:1.0em;color:#ACC1F3;z-index:10}.tagcloud0 a{color:#ACC1F3}.tagcloud1{font-size:1.4em;color:#ACC1F3;z-index:9}.tagcloud1 a{color:#ACC1F3}.tagcloud2{font-size:1.8em;color:#86A0DC;z-index:8}.tagcloud2 a{color:#86A0DC}.tagcloud3{font-size:2.2em;color:#86A0DC;z-index:7}.tagcloud3 a{color:#86A0DC}.tagcloud4{font-size:2.6em;color:#607EC5;z-index:6}.tagcloud4 a{color:#607EC5}.tagcloud5{font-size:3.0em;color:#607EC5;z-index:5}.tagcloud5 a{color:#607EC5}.tagcloud6{font-size:3.3em;color:#4C6DB9;z-index:4}.tagcloud6 a{color:#4C6DB9}.tagcloud7{font-size:3.6em;color:#395CAE;z-index:3}.tagcloud7 a{color:#395CAE}.tagcloud8{font-size:3.9em;color:#264CA2;z-index:2}.tagcloud8 a{color:#264CA2}.tagcloud9{font-size:4.2em;color:#133B97;z-index:1}.tagcloud9 a{color:#133B97}.tagcloud10{font-size:4.5em;color:#002A8B;z-index:0}.tagcloud10 a{color:#002A8B}.freq{font-size:10pt !important;color:#bbb}#credit{text-align:center;color:#333;margin-bottom:0.6em;font:0.7em 'lucida grande',trebuchet,'trebuchet ms',verdana,arial,helvetica,sans-serif}#credit a:link{color:#777;text-decoration:none}#credit a:visited{color:#777;text-decoration:none}#credit a:hover{color:white;background-color:#05f}#credit a:active{text-decoration:underline}// -->
</style>

<div id="htmltagcloud"> <span id="0" class="wrd tagcloud0"><a href="#tagcloud">argentino</a></span> <span id="1" class="wrd tagcloud10"><a href="#tagcloud">banco</a></span> <span id="2" class="wrd tagcloud0"><a href="#tagcloud">bbva</a></span> <span id="3" class="wrd tagcloud10"><a href="#tagcloud">bcu</a></span> <span id="4" class="wrd tagcloud10"><a href="#tagcloud">brou</a></span> <span id="5" class="wrd tagcloud0"><a href="#tagcloud">cambilex</a></span> <span id="6" class="wrd tagcloud10"><a href="#tagcloud">cambio</a></span> <span id="7" class="wrd tagcloud10"><a href="#tagcloud">central</a></span> <span id="8" class="wrd tagcloud0"><a href="#tagcloud">compra</a></span> <span id="9" class="wrd tagcloud0"><a href="#tagcloud">cotizacion</a></span> <span id="10" class="wrd tagcloud10"><a href="#tagcloud">cotizaciones</a></span> <span id="11" class="wrd tagcloud10"><a href="#tagcloud">dolar</a></span> <span id="12" class="wrd tagcloud0"><a href="#tagcloud">indumex</a></span> <span id="13" class="wrd tagcloud0"><a href="#tagcloud">itau</a></span> <span id="14" class="wrd tagcloud0"><a href="#tagcloud">matriz</a></span> <span id="15" class="wrd tagcloud0"><a href="#tagcloud">moneda</a></span> <span id="16" class="wrd tagcloud10"><a href="#tagcloud">peso</a></span> <span id="17" class="wrd tagcloud0"><a href="#tagcloud">real</a></span> <span id="18" class="wrd tagcloud0"><a href="#tagcloud">urucambio</a></span> <span id="19" class="wrd tagcloud0"><a href="#tagcloud">venta</a></span> </div><div id="credit">created at <a href="https://tagcrowd.com">TagCrowd.com</a></div>

<!-- end tag cloud : generated by TagCrowd.com : please keep this notice -->


<section once="footers" class="cid-rNH8nFxXlL" id="footer7-3">

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    <li class="foot-menu-item mbr-fonts-style display-7">¿Te gustan los videojuegos?</li>
                    <li class="foot-menu-item mbr-fonts-style display-7"><a href="https://www.esunjuegazo.com/"
                                                                            target="_blank">Mirá nuestro blog</a></li>
                    <li class="foot-menu-item mbr-fonts-style display-7">
                        <a href="mailto:hola@esunjuegazo.com?subject=Acerca de Cotizaciones">Contáctanos</a>
                    </li>
                </ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">

                    <div class="soc-item">
                        <a href="https://twitter.com/ferning98" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://instagram.com/ferning98" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div>
                    
                </div>
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                        © Copyright 2020 Ferning98</p>
                </div>
            </div>
        </div>
</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/nav-dropdown.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script data-ad-client="ca-pub-7725224988753437" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155057910-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155057910-1');
</script>


</body>
</html>