<img src="pix/logo.png" align="right" />

FilterMenu filter plugin for Moodle
====================================
![PHP](https://img.shields.io/badge/PHP-v5.6%20%2F%20v7.0%20%2F%20v7.1-blue.svg)
![Moodle](https://img.shields.io/badge/Moodle-v2.5%20to%20v3.5-orange.svg)
[![GitHub Issues](https://img.shields.io/github/issues/michael-milette/moodle-local_filtermenu.svg)](https://github.com/michael-milette/moodle-local_filtermenu/issues)
[![Contributions welcome](https://img.shields.io/badge/contributions-welcome-green.svg)](#contributing)
[![License](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](#license)

# Table of Contents

- [Basic Overview](#basic-overview)
- [Requirements](#requirements)
- [Download FilterMenu for Moodle](#download-filtermenu-for-moodle)
- [Installation](#installation)
- [Usage](#usage)
- [Updating](#updating)
- [Uninstallation](#uninstallation)
- [Limitations](#limitations)
- [Language Support](#language-support)
- [Frequently Asked Questions (FAQ)](#faq)
- [Contributing](#contributing)
- [Motivation for this plugin](#motivation-for-this-plugin)
- [Further information](#further-information)
- [License](#license)

# Basic Overview

FilterMenu for Moodle applies Moodle filters to the custom menu and custom user menu enabling administrators to easily customize and personalize the site using plain text tags such as FilterCodes and other filter type plugins for Moodle.

IMPORTANT: Although we expect everything to work, this ALPHA release is still in development and has not been fully tested in every situation. If you find a problem, please help by reporting it in the [Bug Tracker](https://github.com/michael-milette/moodle-local_filtermenu/issues).

[(Back to top)](#table-of-contents)

# Requirements

This plugin requires Moodle 2.5+ from https://moodle.org/

It should be compatible with themes based on the core base themes including Bootstrapbase, Clean and Boost.

[(Back to top)](#table-of-contents)

# Download FilterMenu for Moodle

The most recent STABLE release of FilterMenu for Moodle is available from:
https://moodle.org/plugins/filter_filtermenu

The most recent DEVELOPMENT release can be found at:
https://github.com/michael-milette/moodle-local_filtermenu

[(Back to top)](#table-of-contents)

# Installation

Install the plugin, like any other plugin, to the following folder:

    /local/filtermenu

See http://docs.moodle.org/35/en/Installing_plugins for details on installing Moodle plugins.

In order for the filters to work, the plugin must be installed.

[(Back to top)](#table-of-contents)

# Usage

IMPORANT: Although we expect everything to work, this ALPHA release is still in development and has not been fully tested in every situation. If you find a problem, please help by reporting it in the [Bug Tracker](http://github.com/michael-milette/moodle-local_filtermenu/issues).

There are no configurable settings for this plugin at this time.

## Custom menus with FilterMenu and FilterCodes

Here is a link to some examples of how to create really useful custom menus using FilterMenu and FilterCodes
https://github.com/michael-milette/moodle-filter_filtercodes#filtercodes-in-a-custom-menu

Once both plugins are installed and activated, just copy and paste the code into the **Custom menu items** field (Site administration > Appearance > Theme settings)

Feel free to customize these for your own needs and to make more of these for other roles like Course creators, Teachers, Teacher assistants and even Students.

**Doesn't work?** If FilterMenu doesn't work with your theme, contact the developer / maintainer of the theme and encourage theme to enable support for Moodle filters in the custom menus.

[(Back to top)](#table-of-contents)

# Updating

There are no special considerations required for updating the plugin.

The first public ALPHA version was released on 2016-10-20.

For more information on releases since then, see
[CHANGELOG.md](https://github.com/michael-milette/moodle-local_filtermenu/blob/master/CHANGELOG.md).

[(Back to top)](#table-of-contents)

# Uninstallation

Uninstalling the plugin by going into the following:

Home > Administration > Site Administration > Plugins > Manage plugins > FilterMenu

...and click Uninstall. You may also need to manually delete the following folder:

    /filter/filtermenu

Note that, once uninstalled, any tags and content normally handled by this plugin in Moodle's custom menu will become visible to all users.

# Language Support

This plugin includes support for the English language.

If you need a different language that is not yet supported, please feel free to contribute using the Moodle AMOS Translation Toolkit for Moodle at

https://lang.moodle.org/

This plugin has not been tested for right-to-left (RTL) language support. If you want to use this plugin with a RTL language and it doesn't work as-is, feel free to prepare a pull request and submit it to the project page at:

http://github.com/michael-milette/moodle-local_filtermenu

# FAQ

## Frequently Asked Questions

IMPORANT: Although we expect everything to work, this ALPHA release is still in development and has not been fully tested in every situation. If you find a problem, please help by reporting it in the [Bug Tracker](http://github.com/michael-milette/moodle-local_filtermenu/issues).

### {FilterMenu} Why are tags displayed as entered instead of being converted to data?

Here are a few things you can check:
* Make sure the plugin is installed and that you have visited the Notifications page to update the database. See installation instructions.
* See FAQ for the FilterCodes plugin for more tips.

### Are there any security considerations?

There are no known security considerations at this time.

## Other questions

Got a burning question that is not covered here? If you can't find your answer, submit your question in the Moodle forums or open a new issue on Github at:

http://github.com/michael-milette/moodle-local_filtermenu/issues

[(Back to top)](#table-of-contents)

# Contributing

If you are interested in helping, please take a look at our [contributing](https://github.com/michael-milette/moodle-local_filtermenu/blob/master/CONTRIBUTING.md) guidelines for details on our code of conduct and the process for submitting pull requests to us.

## Contributors

Michael Milette - Author and Lead Developer

## Pending Features

Some of the features we are considering for future releases include:

* Fix the plugin so that filters works on the custom menu on the Moodle Theme Settings page.

If you could use any of these features, or have other requirements, consider contributing or hiring us to accelerate development.

[(Back to top)](#table-of-contents)

# Motivation for this plugin

The development of this plugin was motivated through our own experience in Moodle development for our clients and topics discussed in the Moodle forums. The project is sponsored and supported by TNG Consulting Inc.

[(Back to top)](#table-of-contents)

# Further Information

For further information regarding the local_filtermenu plugin, support or to report a bug, please visit the project page at:

http://github.com/michael-milette/moodle-local_filtermenu

[(Back to top)](#table-of-contents)

# License

Copyright © 2016-2018 TNG Consulting Inc. - http://www.tngconsulting.ca/

This file is part of the FilterMenu plugin for Moodle - http://moodle.org/

FilterMenu is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

FilterMenu is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with FilterMenu.  If not, see <http://www.gnu.org/licenses/>.



[(Back to top)](#table-of-contents)