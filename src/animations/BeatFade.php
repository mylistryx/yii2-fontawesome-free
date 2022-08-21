<?php
declare(strict_types=1);

namespace yii\fontawesome\animations;

/**
 * {@inheritDoc}
 *
 * BeatFade animation
 * @see https://fontawesome.com/docs/web/style/animate#beat-fade
 */
class BeatFade extends AbstractAnimation
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

    /**
     * @param float $opacity Set lowest opacity value an icon will fade to and from
     * @return $this
     */
    public function opacity(float $opacity): static
    {
        $this->utilities['opacity'] = $opacity;
        return $this;
    }
}
