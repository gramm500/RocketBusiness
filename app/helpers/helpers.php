<?php

function dd($object) {
    echo '<pre>';
    print_r($object);
    die;
    echo '</pre>';
}