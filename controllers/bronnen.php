<?php
// ** PROBLEEM SOLVEN MELDING OVER DAT DB NIET BESTAAT:
// TABLE IN MY SQL AANMAKEN MET DAARIN ID'S ED
// TESTEN OF DE FOUTMELDING WEGGAAT.

// QUERY THE MYSQL TABLE FROM THIS PHP (SELECT * ...)

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'BRONNEN'; 

$resources = $db->query('select * from resources where id = 1')->get();


require "views/bronnen.view.php";


