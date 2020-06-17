<?php

if (post('register_submit')) {

    $name = post('name');
    $surName = post('surName');
    $mail = post('mail');
    $userName = post('userName');
    $password1 = post('password1');
    $password2 = post('password2');


    if (!$name) {
        $error = 'Lütfen adınızı yazın.';
    } elseif (!$surName) {
        $error = 'Lütfen soyadınızı yazın.';
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $error = 'Lütfen geçerli bir e-posta adresi yazın.';
    } elseif (!$userName) {
        $error = 'Lütfen kullanıcı adınızı yazın.';
    } elseif (!$password1 || !$password2) {
        $error = 'Lütfen şifrenizi girin.';
    } elseif ($password1 != $password2) {
        $error = 'Girdiğiniz şifreler birbiriyle uyuşmuyor.';
    } else {

        $row = User::userExist($userName);

        if ($row) {
            $error = 'Bu kullanıcı adı zaten kullanılıyor. Lütfen başka bir tane deneyin.';
        } else {

            $result = User::register([
                'name' => $name,
                'surName' => $surName,
                'userName' => $userName,
                'mail' => $mail,
                'password' => password_hash($password1, PASSWORD_DEFAULT)
            ]);

            if ($result) {
                User::Login([
                    'id' =>  $db->lastInsertId(),
                    'name' => $name,
                    'surName' => $surName,
                    'userName' => $userName,
                    'mail' => $mail
                ]);
                header('Location:' . site_url());
            } else {
                $error = 'Bir sorun oluştu, lütfen daha sonra tekrar deneyin.';
            }
        }
    }
} elseif (post('login_submit')) {

    $userName = post('userName');
    $password = post('password');

    if (!$userName) {
        $error = 'Lütfen kullanıcı adınızı yazın.';
    } elseif (!$password) {
        $error = 'Lütfen şifrenizi girin.';
    } else {
        $row = User::userExist($userName);

        if ($row) {
            $password_verify = password_verify($password, $row['password']);
            if ($password_verify) {

                if (post("remember")) {
                    setcookie("member_userName", $_POST["userName"], time() + (10 * 365 * 24 * 60 * 60));
                    setcookie("member_password", $_POST["password"], time() + (10 * 365 * 24 * 60 * 60));
                } else {
                    setcookie("member_userName", "");
                    setcookie("member_password", "");
                }
                User::Login($row);
                header('Location:' . site_url());
            } else {
                $error = 'Şifre hatalı.';
            }
        } else {
            $error = 'Kullanıcı adı hatalı.';
        }
    }
}

require view('login_register');
