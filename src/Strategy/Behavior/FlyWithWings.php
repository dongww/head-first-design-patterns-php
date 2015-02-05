<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:19
 */

namespace Strategy\Behavior;

use Strategy\FlyBehavior;

/**
 * 实现了所有有翅膀鸭子的飞行动作
 *
*@package Strategy\Behavior
 */
class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying.\n";
    }
}
