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

/curlio.php

    An override of the default Google_IO_Curl class to use our Curl class
    rather then their implementation. When upgrading the library the default
    Curl class should be checked to ensure that its functionalities are covered
    in this file.

    This should not ever be used directly. The wrapper above uses it automatically.

Local changes (to reapply until upstream upgrades contain them):
    * MDL-67034 php74 compliance fixes
    * MDL-67115 php74 implode() compliance fixes. This is fixed in upstream library v2.2.4
      (verify that https://github.com/googleapis/google-api-php-client/pull/1683 is applied)
    * MDL-73523 php80 compliance. openssl_xxx_free() methods deprecated. I've been unable to
      find any issue upstream and the current library versions are way different from the ones
      we are using here.



