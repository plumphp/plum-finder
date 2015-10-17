<h1 align="center">
    <img src="http://cdn.florian.ec/plum-logo.svg" alt="Plum" width="300">
</h1>

> PlumFinder integrates the [Symfony Finder](http://symfony.com/doc/current/components/finder.html) component into Plum.
 Plum is a data processing pipeline for PHP.

[![Build Status](https://img.shields.io/travis/plumphp/plum-finder.svg?style=flat)](https://travis-ci.org/plumphp/plum-finder)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/plumphp/plum-finder.svg?style=flat)](https://scrutinizer-ci.com/g/plumphp/plum-finder/?branch=master)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/plumphp/plum-finder.svg?style=flat)](https://scrutinizer-ci.com/g/plumphp/plum-finder/?branch=master)

Developed by [Florian Eckerstorfer](https://florian.ec) in Vienna, Europe.


Installation
------------

You can install Plum using [Composer](http://getcomposer.org).

```shell
$ composer require plumphp/plum-finder
```


Usage
-----

Please refer to the [Plum documentation](https://github.com/plumphp/plum/blob/master/docs/index.md) for more
information about Plum in general.

PlumFinder includes `Plum\PlumFinder\FinderReader` to read directories and files from disk.

### `FinderReader`

You can read directories and files using the [Symfony Finder](http://symfony.com/doc/current/components/finder.html)
component and `Plum\PlumFinder\FinderReader`.

```php
use Plum\PlumFinder\FinderReader;
use Symfony\Component\Finder\Finder;

$finder = new Finder();
// Further configuration of Finder

$reader = new FinderReader($finder);
```


Change Log
----------

### Version 1.1.2 (28 April 2015)

- Fix Plum version

### Version 1.1.1 (22 April 2015)

- Set minimum Plum version to 0.2

### Version 1.1 (22 April 2015)

- Add support for ReaderFactory

### Version 1.0 (17 February 2015)

- Initial release


License
-------

The MIT license applies to plumphp/plum-finder. For the full copyright and license information,
please view the [LICENSE](https://github.com/plumphp/plum-finder/blob/master/LICENSE) file distributed with this source
code.
