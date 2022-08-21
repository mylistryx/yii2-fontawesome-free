<?php

namespace yii\fontawesome\transformations;

abstract class AbstractTransformation
{
    public readonly string $name;

    protected array $utilities;

    /**
     * @param ...$config
     */
    public function __construct(string $name, ...$config)
    {
        foreach ($config as $key => $value) {
            $this->utilities[$key] = $value;
        }

        $this->name = $name;
    }

    public function getUtilities(): array
    {
        return $this->utilities;
    }
}