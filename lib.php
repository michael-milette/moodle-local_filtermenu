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

defined('MOODLE_INTERNAL') || die();

/**
 * Apply filters to Moodle custom menu and custom user menu.
 * @package   local_filtermenu
 * @copyright 2016-2018 TNG Consulting Inc. (https://tngconsulting.ca)
 * @author    Michael Milette
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class local_filtermenu_plugin_renderer extends plugin_renderer_base {
    function navbar_plugin_output() {
        filtermenu("local_filtermenu_plugin_renderer");
    }
}

function local_filtermenu_navbar_plugin_output() {
    filtermenu("local_filtermenu_navbar_plugin_output");
}

function local_filtermenu_render_navbar_output() {
    filtermenu("local_filtermenu_render_navbar_output");
    return '';
}

if ($CFG->branch >= 30) {
    function local_filtermenu_extend_navigation(global_navigation $navigation) {
        filtermenu("local_filtermenu_extend_navigation");
    }
} else {
    function local_filtermenu_extends_navigation(global_navigation $navigation) {
        filtermenu("local_filtermenu_extends_navigation");
    }
}

function filtermenu($fnname = '') { // The $fnname parameter is to show which of the above functions was successful.
    global $CFG, $PAGE;

    // Don't filter menus on Theme Settings page or it will filter the custommenuitems field in the page and loose the tags.
    if ($PAGE->pagetype != 'admin-setting-themesettings' && stripos($CFG->custommenuitems, '{') !== false) {

        // Don't apply auto-linking filters.
        $filtermanager = filter_manager::instance();
        $filteroptions = array('originalformat' => FORMAT_HTML, 'noclean' => true);
        $skipfilters = array('activitynames', 'data', 'glossary', 'sectionnames', 'bookchapters');

        // Filter Custom Menu.
        $CFG->custommenuitems = $fnname . PHP_EOL . $filtermanager->filter_text($CFG->custommenuitems, $PAGE->context, $filteroptions, $skipfilters);

    }
}