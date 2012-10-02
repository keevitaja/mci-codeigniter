#Multilingual CI

* Version 1.0
* [Demo] (http://mci.vebia.ee)
* [Forum Topic] (http://codeigniter.com/forums/viewthread/225196/)

##Description

Multilingual i18n enviroment for CodeIgniter

##Developer

* Tanel Tammik - keevitaja@gmail.com

##Usage

* Install the package by coping the files into your CI installation. DANGER: do not overwrite autoload.php or routes.php!!!
* Set your languages in config/mci_languages.php and config/routes.php

###Helpers (mci_helper.php)

* lanchor() - use instead of anchor() for in-site linking
* langbar() - displays the language bar

###Methods (MY_Lang.php)

* mci_current() - returns current language segment
* mci_clean_uri() - returns current uri without language segment
* mci_make_uri() - returns uri string with language segment
* mci_language_bar() - returns html language bar



