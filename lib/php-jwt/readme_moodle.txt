PHP-JWT
=======

This library contains the PHP-JWT package.


Package Version
----------------

- firebase/php-jwt: 5.2.0


Modifications
-------------

/lib.php

    Include all the PHP-JWT package files. Every use of the PHP-JWT should
    start by requiring this file:

        require_once($CFG->libdir . '/php-jwt/lib.php');

    And, from there, use the package normally. Everything will be autoloaded.

/autoload.php

    Custom autoload that loads all the package files.
