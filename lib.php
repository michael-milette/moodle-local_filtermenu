<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local plugin "Filter Menu" - Library
 *
 * @package    local_filtermenu
 * @author     Michael Milette
 * @copyright  2016-2021 TNG Consulting Inc. <www.tngconsulting.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Enable filters in Moodle's custom menu by leveraging Moodle's *_extend_navigation() hook.
 *
 * @param global_navigation $navigation
 */
function local_filtermenu_extend_navigation(global_navigation $navigation) {
    global $CFG, $PAGE;

    // Don't apply auto-linking filters.
    $filteroptions = ['originalformat' => FORMAT_HTML, 'noclean' => true];
    $skipfilters = ['activitynames', 'data', 'glossary', 'sectionnames', 'bookchapters', 'urltolink'];

    // Filter Custom Menu.
    if (stripos($CFG->custommenuitems, '{') !== false) {
        $filtermanager = filter_manager::instance();
        $CFG->custommenuitems = $filtermanager->filter_text($CFG->custommenuitems, $PAGE->context, $filteroptions, $skipfilters);
    }

    // Filter Custom User Menu.
    // Don't filter custom user menu on the settings page. Otherwise it ends up
    // filtering the edit field itself resulting in a loss of the tag.
    if ($PAGE->pagetype != 'admin-setting-themesettings' && stripos($CFG->customusermenuitems, '{') !== false) {
        $CFG->customusermenuitems = $filtermanager->filter_text($CFG->customusermenuitems, $PAGE->context,
                $filteroptions, $skipfilters);
    }
}
