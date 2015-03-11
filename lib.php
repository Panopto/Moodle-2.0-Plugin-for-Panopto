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

defined('MOODLE_INTERNAL') || die;

// Decorate a moodle username with the instancename outside the context of a panopto_data object.
function block_panopto_decorate_username($moodle_username) {
    return (get_config('block_panopto', 'instance_name') . "\\" . $moodle_username);
}

// Sign the payload with the proof that it was generated by trusted code.
function block_panopto_generate_auth_code($payload) {
    $index = 1;
    for ($x = 0; $x < 10; $x++) {
        if ($thisservername = get_config('block_panopto', 'server_name' . ($x + 1))) {
            if (strpos($payload, $thisservername)) {
                $index = $x + 1;
                break;
            }
        }
    }
    $sharedSecret = get_config('block_panopto', 'application_key' . $index);

    $signed_payload = $payload . "|" . $sharedSecret;

    $auth_code = sha1($signed_payload);
    $auth_code = strtoupper($auth_code);

    return $auth_code;
}

function block_panopto_validate_auth_code($payload, $auth_code) {
    return (block_panopto_generate_auth_code($payload) == $auth_code);
}

/**
 * Get a list of configured Panopto servers.
 *
 * @return array List of size (int) => server host names, key starts with 1.
 */
function block_panopto_get_servers() {
    $servers = array();
    $servernumber = get_config('block_panopto', 'server_number');
    if (!$servernumber) {
        // Block has not been configured yet.
        return $servers;
    }

    for ($x = 1; $x <= (int)$servernumber; $x++) {
        // Make sure that server configuration contains both hostname and the key.
        $servername = get_config('block_panopto', 'server_name' . $x);
        $applocationkey = get_config('block_panopto', 'application_key'. $x);
        if (!empty($servername) && !empty($applocationkey)) {
            $servers[$x] = $servername;
        }
    }
    return $servers;
}