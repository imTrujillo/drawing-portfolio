<?php
include_once __DIR__ . "/../db/Connection.php";

class Category
{
  public function __construct(
    private $id,
    private $name,
    private $description
  ) {}

  public static function getCategories()
  {
    $pdo = Connection::connect();
    $query = $pdo->query("SELECT * FROM categories");
    $query->execute();
    $array = $query->fetchAll(PDO::FETCH_ASSOC);
    return $array;
  }
}
