<?php

$query = $db->from('category')
->all();

if (post('submit')) {
    $data = form_control('title');

    $result = $db->insert('blog')
        ->set($data);
    if ($result) {
        $success = "Başarıyla Paylaşıldı.";
    } else {
        $error = "Paylaşırken Bir Hata Oluştu.";
    }
}

require admin_view('blog');
