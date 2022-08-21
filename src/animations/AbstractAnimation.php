<?php
declare(strict_types=1);

namespace yii\fontawesome\animations;

use ReflectionClass;
use yii\helpers\Inflector;

/**
 * Base animation class
 */
abstract class AbstractAnimation
{
    public readonly string $name;

    protected array $utilities = [];

    /**
     * @param ...$config
     */
    public function __construct(...$config)
    {
        foreach ($config as $key => $value) {
            $key = Inflector::id2camel($key);
            if (is_callable([$this, $key])) {
                $this->$key($value);
            }
        }

        $reflect = new ReflectionClass($this);
        $this->name = strtolower($reflect->getShortName());
    }

    public function getUtilities(): array
    {
        return $this->utilities;
    }
}