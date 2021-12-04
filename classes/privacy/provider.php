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
 * Local plugin "Filter Menu" - Privacy provider
 *
 * @package    local_filtermenu
 * @author     Michael Milette
 * @copyright  2018-2021 TNG Consulting Inc. <www.tngconsulting.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_filtermenu\privacy;

defined('MOODLE_INTERNAL') || die();

/**
 * Privacy Subsystem provider implementing null_provider.
 *
 * @package    local_filtermenu
 * @author     Michael Milette
 * @copyright  2018-2021 TNG Consulting Inc. <www.tngconsulting.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\null_provider {

    /**
     * Get the language string identifier with the component's language
     * file to explain why this plugin stores no data.
     *
     * @return  string
     */
    public static function get_reason() : string {
        return 'privacy:metadata';
    }
}