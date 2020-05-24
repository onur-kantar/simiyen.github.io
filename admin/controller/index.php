<?php

$id = $_SESSION['id'];

if (!$id) {
    header('Location:' . admin_url('login'));
    exit;
}

$row = $db->from('users')
    ->where('id', $id)
    ->first();

if (!$row) {
    header('Location:' . admin_url('users'));
    exit;
}

if (post('submit')) {

    if ($data = form_control('mail')) {

        //$data['user_url'] = permalink($data['name']);

        $query = $db->update('users')
            ->where('id', $id)
            ->set($data);

        if ($query) {
            User::Login($data);
            $success = 'Başarıyla güncelleştirildi.';
            //header('Location:' . admin_url());
        } else {
            $error = 'Bir sorun oluştu.';
        }
    } else {
        $error = 'Eksik alanlar var, lütfen kontrol edin.';
    }
}
require admin_view('index');
