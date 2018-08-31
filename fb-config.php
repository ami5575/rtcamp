<?php
session_start();
require_once './Facebook/autoload.php';
$facebook=new \Facebook\Facebook([
    'app_id'=>'255142051874019',
    'app_secret'=>'f7b36a554e152fb3fc3bb7bc5ea14395',
    'default_graph_version'=>'v2.10'
]);

$helper=$facebook->getRedirectLoginHelper();


?>