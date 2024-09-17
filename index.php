<?php
// Let's include some very basic error_logging...

error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

ini_set('ignore_repeated_errors', TRUE); // always use TRUE

ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

ini_set('log_errors', TRUE); // Error/Exception file logging engine.
ini_set('error_log', 'error_log'); // Logging file path
// include files.
include 'bootstrap.php';

include $conf['tpl_path'] . 'index.php';
