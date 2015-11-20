<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Clock.php';

    $app = new Silex\Application();
    $app['debug'] = TRUE;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function () use ($app)
    {
        return $app['twig']->render('time.html.twig');
    });

    $app->get('clock', function() use($app)
    {
        $my_Clock = new Clock;
        $time = $my_Clock->angle($_GET['hour'], $_GET['minute']);
        return $app['twig']->render('clock.html.twig', array('degrees' => $time));
    });

    return $app;
 ?>
