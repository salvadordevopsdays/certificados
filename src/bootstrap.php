<?php
/**
 * Created by PhpStorm.
 * User: colares
 * Date: 31/10/17
 * Time: 08:12
 */

// Load our autoloader
require "../vendor/autoload.php";

//// Especifica o local dos templates
$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');

// Instancia o Twig
$twig = new Twig_Environment($loader);