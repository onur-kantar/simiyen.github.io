<?php

function controller($controllerName)
{
    $controllerName = strtolower($controllerName);
    return PATH . '/app/controller/' . $controllerName . '.php';
}

function view($viewName)
{
    return PATH . '/app/view/' . $viewName . '.php';
}

function route($index)
{
    global $route;
    return isset($route[$index]) ? $route[$index] : false;
}

function session($name)
{
    return isset($_SESSION[$name]) ? $_SESSION[$name] : false;
}

function mailSend($name, $surName, $myMail, $title, $message, $sentMail)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'onurkantaryedek@gmail.com';
    $mail->Password   =                                                                                                                                                                                 '1903forza';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet = 'UTF-8';

    $mail->Subject = $title;
    $mail->Body    = "<b>İçerik :</b> $message <br>
                     <b>Gönderen Adı :</b> $name <br>
                     <b>Gönderen Soyadı :</b> $surName <br>
                     <b>Gönderen Maili :</b> $myMail <br>";

    $mail->isHTML(true);
    $mail->setFrom('onurkantaryedek@gmail.com', 'Web Tasarım Projesi');
    $mail->addAddress($sentMail, 'Mail Address');

    $mail->send();

    return $mail;
}
