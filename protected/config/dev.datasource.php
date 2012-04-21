<?php

return array(
  'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
);

// For MySQL datasource
//return array(
//  'connectionString' => 'mysql:host=localhost;dbname=testdrive',
//  'emulatePrepare' => true,
//  'username' => 'root',
//  'password' => '',
//  'charset' => 'utf8',
//);