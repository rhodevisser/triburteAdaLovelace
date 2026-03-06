<?php
// ** PROBLEEM SOLVEN MELDING OVER DAT DB NIET BESTAAT:
// TABLE IN MY SQL AANMAKEN MET DAARIN ID'S ED
// TESTEN OF DE FOUTMELDING WEGGAAT.

// QUERY THE MYSQL TABLE FROM THIS PHP (SELECT * ...)

$config = require base_path('config.php');
$db = new Database($config['database']);

$resources = $db->query('select * from resources where id = 1')->get();


view("bronnen.view.php", [
    'heading' => 'BRONNEN',
    'resources' => $resources
]);
