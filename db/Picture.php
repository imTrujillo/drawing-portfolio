<?php
include_once __DIR__ . "/../db/Connection.php";

class Picture
{
  public function __construct(
    private $id,
    private $categoryId,
    private $name,
    private $description,
    private $image,
    private $price,
    private $status = "Disponible",
    private $tecnique,
    private $measure
  ) {}

  public static function getPictures()
  {
    $pdo = Connection::connect();
    $query = $pdo->query("SELECT * FROM pictures");
    $query->execute();
    $array = $query->fetchAll(PDO::FETCH_ASSOC);
    return $array;
  }

  public static function getPicturesByCategory($categoryId)
  {
    $pdo = Connection::connect();

    $sql = "SELECT * FROM pictures WHERE category_id = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$categoryId]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function getPicturesByCategoryAndStatus($categoryId)
  {
    $pdo = Connection::connect();

    $sql = "SELECT * FROM pictures WHERE category_id = ? AND status='Disponible'";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$categoryId]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
