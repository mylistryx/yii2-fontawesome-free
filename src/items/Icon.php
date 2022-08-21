<?php

namespace yii\fontawesome\items;

use yii\fontawesome\animations\AbstractAnimation;
use yii\fontawesome\FontAwesome;
use yii\fontawesome\transformations\AbstractTransformation;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Icon
{
    /**
     * @param string $cssPrefix
     * @param string $name
     * @param array $options
     */
    public function __construct(string $cssPrefix, string $name, private array $options = [])
    {
        Html::addCssClass($this->options, $cssPrefix);

        if (!empty($name)) {
            Html::addCssClass($this->options, FontAwesome::$basePrefix . '-' . $name);
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $options = $this->options;
        $tag = ArrayHelper::remove($options, 'tag', 'i');
        return Html::tag($tag, null, $options);
    }

    /**
     * @param AbstractAnimation $animation
     * @param bool $overwrite
     * @return $this
     */
    public function animate(AbstractAnimation $animation, bool $overwrite = true): static
    {
        $this->addCssClass(FontAwesome::$basePrefix . '-' . $animation->name);

        foreach ($animation->getUtilities() as $name => $value) {
            $this->addCssStyle('--' . FontAwesome::$basePrefix . '-' . $animation->name . '-' . $name . ':' . $value, $overwrite);
        }

        return $this;
    }

    /**
     * @param AbstractTransformation $transformation
     * @return $this
     */
    public function transform(AbstractTransformation $transformation): static
    {
        return $this;
    }

    /**
     * @return $this
     */
    public function li(): static
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-li');
    }

    /**
     * @param string $class
     * @param bool $condition
     * @param string|null $throw
     * @return $this
     */
    public function addCssClass(string $class, bool $condition = true, ?string $throw = null): static
    {
        Html::addCssClass($this->options, $class);

        return $this;
    }

    /**
     * @param array|string $style
     * @param bool $overwrite
     * @return $this
     */
    public function addCssStyle(array|string $style, bool $overwrite = true): static
    {
        Html::addCssStyle($this->options, $style, $overwrite);

        return $this;
    }

    /**
     * MultiLineDebug feature.
     * FAS::iconAnchorCircleXmark()
     * ->animate($beat)
     * //->animate($fade)
     * ->void();
     * @return $this
     */
    public function void(): static
    {
        return $this;
    }
}
