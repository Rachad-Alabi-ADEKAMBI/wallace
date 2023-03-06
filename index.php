<?php
session_start();

require_once 'src/controllers/front/home.php';
require_once 'src/controllers/front/ads.php';
require_once 'src/controllers/front/ad.php';

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'ads') {
        ads();
    } elseif ($_GET['action'] === 'ad') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            ad($id);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';

            die();
        }
    } elseif ($_GET['action'] === 'home') {
        home();
    } elseif ($_GET['action'] === 'ads') {
        ads();
    } else {
        echo "Erreur 404 : la page que vous recherchez n'existe pas.";
    }
} else {
    home();
}