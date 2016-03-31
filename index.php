<?php
    require 'vendor/autoload.php';
    
    $app = new \Slim\Slim();
    
    $app->post('/message', function() use ($app) {
        $body = $app->request->getBody();

        echo $body;
    });

    $app->run();
?>
