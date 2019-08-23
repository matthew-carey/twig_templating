<?php

#ini_set('display_errors',1); # uncomment if you need debugging

spl_autoload_register(function ($classname) {
    $dirs = array (
        '../lib/Twig/Autoloader.php' #./path/to/dir_where_src_renamed_to_Twig_is_in
    );

    foreach ($dirs as $dir) {
        $filename = $dir . str_replace('\\', '/', $classname) .'.php';
        if (file_exists($filename)) {
            require_once $filename;
            break;
        }
    }

});

$loader = new lib\Twig\Loader\FilesystemLoader('templates');
$twig = new lib\Twig\Environment($loader, [
    'cache' => 'cache',
]);
/*
require_once("../lib/Twig/Autoloader.php" );
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../templates/');
$twig = new Twig_Environment($loader);
*/
echo $twig->render('home.html', array('name' => 'World'));
?>