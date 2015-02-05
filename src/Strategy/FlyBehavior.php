<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:16
 */

namespace Strategy;

/**
 * 所有飞行类都要实现它，所有新的飞行类都必须实现 fly() 方法
 *
 * @package Strategy\Behavior
 */
interface FlyBehavior
{
    public function fly();
}
