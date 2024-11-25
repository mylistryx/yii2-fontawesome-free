<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use yii\BaseYii;
use yii\helpers\Inflector;

class Parser
{
    private array $types = [
        'FAS' => 'solid',
        'FAR' => 'regular',
        'FAB' => 'brands',
    ];

    public function __construct(private array $items = [])
    {
        $baseDir = dirname(__DIR__) . '/vendor/bower-asset/font-awesome/svgs/';
        foreach ($this->types as $index => $type) {
            if (!is_dir($baseDir . $type)) {
                continue;
            }

            $items = array_diff(scandir("{$baseDir}{$type}"), ['.', '..']);

            foreach ($items as &$item) {
                $item = str_replace('.svg', '', $item);
            }

            $this->items[$index] = $items;
        }

        $this->getConst();
        $this->getMethods();
    }

    public function getConst(): void
    {
        foreach ($this->items as $type => $items) {
            $const = [];
            foreach ($items as $item) {
                $const[] = "public const _" . strtoupper(str_replace('-', '_', $item)) . " = '{$item}';";
            }
            $constants = implode("\n", $const);
            file_put_contents(__DIR__ . "/out/const_{$type}.txt", $constants);
        }
    }

    public function getMethods(): void
    {
        foreach ($this->items as $type => $items) {
            $methods = [];
            $allowed = [];
            foreach ($items as $item) {
                $method = 'icon' . Inflector::id2camel($item);
                $methods[] = "* @method static Icon {$method}(array \$params = [])";
                $allowed[] = "'$method'";
            }
            $methods = array_unique($methods);
            sort($methods);
            $methods = implode("\n", $methods);
            $allowed = implode(",\n", $allowed);
            file_put_contents(__DIR__ . "/out/methods_{$type}.txt", $methods);
            file_put_contents(__DIR__ . "/out/allowed_{$type}.txt", $allowed);
        }
    }
}

class Yii extends BaseYii {}

$parser = new Parser();