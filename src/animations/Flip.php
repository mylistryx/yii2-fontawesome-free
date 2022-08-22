<?php

namespace yii\fontawesome\animations;

/**
 * {@inheritDoc}
 *
 * Flip animation
 * @see https://fontawesome.com/docs/web/style/animate#flip
 */
class Flip extends AbstractAnimation
{
    /**
     * @param float $flipX Set x-coordinate of the vector denoting the axis of rotation (between 0 and 1)
     * @return $this
     */
    public function flipX(float $flipX): static
    {
        $this->utilities['flip-x'] = $flipX;
        return $this;
    }

    /**
     * @param float $flipY Set y-coordinate of the vector denoting the axis of rotation (between 0 and 1)
     * @return $this
     */
    public function flipY(float $flipY): static
    {
        $this->utilities['flip-y'] = $flipY;
        return $this;
    }

    /**
     * @param float $flipZ Set z-coordinate of the vector denoting the axis of rotation (between 0 and 1)
     * @return $this
     */
    public function flipZ(float $flipZ): static
    {
        $this->utilities['flip-z'] = $flipZ;
        return $this;
    }

    /**
     * @param float $flipAngle Set rotation angle of flip. A positive angle denotes a clockwise rotation, a negative angle a counter-clockwise one.
     * @return $this
     */
    public function flipAngle(float $flipAngle): static
    {
        $this->utilities['flip-angle'] = $flipAngle;
        return $this;
    }
}
