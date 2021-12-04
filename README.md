<img src="pix/logo.png" align="right" />

moodle-local_filtermenu
=======================

![PHP](https://img.shields.io/badge/PHP-v7.0%20to%20v7.4-blue.svg)
![Moodle](https://img.shields.io/badge/Moodle-v3.9%20to%20v3.11.x-orange.svg)
[![GitHub Issues](https://img.shields.io/github/issues/michael-milette/moodle-local_filtermenu.svg)](https://github.com/michael-milette/moodle-local_filtermenu/issues)
[![Contributions welcome](https://img.shields.io/badge/contributions-welcome-green.svg)](#contributing)
[![License](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](#license)

# Table of Contents

- [Basic Overview](#basic-overview)
- [Requirements](#requirements)
- [Download FilterMenu for Moodle LMS](#download-filtermenu-for-moodle-lms)
- [Installation](#installation)
- [Usage](#usage)
- [Updating](#updating)
- [Uninstallation](#uninstallation)
- [Limitations](#limitations)
- [Language Support](#language-support)
- [Troubleshooting](#troubleshooting)
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

This plugin requires Moodle 3.2+ from https://moodle.org/

It should be compatible with most themes based on the Boost core base themes.

[(Back to top)](#table-of-contents)

# Download FilterMenu for Moodle LMS

This plugin is not yet published in Moodle plugins repository but hopefully will soon at:
http://moodle.org/plugins/local_filtermenu

The latest development version can be found on Github:
https://github.com/michael-milette/moodle-local_filtermenu


[(Back to top)](#table-of-contents)

FilterMenu applies Moodle filtering to the custom menu and custom user menu for tags starting with { and ending with } thereby making it possible to easily create dynamic programmable menus.

# Installation

Install the plugin, like any other plugin, to the following folder:

    /local/filtermenu

To activate, go to Site Administration > Notifications.

See http://docs.moodle.org/en/Installing_plugins for more details on installing Moodle plugins.

[(Back to top)](#table-of-contents)

# Usage

After installing the plugin, you should be able to include tags that start with { and end with } such as {filtercodes} and {mlang} in your custom menu and custom user menu.

IMPORTANT: Although we expect everything to work, this ALPHA release is still in development and has not been fully tested in every situation. If you find a problem, please help by reporting it in the [Bug Tracker](http://github.com/michael-milette/moodle-local_filtermenu/issues).

There are no configurable settings for this plugin at this time.

Popular companion plugins:

FilterCodes - https://moodle.org/plugins/filter_multilang2
This plugin includes over 150 plain text tags which enable you to create dynamic content in your Moodle site.

Multi-Language Content (v2) - https://moodle.org/plugins/filter_multilang2
This plugin lets you easily create language aware content in your Moodle site.

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

    /local/filtermenu

Note that, once uninstalled, any tags and content normally handled by this plugin in Moodle's custom menu will become visible to all users.

# Language Support

As this plugin does not display any of its own text, there are no known language issues. However, please feel free to submit
language translations for the settings page into other languages through AMOS (https://lang.moodle.org).

This plugin has not been tested with right-to-left (RTL) languages. If it doesn't work as-is, please send us a pull request
on Github with your modifications at: http://github.com/michael-milette/moodle-local_filtermenu

# Troubleshooting

### Why are my tags not filtered in my menu?

1. Ensure that the tags you are trying to filter start with { and end with } such as {filtercodes} and {mlang}.
2. Ensure that your Moodle filters are enabled and set to filter headings and content.

There are no known issues that we know of at this time. However, despite our efforts, the unexpected does happen. Please report bugs to https://github.com/michael-milette/moodle-local_filtermenu/issues

# FAQ

## Frequently Asked Questions

IMPORANT: Although we expect everything to work, this ALPHA release is still in development and has not been fully tested in every situation. If you find a problem, please help by reporting it in the [Bug Tracker](http://github.com/michael-milette/moodle-local_filtermenu/issues).

### {FilterMenu} Why are tags displayed as entered instead of being converted to data?

Here are a few things you can check:
* Make sure the plugin is installed and that you have visited the Notifications page to update the database. See installation instructions.
* See FAQ for the FilterCodes plugin for more tips.

### How does this plugin work?

It uses Moodle's *_extend_navigation() hook which allows plugin developers to apply filters before it begins to render menus.

### Are there any security considerations?

There are no known security considerations at this time.

## Other questions

Got a burning question that is not covered here? If you can't find your answer, submit your question in the Moodle forums or open a new issue on Github at:

http://github.com/michael-milette/moodle-local_filtermenu/issues

[(Back to top)](#table-of-contents)

# Contributing

Got an idea on how to make this plugin even better? We are open to your suggestions and appreciate pull requests.

Submit feature requests on Github at:
https://github.com/michael-milette/moodle-local_filtermenu/issues

Create pull requests on Github at:
https://github.com/michael-milette/moodle-local_filtermenu/pulls

Be sure to read our [contributing](https://github.com/michael-milette/moodle-local_filtermenu/blob/master/CONTRIBUTING.md) guidelines for details on our code of conduct and the process for submitting pull requests to us.

# Motivation for this plugin

The development of this plugin was motivated by our desire to make it easier to use FilterCodes in Moodle's custom menus. The project is sponsored and supported by TNG Consulting Inc.

[(Back to top)](#table-of-contents)

# Further Information

For further information regarding the local_filtermenu plugin, support or to report a bug, please visit the project page at:

http://github.com/michael-milette/moodle-local_filtermenu

[(Back to top)](#table-of-contents)

# License

Copyright © 2016-2021 TNG Consulting Inc. - https://www.tngconsulting.ca/

This file is part of the FilterMenu plugin for Moodle - https://moodle.org/

FilterMenu is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

FilterMenu is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with FilterMenu.  If not, see <https://www.gnu.org/licenses/>.

[(Back to top)](#table-of-contents)
