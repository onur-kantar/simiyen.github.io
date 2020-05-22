<?php

$id = session('id');

if (!$id) {
    header('Location:' . site_url());
    exit;
}

$row = $db->from('users')
    ->where('id', $id)
    ->first();

if (!$row) {
    header('Location:' . site_url());
    exit;
}

if (post('submit')) {

    if ($data = form_control('mail')) {

        $query = $db->update('users')
            ->where('id', $id)
            ->set($data);

        if ($query) {
            User::Login($data);
            print_r($data);
            header('Location:' . site_url());
        } else {
            $error = 'Bir sorun oluştu.';
        }
    } else {
        $error = 'Eksik alanlar var, lütfen kontrol edin.';
    }
}
require view('profile');
