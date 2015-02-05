<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:53
 */

namespace Strategy\Behavior;

use Strategy\FlyBehavior;

/**
 * 利用火箭动力的飞行行为
 *
 * @package Strategy\Behavior
 */
class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying with a rocket!\n";
    }
}
