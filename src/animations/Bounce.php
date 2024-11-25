<?php

declare(strict_types=1);

namespace yii\fontawesome\animations;

/**
 * {@inheritDoc}
 *
 * Bounce animation
 * @see https://fontawesome.com/docs/web/style/animate#bounce
 */
class Bounce extends AbstractAnimation
{
    /**
     * @param int $rebound Set the amount of rebound an icon has when landing after the jump
     * @return $this
     */
    public function rebound(int $rebound): static
    {
        $this->utilities['rebound'] = $rebound;

        return $this;
    }

    /**
     * @param float $height Set the max height an icon will jump to when bouncing
     * @return $this
     */
    public function height(float $height): static
    {
        $this->utilities['height'] = $height;

        return $this;
    }

    /**
     * @param bool $startScaleX Set the icon's horizontal distortion ("squish") when starting to bounce
     * @return $this
     */
    public function startScaleX(bool $startScaleX): static
    {
        $this->utilities['start-scale-x'] = (int)$startScaleX;

        return $this;
    }

    /**
     * @param bool $startScaleY Set the icon's vertical distortion ("squish") when starting to bounce
     * @return $this
     */
    public function startScaleY(bool $startScaleY): static
    {
        $this->utilities['start-scale-y'] = (int)$startScaleY;

        return $this;
    }

    /**
     * @param bool $jumpScaleX Set the icon's horizontal distortion ("squish") at the top of the jump
     * @return $this
     */
    public function jumpScaleX(bool $jumpScaleX): static
    {
        $this->utilities['jump-scale-x'] = (int)$jumpScaleX;

        return $this;
    }

    /**
     * @param bool $jumpScaleY Set the icon's vertical distortion ("squish") at the top of the jump
     * @return $this
     */
    public function jumpScaleY(bool $jumpScaleY): static
    {
        $this->utilities['jump-scale-y'] = (int)$jumpScaleY;

        return $this;
    }

    /**
     * @param bool $landScaleX Set the icon's horizontal distortion ("squish") when landing after the jump
     * @return $this
     */
    public function landScaleX(bool $landScaleX): static
    {
        $this->utilities['land-scale-x'] = (int)$landScaleX;

        return $this;
    }

    /**
     * @param bool $landScaleY Set the icon's vertical distortion ("squish") when landing after the jump
     * @return $this
     */
    public function landScaleY(bool $landScaleY): static
    {
        $this->utilities['land-scale-y'] = (int)$landScaleY;

        return $this;
    }

}
