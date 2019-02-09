<?php

/**
 * DB Params
 */
define('DB_HOST', 'localhost');
define('DB_USER', '_YOUR_USER_');
define('DB_PASS', '_YOUR_PASS_');
define('DB_NAME', '_YOUR_DBNAME_');

/**
 * App Root
 *
 * __FILE__ — The full path and filename of the file with symlinks resolved.
 *            If used inside an include, the name of the included file is returned.
 *            e,g: C:\Server\www\cube2-mvc\app\config\config.php
 * dirname() — Returns a parent directory's path
 * dirname(__FILE__)  — Returns the directory of the file
 *                      e,g: C:\Server\www\cube2-mvc\app\config
 * __DIR__ — The directory of the file. If used inside an include, the directory of
 *           the included file is returned. This is equivalent to dirname(__FILE__).
 *           This directory name does not have a trailing slash unless it is the root directory.
 *
 * We want dirname(dirname(__FILE__))  or  dirname(__DIR__);
 */

define('APPROOT', dirname( dirname(__FILE__) ) );

/**
 * URL Root
 */
define('URLROOT', '_YOUR_URL_');

/**
 * Site Name
 */
define('SITENAME', '_YOUR_SITENAME_');