<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:31
 */

namespace Strategy\Behavior;

use Strategy\QuackBehavior;

/**
 * 名为呱呱叫，其实不发声
 *
*@package Strategy\Behavior
 */
class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "<<Silence>>\n";
    }
}
