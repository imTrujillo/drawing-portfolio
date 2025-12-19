<?php
class Connection
{
  private static $dbFile = __DIR__ . '/database.sqlite';

  public static function connect()
  {
    try {
      $dsn = 'sqlite:' . self::$dbFile;

      $pdo = new PDO($dsn);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $pdo;
    } catch (PDOException $ex) {
      echo "Error al conectarse a la base de datos " . $ex->getMessage();
    }
  }
}
