<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 13:34
 */

namespace Strategy;


abstract class Duck
{
    /** @var  FlyBehavior */
    protected $flyBehavior;
    /** @var  QuackBehavior */
    protected $quackBehavior;

    /**
     * 委托给行为类
     */
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    /**
     * 委托给行为类
     */
    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!\n";
    }

    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }

    abstract public function display();
}
