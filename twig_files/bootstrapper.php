<?php
#ini_set('display_errors',1); # uncomment if you need debugging

spl_autoload_register(function ($classname) {
    $dirs = array (
        '/www/intercall/customsites/twigtest/twig_files/Twig-2.11.3/'
    );

    foreach ($dirs as $dir) {
        $filename = $dir . str_replace('\\', '/', $classname) .'.php';
        if (file_exists($filename)) {
            require_once $filename;
            break;
        }
    }
});

$loader = new \Twig\Loader\FilesystemLoader('../twig_files/templates');
$twig = new \Twig\Environment($loader, [
    //'cache' => 'cache',
]);
?>