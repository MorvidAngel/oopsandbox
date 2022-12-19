<?php
// db parametors
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
// the password is 1-7 not like in the video, if you change it youll get a error
define('DB_PASS', '1234567');
// to create the tmvc youd have to go to phpadmin 
define('DB_NAME', 'tmvc');

// app root
define('APPROOT', dirname(dirname(__FILE__)));
// url root
// the last slash does matter or else you have double slashes
define('URLROOT', 'http://localhost/oopsandbox/mvcproject');
// site name
define('SITENAME', 'ThisIsMyWebsite');
