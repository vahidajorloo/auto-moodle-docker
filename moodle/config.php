<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'moodle_db';
$CFG->dbname    = 'bitnami_moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'Aa123@hg';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

if (empty($_SERVER['HTTP_HOST'])) {
  $_SERVER['HTTP_HOST'] = '127.0.0.1:8080';
}
$CFG->wwwroot   = 'https://' . 'moodle-demo2.tehranserver.net';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02775;

$CFG->sslproxy = true;
require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
