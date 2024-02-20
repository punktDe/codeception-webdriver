<?php
namespace PunktDe\Codeception\Webdriver\ActorTraits;

/*
 * This file is part of the PunktDe\Codeception-Webdriver package.
 *
 * This package is open source software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

trait Checks {

    /**
     * @Then I should see :text
     * @param string $text
     */
    public function iShouldSee(string $text)
    {
        $this->see($text);
    }

    /**
     * @Then I should be on :url
     * @param string $url
     */
    public function iShouldBeOn(string $url)
    {
        $this->seeInCurrentUrl($url);
    }

    /**
     * @Then I should see an :selector element
     * @param string $selector
     */
    public function iShouldSeeElement(string $selector)
    {
        $this->seeElement($selector);
    }

    /**
     * @Given I should not see :text
     * @param string $text
     */
    public function iShouldNotSee(string $text)
    {
        $this->dontSee($text);
    }

    /**
     * @Given I should not see an :selector element
     * @param string $selector
     */
    public function iShouldNotSeeElement(string $selector)
    {
        $this->dontSeeElement($selector);
    }

    /**
     * @Given I see link with the text :text
     * @param string $text
     */
    public function iSeeLink(string $text)
    {
        $this->seeLink($text);
    }

    /**
     * @Given I should see :text in page source
     * @param string $text
     */
    public function iShouldSeeInPageSource(string $text)
    {
        $this->seeInPageSource($text);
    }

    /**
     * @Given I should see :value in :field field
     * @param string $value
     * @param string $field
     */
    public function iShouldSeeInField(string $value, string $field)
    {
        $this->seeInField($field, $value);
    }

    /**
     * @Given I see checkbox :selector is checked
     * @param string $selector
     */
    public function checkboxIsChecked(string $selector)
    {
        $this->seeCheckboxIsChecked($selector);
    }

    /**
     * @Given I see checkbox :selector is unchecked
     * @param string $selector
     */
    public function checkboxIsUnChecked(string $selector)
    {
        $this->dontSeeCheckboxIsChecked($selector);
    }

    /**
     * @param $selector
     * @param $optionText
     * @Given I should see :selector with :optionText is selected
     */
    public function optionIsSelected($selector, $optionText)
    {
        $this->seeOptionIsSelected($selector, $optionText);
    }

    /**
     * @param $selector
     * @param $optionText
     * @Given I see :selector with :optionText is not selected
     */
    public function optionIsNotSelected($selector, $optionText)
    {
        $this->dontSeeOptionIsSelected($selector, $optionText);
    }

    /**
     * @Given I should see :expected :selector elements
     * @param int|string $expected
     * @param string $selector
     */
    public function seeNElements(int|string $expected, string $selector)
    {
        $this->seeNumberOfElements($selector, (int)$expected);
    }

    /**
     * @Then I accept the open popup
     */
    public function iAcceptOpenPopup(): void
    {
        $this->acceptPopup();
    }

    /**
     * @Then I should see :text in :element element
     * @param string $text
     * @param string $selector
     */
    public function iShouldSeeTextInElement(string $text, string $selector): void
    {
        $this->see($text, $selector);
    }

    /**
     * @Then I should see at least :number :selector elements
     * @param string $number
     * @param string $selector
     */
    public function iShouldSeeMinNumberOfElements(string $number, string $selector): void
    {
        $this->seeNumberOfElements($selector, [$number, PHP_INT_MAX]);
    }

}
