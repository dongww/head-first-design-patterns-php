<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:30
 */

namespace Strategy\Behavior;

use Strategy\QuackBehavior;

/**
 * 名为呱呱叫，其实是吱吱叫
 *
*@package Strategy\Behavior
 */
class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "Squeak.\n";
    }
}
