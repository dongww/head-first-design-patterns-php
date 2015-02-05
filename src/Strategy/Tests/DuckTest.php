<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 15:02
 */

namespace Strategy\Tests;


use Strategy\Behavior\FlyRocketPowered;
use Strategy\Duck\MallardDuck;
use Strategy\Duck\ModelDuck;

class DuckTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MallardDuck
     */
    protected $mallardDuck;

    /**
     * @var ModelDuck
     */
    protected $modelDuck;

    public function setup()
    {
        $this->mallardDuck = new MallardDuck();
        $this->modelDuck   = new ModelDuck();
    }

    public function testMallardDuckFly()
    {
        $this->expectOutputString("I'm flying.\n");
        $this->mallardDuck->performFly();
    }

    public function testMallardDuckQuack()
    {
        $this->expectOutputString("Quack.\n");
        $this->mallardDuck->performQuack();
    }

    public function testModelDuckFly()
    {
        $this->expectOutputString("I can't fly.\n");
        $this->modelDuck->performFly();
    }

    public function testModelDuckQuack()
    {
        $this->expectOutputString("Quack.\n");
        $this->modelDuck->performQuack();
    }

    public function testModelDuckWithRocketPowered()
    {
        $this->modelDuck->setFlyBehavior(new FlyRocketPowered());
        $this->expectOutputString("I'm flying with a rocket!\n");
        $this->modelDuck->performFly();
    }
}
