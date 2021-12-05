<?php
header ("Access-Control-Allow-Origin: *");
header ("Content-Type: application/json");

$data = array(
    array('firstname' => 'Jouni','lastname' => 'Juntunen','email' => 'jjuntunen@oamk.fi'),
    array('firstname' => 'Kaisa','lastname' => 'Kuntunen','email' => 'kjuntunen@oamk.fi'),
    array('firstname' => 'Matti','lastname' => 'Muntunen','email' => 'mjuntunen@oamk.fi'),
    array('firstname' => 'Harri','lastname' => 'Huntunen','email' => 'hjuntunen@oamk.fi'),
    array('firstname' => 'Leena','lastname' => 'Luntunen','email' => 'ljuntunen@oamk.fi')
);

$json = json_encode($data,JSON_PRETTY_PRINT);
print $json;