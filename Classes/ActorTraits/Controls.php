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

trait Controls {

    /**
     * @Given I am on :page
     * @param string $page
     */
    public function iAmOn(string $page): void
    {
        $this->amOnPage($page);
    }

    /**
     * @Given I wait for the text :text
     * @Given /^I wait for the text (?P<pattern>"(?:[^"]|\\")*")$/
     * @param string $text
     */
    public function iWaitForTheText(string $text): void
    {
        $text = str_replace('\\', '', $text);
        $this->waitForText($text);
    }

    /**
     * @Given I fill in :field with :value
     * @param string $field
     * @param string $value
     */
    public function iFillInWith(string $field, string $value): void
    {
        $this->fillField($field, $value);
    }

    /**
     * @Given I click on :element
     * @param string $element
     */
    public function iClickOn(string $element): void
    {
        $this->click($element);
    }

    /**
     * @Given I press enter on :element
     * @param string $element
     */
    public function iPressEnter(string $element): void
    {
        $this->pressKey($element, WebDriverKeys::ENTER);
    }

    /**
     * @Then I select :value from :field
     * @Then I select :field :value
     * @param string $value
     * @param string $field
     */
    public function iSelectFrom(string $value, string $field): void
    {
        $this->selectOption($field, $value);
    }

    /**
     * @Then I check option :option
     * @param string $option
     */
    public function iCheckOption(string $option): void
    {
        $this->checkOption($option);
    }

    /**
     * @Given I wait for :seconds seconds
     * @param int $seconds
     */
    public function iWaitForSeconds(int $seconds): void
    {
        $this->wait($seconds);
    }

    /**
     * @Then I uncheck option :option
     * @param string $option
     */
    public function iUncheckOption(string $option): void
    {
        $this->uncheckOption($option);
    }

    /**
     * @Then I attach :field the :file
     * @param string $field
     * @param string $filename
     */
    public function attachFileTo(string $field, string $filename): void
    {
        $this->attachFile($field, $filename);
    }

    /**
     * @Given I click on :element inside :id
     * @param string $element
     * @param string $id
     */
    public function iClickOnInside(string $element, string $id): void
    {
        $this->click($element, '#' . $id);
    }

    /**
     * @Then I execute JS :script
     * @param string $script
     */
    public function iExecuteJS(string $script): void
    {
        $this->executeJS($script);
    }

    /**
     * @Then I move mouse over :select
     * @param string $select
     */
    public function iMoveMouseOver(string $select): void
    {
        $this->moveMouseOver($select);
    }

    /**
     * @Then I submit form :form
     * @param string $form
     */
    public function iSubmitForm(string $form): void
    {
        $this->submitForm($form, []);
    }

    /**
     * @Then I submit form :form with :values
     * @param string $form
     * @param array $values
     */
    public function iSubmitFormWithValues(string $form, array $values): void
    {
        $this->submitForm($form, $values);
    }

    /**
     * @Then I wait for invisible :selector in :seconds
     * @param string $selector
     * @param int $seconds
     */
    public function iWaitForElementNotVisible(string $selector, int $seconds): void
    {
        $this->waitForElementNotVisible($selector, $seconds);
    }

}
