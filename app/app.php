<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('anagram.html.twig');
    });

    $app->get("/anagram", function() use ($app) {
        $anagram = new Anagram;
        $anagram_list = $anagram->findAnagram($_GET['word'], $_GET['test']);
        return $app['twig']->render('anagram_list.html.twig', array('result' => $anagram_list));
    });
    // $app->get("/anagram", function() use($app){
    //     $my_Anagram = new Anagram;
    //     $my_anagram_list = $my_Anagram->findAnagram($_GET['word']);
    //     return $app['twig']->render('anagram_list.html.twig', array('result' => $anagram_result));
    // });

    return $app;
?>
