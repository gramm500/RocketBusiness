<?php

$stackPages = [
    '/' => [
        'type' => 'GET',
        'name' => 'Home',
        'handler' => 'HomeController@index'
    ]
];

function getCurrentPage($stackPages) {
    $currentPage = parse_url($_SERVER['REQUEST_URI'])['path'];
    $page = null;
    $keyExist = null;

    if (array_key_exists($currentPage, $stackPages)) {
        $currentHandler = explode('@', $stackPages[$currentPage]['handler']);
            
        $page = [
            'controller'  => 'app/controllers/'.$currentHandler[0].'.php',
            'handler' => $currentHandler[1],
            'name' => $stackPages[$currentPage]['name']
        ];
    } else {
        $page = null;
    }

    if ($currentPage === '/404') {
        return [
            'controller' => 'pages/404.php',
            'name' => '404',
            'handler' => null,
        ];
    }

    if (is_null($page)) {
        header('Location: 404');
    }

    return $page;
};

$PAGE = getCurrentPage($stackPages);