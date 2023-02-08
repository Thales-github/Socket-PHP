<?php
// include "./vendor/autoload.php";
require dirname(__DIR__) . '/vendor/autoload.php';

$client = new WebSocket\Client("ws://localhost:789");
$client->text('router abrindo o canal');


while (true) {
    try {
        $message = $client->receive();
        if ($message) {

            print_r($message);
            echo "\n";
        }
    } catch (\WebSocket\ConnectionException $e) {
        // Possibly log errors
        // print_r("Error: " . $e->getMessage());
    }
}
$client->close();
