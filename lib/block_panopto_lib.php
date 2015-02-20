<?php

/* Copyright Panopto 2009 - 2013 / With contributions from Spenser Jones (sjones@ambrose.edu)
 *
 * This file is part of the Panopto plugin for Moodle.
 *
 * The Panopto plugin for Moodle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * The Panopto plugin for Moodle is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with the Panopto plugin for Moodle.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Panopto block function library.
 *
 * @package     block_panopto
 * @copyright   Panopto 2009 - 2013 / With contributions from Spenser Jones (sjones@ambrose.edu)
 * @license     http://www.gnu.org/licenses/lgpl.html GNU LGPL
 */

// Prepend the instance name to the Moodle course ID to create an external ID for Panopto Focus.
function panopto_decorate_course_id($moodle_course_id) {
    global $CFG;
    return ($CFG->block_panopto_instance_name . ":" . $moodle_course_id);
}

// Decorate a moodle username with the instancename outside the context of a panopto_data object.
function panopto_decorate_username($moodle_username) {
    global $CFG;
    return ($CFG->block_panopto_instance_name . "\\" . $moodle_username);
}

// Sign the payload with the proof that it was generated by trusted code.
function panopto_generate_auth_code($payload) {
    global $CFG;
    $index = 1;
    for ($x = 0; $x < 10; $x++) {
        $cfgservername = 'block_panopto_server_name' . ($x + 1);
        if (isset($CFG->$cfgservername)) {
            $thisservername = $CFG->$cfgservername;
            if (strpos($payload, $thisservername)) {
                $index = $x + 1;
                break;
            }
        }
    }

    $appstring = 'block_panopto_application_key' . $index;
    $sharedSecret = $CFG->$appstring;

    $signed_payload = $payload . "|" . $sharedSecret;

    $auth_code = sha1($signed_payload);
    $auth_code = strtoupper($auth_code);

    return $auth_code;
}

function panopto_validate_auth_code($payload, $auth_code) {
    return (panopto_generate_auth_code($payload) == $auth_code);
}