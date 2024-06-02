<?php

define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'sj_2_2024',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);*/

session_start();

require_once('classes/Contact.php');
require_once('classes/Database.php');
require_once('classes/Galery.php');
require_once('classes/Navigation.php');
require_once('classes/Page.php');
require_once('classes/Qna.php');
require_once('classes/User.php');

?>