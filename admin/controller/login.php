<?php

if (post('submit')) {
    if ($data = form_control()) {

        $row = $db->from('users')
            ->where('mail', $data['mail'])
            ->where('role_id', 1)
            ->first();
        if (!$row) {
            $error = 'Girdiğiniz bilgiler hatalı, lütfen kontrol edin.';
        } else {
            $password_verify = password_verify($data['password'], $row['password']);
            if ($password_verify) {
                User::Login($row);
                header('Location:' . admin_url());
            } else {
                $error = 'Girdiğiniz şifre hatalı, lütfen kontrol edin.';
            }
        }
    } else {
        $error = 'Lütfen bilgilerinizi giriniz.';
    }
}

require admin_view('login');
