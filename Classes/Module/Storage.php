<?php
namespace PunktDe\Codeception\Webdriver\Module;

/*
 * This file is part of the PunktDe\Codeception-Webdriver package.
 *
 * This package is open source software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Codeception\Exception\ModuleException;
use Codeception\Lib\ModuleContainer;
use Codeception\Module;
use PHPUnit\Framework\Assert;

class Storage extends Module
{
    /**
     * @var string
     */
    protected $textStorage = '';

    /**
     * @param string $selector
     * @throws ModuleException
     */
    public function storeTextOfElement(string $selector): void
    {
        $webdriver = $this->getModule('WebDriver');
        $this->textStorage = $webdriver->grabTextFrom($selector);
    }


    public function clearTextStore(): void
    {
        $this->textStorage = '';
    }

    /**
     * @param string $selector
     * @throws ModuleException
     */
    public function elementTextShouldNotBeEqualToStore(string $selector): void
    {
        $webdriver = $this->getModule('WebDriver');
        $actual = $webdriver->grabTextFrom($selector);

        Assert::assertNotEquals($this->textStorage, $actual, 'Text is equal but should not be');
    }
}
