Moderator
---------

This is an experimental PHP 5.3 library for moderating your user
submitted contents using these services :

* `Mollom`
* `Akismet` (Not implemented)
* `Defensio` (Not implemented)
* `Typepad antispam` (Not implemented)
* `Bad behavior` (Not implemented)

Installation
------------

TODO

<!--
The recommended way to install Moderator is through composer.

Just create a `composer.json` file for your project:

``` json
{
    "require": {
        "": "*"
    }
}
```
-->

Usage
-----

``` php
use Moderator\Moderator;
use Moderator\Content;
use Moderator\Service\MollomService;

require __DIR__ .'/vendor/autoload.php';

$publicKey = 'your-public-key';
$privateKey = 'your-private-key';

$mollomService = new MollomService($publicKey, $privateKey);

$moderator = new Moderator();
$moderator->setModerationService($mollomService);

$content = new Content();

$content->setTitle('Lorem ipsum dolor sit amet.');
$content->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet nulla sed nisl fringilla tincidunt condimentum quis metus. Suspendisse dignissim lacus sit amet turpis dictum rhoncus. Donec fringilla egestas iaculis. Pellentesque diam odio, sagittis a accumsan ac, pellentesque sed ante. Integer quis est et tortor vulputate dictum at eu risus. Mauris ullamcorper sodales quam. Donec vestibulum eros ac leo congue sed aliquet mi convallis. Phasellus pretium aliquet vehicula');

$moderator->checkContent($content)
```

Test
----

TODO

