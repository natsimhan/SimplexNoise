<?php

namespace Natsimhan\SimplexNoise;

/**
 * Inner class of SimplexNoise to speed upp gradient computations
 *
 * @author        : original : Stefan GUSTAVSON
 * @author        : PHP's adaptation : Jonathan BURON <jonathan@ouebsson.fr>
 * @documentation : https://weber.itn.liu.se/~stegu/simplexnoise/simplexnoise.pdf
 * @source        : https://weber.itn.liu.se/~stegu/simplexnoise/SimplexNoise.java
 */
final class Grad {

  public function __construct(
    public float $x,
    public float $y,
    public float $z,
    public float $w = 0
  ) {
  }

}
