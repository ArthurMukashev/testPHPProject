<?php

defined('MUK_ACCESS') or die('ACCESS DENIED');

$url = urldecode($_SERVER['REQUEST_URI']);

if ($url === PATH){
    $content = require_once 'templates/main/index.php';
    return require_once 'templates/base.php';
}