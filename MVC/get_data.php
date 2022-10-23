<?php

try {
    $port = "3310";
    $conn = new PDO('mysql:host=localhost;dbname=prueba','root','');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT * FROM usuario";
$st = $conn
    ->query($sql);

if ($st) {
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($id, $nombre, $telefono,$email,$pass,$rfc,$texarea,$ip) => [$id, $nombre, $telefono,$email,$pass,$rfc,$texarea,$ip]);

    echo json_encode([
        'data' => $rs,
    ]);
} else {
    var_dump($conn->errorInfo());
    die;
}
?>