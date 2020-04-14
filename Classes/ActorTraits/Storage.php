<?php
namespace PunktDe\Codeception\Webdriver\ActorTraits;

/*
 * This file is part of the PunktDe\Codeception-Webdriver package.
 *
 * This package is open source software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

trait Storage {
    /**
     * @Given I memorize the text in the :selector element
     * @param string $selector
     */
    public function iMemorizeTextInElement(string $selector): void
    {
        $this->storeTextOfElement($selector);
    }
 
     /**
      * @Given I forget the memorized text
      */
    public function iForgetText(): void
    {
        $this->clearTextStore();
    }

    /**
     * @Given the text in the :selector element should be different from memorized
     * @param string $selector
     */
    public function elementTextShouldBeDifferentFromMemorized(string $selector): void
    {
         $this->elementTextShouldNotBeEqualToStore($selector);
    }

    /**
     * @Given the text in the :selector element should be equal from memorized
     * @param string $selector
     */
    public function elementTextShouldBeEqualFromMemorized(string $selector): void
    {
         $this->elementTextShouldBeEqualToStore($selector);
    }
}
