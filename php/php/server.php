<?php
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

    require './vendor/autoload.php';

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
        new Chat(),
            )),
        8080
    );

    $server->run();