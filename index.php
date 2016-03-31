<?php
    require 'vendor/autoload.php';

    $app = new \Slim\Slim();


    $app->post('/message', function() use ($app) {
        /*
          Example request body: {
            token: HDJ3q24J5634JBGhf3sfs32S
            team_id: T0001
            team_domain: example
            channel_id: C2147483705
            channel_name: test
            user_id: U2147483697
            user_name: Steve
            command: /weather
            text: 94070
            response_url: https://hooks.slack.com/commands/1234/5678
          }
        */
        $body = $app->request->getBody();

        echo json_stringify($body);
    });

    $app->run();
?>
