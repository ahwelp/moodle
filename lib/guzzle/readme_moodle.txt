GuzzleHTTP
==========

This library contains the GuzzleHTTP packages.


Package Versions
----------------

- guzzle/guzzle: 6.5.3
- guzzle/psr7: 1.6.1
- guzzle/promises: 1.3.0


Modifications
-------------

/lib.php

    Include all the Guzzle package files and dependencies. Every use of the
    GuzzleHTTP should start by requiring this file:

        require_once($CFG->libdir . '/guzzle/lib.php');

    And, from there, use the package normally. Everything will be autoloaded.

/autoload.php

    Custom autoload that loads all the package files.



