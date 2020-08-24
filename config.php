<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'moodlegrupoift.grupoift.pt';
$CFG->dbname    = 'moodlegrupoift';
$CFG->dbuser    = 'moodlegrupoift';
$CFG->dbpass    = 'Lipsw0rld';
$CFG->prefix    = 'moodlegrupoift_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://moodle.grupoift.pt';
$CFG->dataroot  = '/home/ift/moodle_data';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
