<?php
require_once './src/model/front/ad.php';

function ad($id)
{
    $posts = getAd($id);

    require './src/view/front/ad.php';
}