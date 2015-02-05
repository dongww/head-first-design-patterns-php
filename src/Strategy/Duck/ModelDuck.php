<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:50
 */

namespace Strategy\Duck;


use Strategy\Behavior\FlyNoWay;
use Strategy\Behavior\Quack;
use Strategy\Duck;

/**
 * 模型鸭，会叫不会飞
 *
 * @package Strategy\Duck
 */
class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior   = new FlyNoWay();
    }

    public function display()
    {
        echo "I'm a model duck.\n";
    }
}
