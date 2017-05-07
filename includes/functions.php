<?php

/**
 * Escapes special characters in a string for use in an SQL statement
 * @param  string $value The string to be escaped
 * @return string        Returns an escaped string
 */
function escape($value) {
    global $connection;

    if (get_magic_quotes_gpc()) {
        $value = stripslashes($value);
    }

    $value = trim($value);
    $value = $connection->real_escape_string($value);
    $value = htmlspecialchars($value, ENT_QUOTES);

    return $value;
}

/**
 * Convert special characters to HTML entities
 * @param  string $value The string being converted
 * @return string        Returns converted string
 */
function get_post($value)
{
    $value = trim($value);
    $value = htmlspecialchars($value, ENT_QUOTES);

    return $value;
}

/**
 * Validate form submitted via POST method
 * @return boolean         Returns TRUE if form is valid
 */
function valid_form()
{
    if (!isset($_POST)) {
        return false;
    }

    foreach ($_POST as $value) 
    {
        if (empty(trim($value))) {
            // if current field is empty
            return false;
        }
    }

    // form is valid, no empty fields
    return true;
}