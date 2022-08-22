<?php

use yii\BaseYii;
use yii\fontawesome\animations\Beat;
use yii\fontawesome\animations\Bounce;
use yii\fontawesome\animations\Fade;
use yii\fontawesome\animations\Spin;
use yii\fontawesome\FAS;

require dirname(__DIR__) . '/vendor/autoload.php';

class Yii extends BaseYii
{
}

$beat = new Beat(scale: 4);
$fade = new Fade(scope: 0.6);
$bounce = (new Bounce(startScaleX: true))->startScaleY(false)->height(3);
$spin = (new Spin())->pulse();

echo FAS::iconAnchorCircleXmark()
    ->animate($beat)
    ->animate($bounce)
    ->animate($fade)
    ->void();
echo "\n\n";
echo FAS::iconAnchorCircleXmark()
    ->animate($beat->scale(3))
    ->animate($bounce)
    ->animate($fade)
    ->animate($spin)
    ->void();
