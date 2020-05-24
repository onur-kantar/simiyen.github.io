<?php
if (post('submit')) {
    $name = post('name');
    $surName = post('surName');
    $mail = post('mail');
    $title = post('title');
    $message = post('message');
    $id = session('id');
    $sentMail = "onurkantr@gmail.com";
    if (empty($id)) {
        $error = "Mesaj Göndermek İçin Lütfen Giriş Yapın";
    } else {
        $query = $db->insert('contact')
            ->set([
                'contact_name' => $name,
                'contact_surName' => $surName,
                'contact_mail' => $mail,
                'title' => $title,
                'message' => $message,
                'user_id' => $id,
            ]);

        try {
            $mail = mailSend($name, $surName, $mail, $title, $message, $sentMail);
            $success = "Mesaj Başarıyla Gönderildi";
        } catch (Exception $e) {
            $error = "Mail Gönderilemedi. Hata: {$mail->ErrorInfo}";
        }
    }
}
require view('contact');
