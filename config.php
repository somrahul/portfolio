<?php // Configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

// No trailing slash


$CFG->database  = 'portfolio';
$CFG->pdo       = 'mysql:host=localhost;dbname=portfolio';
$CFG->dbuser    = 'dbuser';
$CFG->dbpass    = 'pass123';
//$CFG->dbprefix  = 'tradeCollab_';



// No trailing tag to avoid white space
