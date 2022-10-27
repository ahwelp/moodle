PSR
===

This library contains some of the PSR packages.


Package Versions
----------------

- php-fig/log: 1.1.3
- php-fig/http-factory: 1.0.1
- php-fig/http-message: 1.0.1
- php-fig/cache: 1.0.1


Modifications
-------------

/lib.php

    Include all the PSR packages files. Every use of one of the PSR packages
    should start by requiring this file:

        require_once($CFG->libdir . '/psr/lib.php');

    And, from there, use the package normally. Everything will be autoloaded.

/autoload.php

    Custom autoload that loads all the package files.



