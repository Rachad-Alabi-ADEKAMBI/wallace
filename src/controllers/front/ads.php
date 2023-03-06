<?php
require_once './src/model/front/home.php';

function ads()
{
    $posts = getAds();

    require './src/view/front/ads.php';
}