<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$resources = $db->query('select * from resources where id =1')->get();

view("hall-of-fame-biografie.view.php", [
    'heading' => 'BIOGRAFIE',
    'resources' => $resources
]);
