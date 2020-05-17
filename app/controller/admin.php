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
    'announcement' => [
        'title' => 'Duyuru Ekle'
    ],
    'news' => [
        'title' => 'Haber Ekle'
    ],
    'resume' => [
        'title' => 'Özgeçmiş Düzenle'
    ]
];


require admin_controller(route(1));
