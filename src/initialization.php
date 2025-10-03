<?php
//Root du fichier
define("ROOT", dirname(__DIR__));

//Constante pour la template
const TEMPLATE = ROOT . '/template';

//Constante pour les urls
const URL_ROOT = '/';

//Constante pour les images
const IMG = URL_ROOT . 'public/img/';

//Constante pour savoir si le serveur est POST
$isPost = false;
if($_SERVER['REQUEST_METHOD'] === 'POST')
    $isPost = true;
define("IS_POST", $isPost);
?>