<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	'connectionString' => 'mysql:host=localhost;dbname=leninemoney',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'latin1',
);