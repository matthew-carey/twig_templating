<?php
require_once('../twig_files/bootstrapper.php');

echo $twig->render('home.html', ['name' => 'Media Group Friends']);
?>