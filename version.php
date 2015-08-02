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
 * Version details
 *
 * @package    format
 * @subpackage numeric
 * @copyright  2015 Eduardo Kraus (http://eduardokraus.com)
 * @license    http://eduardokraus.com
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2015080201;          // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2014050800;          // Requires this Moodle version.
$plugin->component = 'format_numeric';    // Full name of the plugin (used for diagnostics).
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = 'v1.3.1';
