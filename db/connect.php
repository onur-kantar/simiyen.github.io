<?php
$db_name = 'simiyen';
$db_username = 'root';
$db_password = '';
try {
    $db = new PDO("mysql:host=localhost;dbname=$db_name", "$db_username", "$db_password");
} catch (PDOException $pd) {
    print "Bağantı Hatası!: " . $e->getMessage() . "<br/>";
    die();
}
?>