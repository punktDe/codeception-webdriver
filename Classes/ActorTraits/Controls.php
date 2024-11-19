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
        if (strpos($page, 'http') === 0) {
            $this->amOnUrl($page);
        } else {
            $this->amOnPage($page);
        }
    }

    /**
     * @Given I wait for the text :text
     * @Given I wait for the text :text in :seconds seconds
     * @param string $text
     * @param int|string $seconds
     */
    public function iWaitForTheText(string $text, int|string $seconds = 10): void
    {
        $text = str_replace('\\', '', $text);
        $this->waitForText($text, (int)$seconds);
    }

    /**
     * @Given I wait for the text :text in :element element
     * @Given I wait for the text :text in :element element in :seconds seconds
     * @param string $text
     * @param string $element
     * @param int|string $seconds
     */
    public function iWaitForTheTextInElement(string $text, string $element, int|string $seconds = 10): void
    {
        $text = str_replace('\\', '', $text);
        $this->waitForText($text, (int)$seconds, (string)$element);
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
     * @Given I click on :element within :context
     * @param string $element
     * @param string|null $context
     */
    public function iClickOn(string $element, string $context = null): void
    {
        $this->click($element, $context);
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
     * @param int|string $seconds
     */
    public function iWaitForSeconds(int|string $seconds): void
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
     * @Given I click on :element inside element :container
     * @param string $element
     * @param string $container
     */
    public function iClickOnInsideElement(string $element, string $container): void
    {
        $this->click($element, $container);
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
     * @param int|string $seconds
     */
    public function iWaitForElementNotVisible(string $selector, int|string $seconds): void
    {
        $this->waitForElementNotVisible($selector, (int)$seconds);
    }

    /**
     * @param string $text
     * @return void
     * @Given I type :text
     */
    public function iType(string $text): void
    {
        $this->type($text);
    }

    /**
     * @param string $selector
     * @param int $offsetX
     * @param int $offsetY
     * @return void
     * @Given I scroll to :selector
     * @Given I scroll to :selector with offset :offsetX and :offsetY
     */
    public function iScroll(string $selector, int $offsetX = 0, int $offsetY = 0): void
    {
        $this->scrollTo($selector, $offsetX, $offsetY);
    }

    /**
     * @param string $width
     * @param string $height
     * @return void
     * @Given I set window size to :width x :height
     */
    public function iSetWindowSize(string $width, string $height)
    {
        $this->resizeWindow((int)$width, (int)$height);
    }
}
