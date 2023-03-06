<?php
require_once './src/model/model.php';

function getAd($id)
{
    $pdo = getConnexion();

    $req = $pdo->prepare("SELECT *  FROM ads
    WHERE id = ?");

    $req->execute([$id]);

    $posts = [];
    while ($row = $req->fetch()) {
        $data = [
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'location' => $row['location'],
            'area' => $row['area'],
            'bathrooms' => $row['bathrooms'],
            'action' => $row['action'],
            'rooms' => $row['rooms'],
            'price' => $row['price'],
            'pic1' => $row['pic1'],
            'pic2' => $row['pic2'],
            'pic3' => $row['pic3'],
            'pic4' => $row['pic4'],
            'price' => $row['price'],
            'size' => $row['size'],
        ];

        $posts[] = $data;
    }
    return $posts;
}