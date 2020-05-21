Google APIs Client Library for PHP
==================================

This library contains the Google APIs Client and Auth packages.


Package Versions
----------------

- googleapis/google-api-php-client: 2.4.1
- googleapis/google-api-php-client-services: 0.134
- googleapis/google-auth-library-php: 1.8.0


Modifications
-------------

/lib.php

    Include all the Google package files and the dependencies. Every use of the
    Google PHP API should start by requiring this file:

        require_once($CFG->libdir . '/google/lib.php');

    And, from there, use the Client API normally. Everything will be autoloaded.

/autoload.php

    Custom autoload that loads all the Google package files.



