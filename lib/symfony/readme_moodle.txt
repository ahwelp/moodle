Symfony
=======

This library contains some of the Symfony packages.


Package Versions
----------------

- symfony/polyfill-intl-idn: 1.17.0
- symfony/mbstring: 1.17.0
- symfony/php72: 1.17.0


Modifications
-------------

/lib.php

    Include all the Symfony package files. Every use of the Symfony should
    start by requiring this file:

        require_once($CFG->libdir . '/symfony/lib.php');

    And, from there, use the package normally. Everything will be autoloaded.

/autoload.php

    Custom autoload that loads all the package files.



