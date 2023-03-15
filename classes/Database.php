<?php
  /**
  * Database
  *
  * A connection to the database
  */

class Database
{

  /**
  * Get the database connection
  *
  * @return PDO object Connection to the database server
  */
  public function getConn()
  {
    $db_host = "localhost";
    $db_name = "saiiaj15";
    $db_user = "saiiaj15";
    $db_pass = "1BLue6Kitten!";

    $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

    try{
    $db = new PDO($dsn, $db_user, $db_pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;

  }catch(PDOExeption $e){
    echo $e->getMessage();
    exit;
  }
  }
}
