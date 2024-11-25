<?php

declare(strict_types=1);

namespace yii\fontawesome\animations;

/**
 * {@inheritDoc}
 *
 * Beat animation
 * @see https://fontawesome.com/docs/web/style/animate#beat
 */
class Beat extends AbstractAnimation
{
    /**
     * @param float $scale Set max value that an icon will scale
     * @return $this
     */
    public function scale(float $scale): static
    {
        $this->utilities['scale'] = $scale;

        return $this;
    }
}
