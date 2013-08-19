#Multilingual CI

* [Demo] (http://mci.vebia.ee)
* [Forum Topic] (http://codeigniter.com/forums/viewthread/225196/)

#### Do not use this even for educational purposes. It would be much smarter to get rid of the language slug in index.php file and define a constant. Then use it in config file. This way it works with every application. No matter what... But if you must use it, then you must!

##Description

Multilingual i18n enviroment for CodeIgniter.
Language segment for default language can be hidden from uri.

##Developer

* Tanel Tammik - keevitaja@gmail.com

##Usage

* Install the package by coping the files into your CI installation. DANGER: do not overwrite autoload.php or routes.php!!!
* Set your languages in config/mci_languages.php and config/routes.php

###Helpers (mci_helper.php)

* lanchor() - use instead of anchor() for in-site linking
* langbar() - displays the language bar
* lchange() - returns uri(s) for different languages, mixed

###Methods (MY_Lang.php)

* mci_current() - returns current language segment
* mci_clean_uri() - returns current uri without language segment
* mci_make_uri() - returns uri string with language segment
* mci_language_bar() - returns html language bar
* mci_change() - returns uri(s) for different languages, mixed



