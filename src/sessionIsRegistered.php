<?php
/**
 * session_register for greater than php5.4
 */
if (PHP_VERSION_ID >= 50400) {
    if (! function_exists('session_is_registered')) {
        function session_is_registered($name) {
            if (isset($_SESSION) && isset($_SESSION[$name])) {
                return true;
            }
            return false;
        }
    }
}