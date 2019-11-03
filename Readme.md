# punktde/codeception-database

## Gherkin Steps and additional module functions for the Codeception Webdriver module

### How to use

#### Additional module to store text and compare it later

Use the module `PunktDe\Codeception\Webdriver\Module\Storage` in your `codeception.yaml`:

```
modules:
   enabled:
      - PunktDe\Codeception\Webdriver\Module\Storage
```


#### Gherkin steps

You can either use the trait `PunktDe\Codeception\Webdriver\ActorTraits\Webdriver` in your testing actor, which will add browser controls, checkers, cookie functions and functions
to switch between frames or windows. Or if you only need some of the functionality you can use these specific traits:

* `PunktDe\Codeception\Webdriver\ActorTraits\Checks`
* `PunktDe\Codeception\Webdriver\ActorTraits\Controls`
* `PunktDe\Codeception\Webdriver\ActorTraits\Cookie`
* `PunktDe\Codeception\Webdriver\ActorTraits\Switchers`

The trait to use the storage module is all by itself, you have to include that even if you included the complete `PunktDe\Codeception\Webdriver\ActorTraits\Webdriver` trait.


##### Example actor 

```
<?php

/*
 *  (c) 2018 punkt.de GmbH - Karlsruhe, Germany - http://punkt.de
 *  All rights reserved.
 */

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;
    use \PunktDe\Codeception\Webdriver\ActorTraits\Webdriver; // use the webdriver steps trait
    use \PunktDe\Codeception\Webdriver\ActorTraits\Storage; // use the storage steps trait
}
``` 

##### Which steps are there? 

To get all the steps available you can just run the following command:

```
vendor/bin/codecept -c path/to/codeception.yaml gherkin:steps suiteName
```

This will give you a table of all the steps available.





