<?php

namespace yii\fontawesome;

/**
 * FontAwesome Solid helper
 * Use FA::icon('icon-name')
 * Icon name must be without fa- prefix
 * List
 */
class FA extends FontAwesome
{
    public static string $cssPrefix = 'fa-solid';
    protected static array $allowedMethods = [];
}
