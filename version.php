<?php
// This file is part of the FilterMenu plugin for Moodle - http://moodle.org/
//
// FilterMenu is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// FilterMenu is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with FilterMenu.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local plugin "Filter Menu" - Version information
 *
 * @package    local_filtermenu
 * @author     Michael Milette
 * @copyright  2016-2021 TNG Consulting Inc. <www.tngconsulting.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2021120400;            // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires = 2016120500;           // Moodle 3.2 or later.
$plugin->component = 'local_filtermenu';  // Full name of the plugin (used for diagnostics).
$plugin->release = '0.2.0';
$plugin->maturity = MATURITY_ALPHA;
