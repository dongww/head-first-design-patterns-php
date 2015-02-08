<?php
/**
 * User: dongww
 * Date: 2015-2-5
 * Time: 15:27
 */

namespace Observer\Display;

use Observer\DisplayElement;
use SplSubject;

class ThirdPartyDisplay implements \SplObserver, DisplayElement
{

    public function display()
    {
        // TODO: Implement display() method.
    }

    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
    }
}
