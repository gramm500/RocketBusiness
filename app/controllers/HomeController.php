<?php

function index() {
    $getNews = $GLOBALS['DB_QUERY_GET']("SELECT * FROM `news`");
    return require_once('pages/home.php');
}