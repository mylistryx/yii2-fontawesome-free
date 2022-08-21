<?php

use yii\BaseYii;
use yii\fontawesome\animations\Beat;
use yii\fontawesome\animations\Fade;
use yii\fontawesome\FAS;

require dirname(__DIR__) . '/vendor/autoload.php';

class Yii extends BaseYii
{
}

$beat = new Beat(scale: 4);
//$beat2 = new Beat(scale: 5);
$fade = new Fade(scope: 0.6);

echo FAS::iconAnchorCircleXmark()
    ->animate($beat)
//    ->animate($beat2)
    ->animate($fade)
    ->void();
//    ->fade(3);