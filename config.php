<?php
/**
 * Configuration for database connection
 *
 */
$host       = "localhost";
$username   = "dbadmin";
$password   = "P@ssw0rd";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );