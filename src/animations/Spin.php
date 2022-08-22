<?php

namespace yii\fontawesome\animations;

/**
 * {@inheritDoc}
 *
 * Spin animation
 * @see https://fontawesome.com/docs/web/style/animate#spin
 */
class Spin extends AbstractAnimation
{
    /**
     * Makes an icon spin 360° clockwise in 8 incremental steps
     * @return $this
     */
    public function pulse(): static
    {
        $this->utilities['pulse'] = true;
        return $this;
    }

    /**
     * When used in conjunction with fa-spin or fa-spin-pulse, makes an icon spin counter-clockwise.
     * @return $this
     */
    public function reverse(): static
    {
        $this->utilities['reverse'] = 1;
        return $this;
    }
}
