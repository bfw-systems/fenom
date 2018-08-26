bfw-fenom
===========

[![Build Status](https://travis-ci.org/bulton-fr/bfw-fenom.svg?branch=2.0)](https://travis-ci.org/bulton-fr/bfw-fenom) [![Coverage Status](https://coveralls.io/repos/github/bulton-fr/bfw-fenom/badge.svg?branch=2.0)](https://coveralls.io/github/bulton-fr/bfw-fenom?branch=2.0) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bulton-fr/bfw-fenom/badges/quality-score.png?b=2.0)](https://scrutinizer-ci.com/g/bulton-fr/bfw-fenom/?branch=2.0)
[![Latest Stable Version](https://poser.pugx.org/bulton-fr/bfw-fenom/v/stable)](https://packagist.org/packages/bulton-fr/bfw-fenom) [![License](https://poser.pugx.org/bulton-fr/bfw-fenom/license)](https://packagist.org/packages/bulton-fr/bfw-fenom)

Module to use [Fenom](https://github.com/fenom-template/fenom) library with BFW framework

---

__Install :__

You can use composer to get the module : `composer require bulton-fr/bfw-fenom @stable`

And to install the module : `./vendor/bin/bfwInstallModules`

__Config :__

All config file for this module will be into `app/config/bfw-fenom/`. There is one files to configure (manifest.json is for the module update system).

The file config.php. This file start with two variabled declared (`$fenomOptions` and `$fenomOptionsDebug`). The first variable is options passed to fenom, and the second is an override of the first variable used when the framework is run in debug mode (file `/app/config/bfw/global.php`).

Next you have a returned array with three keys :
* `pathTemplate` : It's the path to the template directory (you can use constant create by the framework)
* `pathCompiled` : It's the path to the compiled template directory (you can use constant create by the framework)
* `fenomOptions` : It's options will be passed to Fenom. The value is generate with `$fenomOptions` and `$fenomOptionsDebug` declared before in the file.

To know options list, you can refer to [the fenom doc](https://github.com/fenom-template/fenom/blob/master/docs/en/configuration.md)

__Use it :__

The module will instantiate Fenom with a call to Fenom::Factory with infos configured. The instance will be saved into the property `fenom` of the \BFW\Module instance for this module.

You can access to the property from anywhere with `\BFW\Application::getInstance()->getModuleList()->getModuleByName('bfw-fenom')->fenom;`
