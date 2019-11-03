<?php
namespace PunktDe\Codeception\Webdriver\ActorTraits;

/*
 * This file is part of the PunktDe\Codeception-Webdriver package.
 *
 * This package is open source software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

trait Switchers {
    /**
     * @param string|null $name
     * @Given I switch to iFrame :name
     */
    public function iSwitchToIFrame(?string $name = null): void
    {
        $this->switchToIFrame($name);
    }

    /**
     * @param string $window
     * @Given I switch to Window :window
     */
    public function iSwitchToWindow(?string $window): void
    {
        $this->switchToWindow($window);
    }
}