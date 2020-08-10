<?php
$news = [
    'news1' => [
        'title' => 'Акции на размещение баннерного панно 20% до конца июля',
        'short_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui soluta debitis, distinctio ex modi odit obcaecati ducimus, excepturi illo perspiciatis nemo nisi nobis totam dicta dolor libero tenetur est id?',
        'full_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui soluta debitis, distinctio ex modi odit obcaecati ducimus, excepturi illo perspiciatis nemo nisi nobis totam dicta dolor libero tenetur est id?',
        'created_at' => date('Y-m-d h:i:s', strtotime('2020-10-15')),
        'updated_at' => date("Y-m-d H:i:s"),
    ],
    'news2' => [
        'title' => 'Мы работаем в обычном режиме с 15 июня!',
        'short_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui soluta debitis, distinctio ex modi odit obcaecati ducimus, excepturi illo perspiciatis nemo nisi nobis totam dicta dolor libero tenetur est id?',
        'full_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui soluta debitis, distinctio ex modi odit obcaecati ducimus, excepturi illo perspiciatis nemo nisi nobis totam dicta dolor libero tenetur est id?',
        'created_at' => date('Y-m-d h:i:s', strtotime('2020-10-10')),
        'updated_at' => date("Y-m-d H:i:s"),
    ],
    'news3' => [
        'title' => 'Как правильно подобрать рекламный канал?',
        'short_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui soluta debitis, distinctio ex modi odit obcaecati ducimus, excepturi illo perspiciatis nemo nisi nobis totam dicta dolor libero tenetur est id?',
        'full_text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui soluta debitis, distinctio ex modi odit obcaecati ducimus, excepturi illo perspiciatis nemo nisi nobis totam dicta dolor libero tenetur est id?',
        'created_at' => date('Y-m-d h:i:s', strtotime('2020-8-10')),
        'updated_at' => date("Y-m-d H:i:s"),
    ],
];

require_once('./app/database/dbconnection.php');
$createTableNews = $GLOBALS['DB_QUERY']("CREATE TABLE news ( 
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    `title` VARCHAR(200) NOT NULL, 
    `short_text` TEXT NULL, 
    `full_text` LONGTEXT NULL, 
    `created_at` TIMESTAMP NULL, 
    `updated_at` TIMESTAMP NULL)");

$createTableNews === TRUE ? print("Table news created successfully") : print("Error creating table news: " . $createTableNews->error);

foreach ($news as $key => $value) {
    $GLOBALS['DB_QUERY']("INSERT INTO news 
    (`id`, `title`, `short_text`, `full_text`, `created_at`) 
    VALUES (NULL, '" . $value['title'] . "', '" . $value['short_text'] . "', '" . $value['full_text'] . "', '" . $value['created_at'] . "')");
}

$GLOBALS['DB_CONNECTION']()->close();
