<?php

$id = $_SESSION['id'];
$password = post('password');
$newPassword = post('newPassword');
$reNewPassword = post('reNewPassword');

if (!$id) {
    header('Location:' . site_url('login'));
    exit;
}

if (post('submit')) {
    if (!(empty($newPassword) || empty($reNewPassword) || empty($password))) {

        $row = $db->from('users')
            ->select('password')
            ->where('id', $id)
            ->first();
        $passVerify = password_verify($password, $row['password']);
        if ($passVerify) {

            if ($newPassword == $reNewPassword) {

                $newPass = password_hash($newPassword, PASSWORD_DEFAULT);
                $db->update('users')
                    ->where('id', $id)
                    ->set(['password' => $newPass]);
                User::changePass($newPass);
                $success = 'Başarıyla güncelleştirildi.';
            } else {
                $error = 'Şifreler Uyumuşmuyor';
            }
        } else {
            $error = 'Şifrenizi yanlış girdiniz';
        }
    } else {
        $error = 'Eksik alanlar var, lütfen kontrol edin.';
    }
}
require view('change_password');
