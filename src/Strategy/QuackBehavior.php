<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:18
 */

namespace Strategy;

/**
 * 所有呱呱叫的类都要实现它
 *
 * @package Strategy\Behavior
 */
interface QuackBehavior
{
    public function quack();
}
