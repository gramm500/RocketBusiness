<?php

require_once('dbconfig.php');

$GLOBALS['DB_CONNECTION'] = function() use ($DB_CONFIG) {
    $dbConnect = new mysqli($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['pass'], $DB_CONFIG['name']);

    if ($dbConnect->connect_error) {
        die("ERROR: Unable to connect: " . $dbConnect->connect_error);
    }

    return $dbConnect;
};

$GLOBALS['DB_QUERY'] = function($query) {
    return $GLOBALS['DB_CONNECTION']()->query($query);
};

$GLOBALS['DB_QUERY_GET'] = function($query) {
    $services = $GLOBALS['DB_QUERY']($query);
    return $services->fetch_all(MYSQLI_ASSOC);
};