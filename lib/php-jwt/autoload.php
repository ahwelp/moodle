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
 * PHP-JWT autoload.
 *
 * @copyright  2020 Christian Bayer - Univates
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function firebase_autoload($classname)
{
    $classpath = explode('\\', $classname);
    if($classpath[0] != 'Firebase') {
        return;
    }
    $filepath = dirname(__FILE__) . '/src/' . implode('/', array_slice($classpath, 2)) . '.php';
    if(file_exists($filepath)) {
        require_once($filepath);
    }
}

spl_autoload_register('firebase_autoload');