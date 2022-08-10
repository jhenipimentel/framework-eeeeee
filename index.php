<?php
//dd(__DIR__); //metofd magico a posicao do diretorio,

$mainPosition = __DIR__;

require_once("{$mainPosition}\bootstrap\Env.php");
require_once("{$mainPosition}\helper\helper.php");

Env::execute();

dd($_ENV['DB_HOST']);

