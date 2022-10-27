monolog
=======

This library contains the Monolog package.


Package Version
----------------

- Seldaek/monolog: 2.0.2


Modifications
-------------

/lib.php

    Include all the Monolog package files and dependencies. Every use of the
    Monolog should start by requiring this file:

        require_once($CFG->libdir . '/monolog/lib.php');

    And, from there, use the package normally. Everything will be autoloaded.

/autoload.php

    Custom autoload that loads all the package files.



