<?php


if (!route(1)) {
    $route[1] = 'index';
}
if (!file_exists(admin_controller(route(1)))) {
    $route[1] = 'index';
}
if(!session('role') || session('role') != 1)
{
    $route[1] = 'login';
}

$menus = [
    'users' => [
        'title' => 'Üyeler'
    ],
    'contact' => [
        'title' => 'İletişim'
    ],
    'blog' => [
        'title' => 'Blog Ekle'
    ],
    'edit-about-me' => [
        'title' => 'Özgeçmiş Düzenle'
    ]
];


require admin_controller(route(1));
