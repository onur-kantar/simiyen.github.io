<?php

if (post('register_submit')) {

    $name = post('name');
    $surName = post('surName');
    $mail = post('mail');
    $password1 = post('password1');
    $password2 = post('password2');


    if (!$name) {
        $error = 'Lütfen adınızı yazın.';
    } elseif (!$surName) {
        $error = 'Lütfen soyadınızı yazın.';
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $error = 'Lütfen geçerli bir e-posta adresi yazın.';
    } elseif (!$password1 || !$password2) {
        $error = 'Lütfen şifrenizi girin.';
    } elseif ($password1 != $password2) {
        $error = 'Girdiğiniz şifreler birbiriyle uyuşmuyor.';
    } else {

        $row = User::userExist($mail);

        if ($row) {
            $error = 'Bu e-posta zaten kullanılıyor. Lütfen başka bir tane deneyin.';
        } else {

            $result = User::register([
                'name' => $name,
                'surName' => $surName,
                'mail' => $mail,
                'password' => password_hash($password1, PASSWORD_DEFAULT)
            ]);

            if ($result) {
                User::Login([
                    'id' =>  $db->lastInsertId(),
                    'name' => $name,
                    'surName' => $surName,
                    'mail' => $mail
                ]);
                header('Location:' . site_url());
            } else {
                $error = 'Bir sorun oluştu, lütfen daha sonra tekrar deneyin.';
            }
        }
    }
} elseif (post('login_submit')) {

    $mail = post('mail');
    $password = post('password');

    if (!$mail) {
        $error = 'Lütfen adınızı yazın.';
    } elseif (!$password) {
        $error = 'Lütfen şifrenizi girin.';
    } else {
        $row = User::userExist($mail);

        if ($row) {
            $password_verify = password_verify($password, $row['password']);
            if ($password_verify) {
                if (post("remember")) {
                    setcookie("member_mail", $_POST["mail"], time() + (10 * 365 * 24 * 60 * 60));
                    setcookie("member_password", $_POST["password"], time() + (10 * 365 * 24 * 60 * 60));
                } else {
                    if (isset($_COOKIE["member_login"])) {
                        setcookie("member_mail", "");
                        setcookie("member_password", "");
                    }
                }
                User::Login($row);
                header('Location:' . site_url());
            } else {
                $error = 'Şifre hatalı.';
            }
        } else {
            $error = 'E-posta hatalı.';
        }
    }

}

require view('login_register');
