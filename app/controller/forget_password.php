<?php
if (post('forget')) {

    $userName = post('userName');
    $mail = post('mail');
    if (post('userName') && post('mail')) {
        $row = $db->from('users')
            ->select('id')
            ->where('userName', $userName)
            ->where('mail', $mail)
            ->first();

        if (isset($row)) {
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            $newPass = substr(str_shuffle($permitted_chars), 0, 10);
            mailSend(
                "Onur",
                "Kantar",
                "onurkantr@gmail.com",
                "Şifre Sıfırlama",
                $newPass,
                $mail
            );
            $newPass = password_hash($newPass, PASSWORD_DEFAULT);
            $db->update('users')
                ->where('id', $row['id'])
                ->set([
                    'password' => $newPass
                ]);
            User::changePass($newPass);
            $success = "Yeni şifreniz mail adresinize gönderildi";
        } else {
            $error = "Kullanıcı adı ve mail eşleşmiyor";
        }
    } else {
        $error = "Kullanıcı adı ve mail adresinizi girin";
    }
}
require view('forget_password');
