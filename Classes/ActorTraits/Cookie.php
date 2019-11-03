<?php
namespace PunktDe\Codeception\Webdriver\ActorTraits;

/*
 * This file is part of the PunktDe\Codeception-Webdriver package.
 *
 * This package is open source software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

trait Cookie {
    /**
     * @Then the cookie :cookie has value :value
     */
    public function cookieHasValue($cookie, $value)
    {
        $this->seeCookie($cookie);
        $actualCookie = $this->grabCookie($cookie);
        if ($actualCookie !== $value) {
            throw new \Exception(sprintf('Cookie "%s" doesn\'t have expected value "%s", actual value is "%s"', $cookie, $value, $actualCookie), 1552656511);
        }
    }

    /**
     * @Then I set cookie :cookie with value :value
     */
    public function iSetCookie($cookie, $value)
    {
        $this->setCookie($cookie, $value);
    }

    /**
     * @Then I remove cookie :cookie
     */
    public function iRemoveCookie($cookie)
    {
        $this->resetCookie($cookie);
    }
}
