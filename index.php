<?php

require_once __DIR__.'/vendor/autoload.php';

use Dust\Dust;
use Spree\Duster;

$data = ['languages' => ['HTML', 'CSS', 'jQuery', 'Nodejs', 'PHP']];

$duster = new Duster(new Dust);

echo $duster->render('pages/home', $data);

