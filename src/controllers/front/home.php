<?php
require_once './src/model/front/home.php';

function home()
{
    $posts = getAds();

    require './src/view/front/home.php';
}