<?php
namespace PunktDe\Codeception\Webdriver\ActorTraits;

/*
 * This file is part of the PunktDe\Codeception-Webdriver package.
 *
 * This package is open source software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */
use WebDriverKeys;

trait Webdriver {
    /**
     * @Given I am on :page
     */
    public function iAmOn($page)
    {
        $this->amOnPage($page);
    }

    /**
     * @Given I wait for the text :text
     * @Given /^I wait for the text (?P<pattern>"(?:[^"]|\\")*")$/
     */
    public function iWaitForTheText($text)
    {
        $text = str_replace('\\', '', $text);
        $this->waitForText($text);
    }

    /**
     * @Given I fill in :field with :value
     */
    public function iFillInWith($field, $value)
    {
        $this->fillField($field, $value);
    }

    /**
     * @Given I click on :element
     */
    public function iClickOn($element)
    {
        $this->click($element);
    }

    /**
     * @Given I press enter on :element
     */
    public function iPressEnter($element)
    {
        $this->pressKey($element, WebDriverKeys::ENTER);
    }

    /**
     * @Then I should see :text
     */
    public function iShouldSee($text)
    {
        $this->see($text);
    }

    /**
     * @Then I should be on :url
     */
    public function iShouldBeOn($url)
    {
        $this->seeInCurrentUrl($url);
    }

    /**
     * @Then I select :value from :field
     */
    public function iSelectFrom($value, $field)
    {
        $this->selectOption($field, $value);
    }

    /**
     * @Then I check option :option
     */
    public function iCheckOption($option)
    {
        $this->checkOption($option);
    }

    /**
     * @Then I should see an :selector element
     */
    public function iShouldSeeElement($selector)
    {
        $this->seeElement($selector);
    }

    /**
     * @Given I wait for :seconds seconds
     */
    public function iWaitForSeconds($seconds)
    {
        $this->wait($seconds);
    }

    /**
     * @Then I uncheck option :option
     */
    public function iUncheckOption($option)
    {
        $this->uncheckOption($option);
    }

    /**
     * @Given I do not see :text
     */
    public function iShouldNotSee($text)
    {
        $this->dontSee($text);
    }

    /**
     * @Given I do not see an :selector element
     */
    public function iShouldNotSeeElement($selector)
    {
        $this->dontSeeElement($selector);
    }

    /**
     * @Given I see link with the text :text
     */
    public function iSeeLink(string $text)
    {
        $this->seeLink($text);
    }

    /**
     * @Given I should see :text in page source
     */
    public function iShouldSeeInPageSource(string $text)
    {
        $this->seeInPageSource($text);
    }

    /**
     * @Given I should see :vale in :field
     */
    public function iShouldSeeInField($value, $field)
    {
        $this->seeInField($field, $value);
    }

    /**
     * @Given I see checkbox :selector is checked
     */
    public function checkboxIsChecked($selector)
    {
        $this->seeCheckboxIsChecked($selector);
    }

    /**
     * @Given I see checkbox :selector is unchecked
     */
    public function checkboxIsUnChecked($selector)
    {
        $this->dontSeeCheckboxIsChecked($selector);
    }

    /**
     * @Given I should see :expected :selector elements
     */
    public function seeNElements($expected, $selector)
    {
        $this->seeNumberOfElements($selector, $expected);
    }
}
