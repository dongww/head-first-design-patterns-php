<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:42
 */

namespace Strategy\Duck;


use Strategy\Behavior\FlyWithWings;
use Strategy\Behavior\Quack;
use Strategy\Duck;

/**
 * 绿头鸭，会叫，会飞
 *
 * @package Strategy\Duck
 */
class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior   = new FlyWithWings();
    }

    public function display()
    {
        echo "I'm a real Mallard duck.\n";
    }
}
