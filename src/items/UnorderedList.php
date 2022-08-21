<?php

namespace yii\fontawesome\items;

use yii\fontawesome\FontAwesome;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class UnorderedList
{
    /**
     * @var array
     */
    private array $items = [];

    /**
     * @param string $iconCssPrefix
     * @param array $options
     */
    public function __construct(private readonly string $iconCssPrefix, private array $options = [])
    {
        Html::addCssClass($this->options, FontAwesome::$basePrefix . '-ul');

        $this->options['item'] = function ($item, $index) {
            return call_user_func($item, $index);
        };
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return Html::ul($this->items, $this->options);
    }

    /**
     * @param string $label
     * @param array $options
     * @return $this
     */
    public function item(string $label, array $options = []): static
    {
        $this->items[] = function () use ($label, $options) {
            $tag = ArrayHelper::remove($options, 'tag', 'li');

            $icon = ArrayHelper::remove($options, 'icon');
            $icon = empty($icon)
                ? null
                : (is_string($icon) ? (string)(new Icon($this->iconCssPrefix, $icon))->li() : $icon);

            $content = trim($icon . $label);

            return Html::tag($tag, $content, $options);
        };

        return $this;
    }
}
