<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\SocketServer;


$Server = IoServer::factory (
	new HttpServer (
		new WsServer (
			new Chat ()
		)
	),
	12345
);

$Server->run ();
