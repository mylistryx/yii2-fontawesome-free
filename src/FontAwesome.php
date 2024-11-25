<?php

namespace yii\fontawesome;

use yii\fontawesome\items\Icon;
use yii\fontawesome\items\Stack;
use yii\fontawesome\items\UnorderedList;
use yii\helpers\Inflector;

abstract class FontAwesome
{
    /**
     * @var string
     */
    public static string $cssPrefix;
    /**
     * @var string
     */
    public static string $basePrefix = 'fa';
    protected static array $allowedMethods = [];

    /**
     * @param array $options
     * @return Stack
     */
    public static function s(array $options = []): Stack
    {
        return static::stack($options);
    }

    /**
     * @param array $options
     * @return Stack
     */
    public static function stack(array $options = []): Stack
    {
        return new Stack(static::$cssPrefix, $options);
    }

    /**
     * @param array $options
     * @return UnorderedList
     */
    public static function ul(array $options = []): UnorderedList
    {
        return new UnorderedList(static::$cssPrefix, $options);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return Icon
     */
    public static function __callStatic(string $name, array $arguments = []): Icon
    {
        $name = Inflector::camel2id(substr($name, 4));

        return static::i($name, $arguments);
    }

    /**
     * @param string $name
     * @param array $options
     * @return Icon
     */
    public static function i(string $name, array $options = []): Icon
    {
        return static::icon($name, $options);
    }

    /**
     * @param string $name
     * @param array $options
     * @return Icon
     */
    public static function icon(string $name, array $options = []): Icon
    {
        return new Icon(static::$cssPrefix, $name, $options);
    }
}
