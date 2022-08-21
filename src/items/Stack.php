<?php

namespace yii\fontawesome\items;

use yii\base\InvalidConfigException;
use yii\fontawesome\FontAwesome;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Stack
{
    /**
     * @var Icon
     */
    private Icon $iconFront;

    /**
     * @var string|null
     */
    private ?string $textFront = null;

    /**
     * @var Icon
     */
    private Icon $iconBack;

    /**
     * @param string $iconCssPrefix
     * @param array $options
     */
    public function __construct(private readonly string $iconCssPrefix, private array $options = [])
    {
        Html::addCssClass($this->options, FontAwesome::$basePrefix . '-stack');
    }

    /**
     * @return string
     * @throws InvalidConfigException
     */
    public function __toString()
    {
        $options = $this->options;

        $tag = ArrayHelper::remove($options, 'tag', 'span');

        $template = ArrayHelper::remove($options, 'template', '{back}{front}');

        $iconBack = $this->iconBack instanceof Icon
            ? $this->iconBack->addCssClass(FontAwesome::$basePrefix . '-stack-2x')
            : null;

        if ($this->textFront !== null) {
            $contentFront = $this->textFront;
        } else {
            $contentFront = $this->iconFront instanceof Icon
                ? $this->iconFront->addCssClass(FontAwesome::$basePrefix . '-stack-1x')
                : null;
        }

        $content = str_replace(['{back}', '{front}'], [$iconBack, $contentFront], $template);

        return Html::tag($tag, $content, $options);
    }


    public function icon($icon, array $options = []): static
    {
        if (is_string($icon)) {
            $icon = new Icon($this->iconCssPrefix, $icon, $options);
        }

        $this->iconFront = $icon;

        return $this;
    }

    /**
     * @param string $text
     * @param array $options
     * @return $this
     */
    public function text(string $text = '', array $options = []): static
    {
        $tag = ArrayHelper::remove($options, 'tag', 'span');

        Html::addCssClass($options, FontAwesome::$basePrefix . '-stack-1x');

        $this->textFront = Html::tag($tag, $text, $options);

        return $this;
    }


    public function on($icon, $options = []): static
    {
        if (is_string($icon)) {
            $icon = new Icon($this->iconCssPrefix, $icon, $options);
        }

        $this->iconBack = $icon;

        return $this;
    }
}
