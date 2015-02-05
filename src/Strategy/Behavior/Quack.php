<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:29
 */

namespace Strategy\Behavior;

use Strategy\QuackBehavior;

/**
 * 真的呱呱叫
 *
*@package Strategy\Behavior
 */
class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "Quack.\n";
    }
}
