<?php
require_once('../twig_files/bootstrapper.php');

$template = $twig->load('home.html');
$twig->display(
    $template,
    array(
        'name' => 'Matt Carey',
        'age' => '40',
        'users' => array(
            array('name'=>'Amelia','age'=>7),
            array('name'=>'Elliot','age'=>11),
            array('name'=>'Angie','age'=>42),
        ),
    )
);
/*
echo $template->renderBlock(
    'content',
    array(
        'name' => 'Matt Carey',
        'age' => '40',
        'users' => array(
            array('name'=>'Amelia','age'=>7),
            array('name'=>'Elliot','age'=>11),
            array('name'=>'Angie','age'=>42),
        ),
    )
);
*/

/*
echo $twig->render('home.html', array(
    'name' => 'Matt Carey',
    'age' => '40',
    'users' => array(
        array('name'=>'Amelia','age'=>7),
        array('name'=>'Elliot','age'=>11),
        array('name'=>'Angie','age'=>42),
    ),
));
*/
?>