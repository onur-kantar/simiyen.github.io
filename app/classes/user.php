<?php

class User
{
    public static function Login($data)
    {
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['surName'] = $data['surName'];
        $_SESSION['mail'] = $data['mail'];
        if(isset($data['role_id']))
        $_SESSION['role'] = $data['role_id'];
        
    }
    public static function userExist($mail)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE mail = :mail');
        $query->execute([
            'mail' => $mail
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function register($data)
    {
        global $db;

        $query = $db->prepare('INSERT INTO users SET name = :name, surName = :surName, mail = :mail, password = :password');
            return  $query->execute($data);
    }
}
