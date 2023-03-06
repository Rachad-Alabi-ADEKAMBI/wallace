<?php
require_once './src/model/model.php';

function getAds()
{
    $pdo = getConnexion();

    $req = $pdo->query("SELECT *  FROM ads
    ORDER BY id DESC LIMIT 3");

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
        ];

        $posts[] = $data;
    }
    return $posts;
}