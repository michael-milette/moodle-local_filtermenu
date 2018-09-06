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
 * Version information
 *
 * @package     local
 * @subpackage  local_filtermenu
 * @copyright   Copyright 2016 TNG Consulting Inc., (www.tngconsulting.ca)
 * @author      Michael Milette
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_filtermenu';  // To check on upgrade, that module sits in correct place
$plugin->version   = 2016090104;          // The current module version (Date: YYYYMMDDXX)
$plugin->requires  = 2012062500;          // Requires Moodle version 2.5
$plugin->release   = '0.1';
$plugin->maturity  = MATURITY_ALPHA;
