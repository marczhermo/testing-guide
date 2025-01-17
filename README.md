## Testing Guide

Using the provided recipe to install PHPUnit and testing related modules for easier setup with your Silverstripe CMS project.

## Installation ##

`composer require --dev silverstripe/recipe-testing:^1`

## SilverStripe Testing Recipe

Standard testing components for behat, phpunit, and code style testing for the SilverStripe Framework
and CMS ([http://silverstripe.org](http://silverstripe.org)).

This includes the components:

 * [phpunit](https://github.com/sebastianbergmann/phpunit): PHP Unit Testing framework.
 * [php-codesniffer](https://github.com/squizlabs/PHP_CodeSniffer): PHP coding standards validator.
 * [behat-extension](https://github.com/silverstripe/silverstripe-behat-extension): SilverStripe behat testing
   framework extension.
 * [silverstripe server](https://github.com/silverstripe/silverstripe-serve): SilverStripe basic server built
   on PHP bundled dev server.
 * [selenium](https://github.com/sveneisenschmidt/selenium-server-standalone): Selenium browser automation framework.

All bootstrapping files, including PHPCS style config, are included.

See the [recipe plugin](https://github.com/silverstripe/recipe-plugin) page for instructions on how
SilverStripe recipes work.

**Note:** If you are not using Behat for end-to-end testing on your module, it is recommended that you install PHPUnit and CodeSniffer directly.

## Links ##

 * [Developer guides](https://docs.silverstripe.org/en/4/developer_guides/testing/)
 * [How To's](https://docs.silverstripe.org/en/4/developer_guides/testing/how_tos/)
 * [Behat tutorial](https://github.com/silverstripe/silverstripe-behat-extension/blob/master/docs/tutorial.md)

