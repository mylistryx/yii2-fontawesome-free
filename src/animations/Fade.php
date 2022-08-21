<?php
declare(strict_types=1);

namespace yii\fontawesome\animations;

/**
 * {@inheritDoc}
 *
 * Fade animation
 * @see https://fontawesome.com/docs/web/style/animate#fade
 */
class Fade extends AbstractAnimation
{
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
