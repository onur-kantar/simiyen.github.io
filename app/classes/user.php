<?php

class User
{
    public static function Login($data)
    {
        if (isset($data['id']))
            $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['surName'] = $data['surName'];
        $_SESSION['userName'] = $data['userName'];
        $_SESSION['mail'] = $data['mail'];
        if (isset($data['role_id']))
            $_SESSION['role'] = $data['role_id'];
    }
    public static function changePass($pass)
    {
        $_SESSION['password'] = $pass;
    }
    public static function userExist($userName)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE userName = :userName');
        $query->execute([
            'userName' => $userName
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function register($data)
    {
        global $db;

        $query = $db->prepare('INSERT INTO users SET name = :name, surName = :surName, userName = :userName, mail = :mail, password = :password');
        return  $query->execute($data);
    }
}
