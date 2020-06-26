<?php

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token,$collector_id,$notificationJSON;


// Este servicio llama a la URL recibida en la notificación
// Para ver el estado del pago.

$lastResource = file_get_contents('../notifications.txt');

$url = "https://api.mercadopago.com/v1/payments/".$collector_id."?access_token=".$access_token;
// REVISAR AQUÍ:
// Agrega la $url necesaria para revisar el estado del pago en base al recurso recibido de la notificación

// Sustituye el método por su correspondiente: get, put, post, delete

//https://www.mercadopago.cl/developers/es/reference/payments/_payments_id/get/

curl_call("GET",$url,"");

 ?>