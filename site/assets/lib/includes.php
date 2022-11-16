<?php
    date_default_timezone_set("America/Manaus");
    include("connect.php");
    include("classes.php");

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/project/painel/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/project/site/";