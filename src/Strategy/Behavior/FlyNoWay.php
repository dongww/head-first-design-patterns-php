<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:27
 */

namespace Strategy\Behavior;

use Strategy\FlyBehavior;

/**
 * 实现了所有不会飞的鸭子的动作
 *
*@package Strategy\Behavior
 */
class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "I can't fly.\n";
    }
}
