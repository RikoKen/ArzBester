<?php 
session_start();
require_once'db.php';
if($_POST) {
    $pass = $_POST['password'];
    $name = $_POST['username'];

    if(!$pass || !$name) {
        $response = [
            'type' => 1,
            'message' => 'Не все поля заполнены!',
            'status' => false
        ];
        echo json_encode($response);
    } else {

        $select = "SELECT * FROM `accounts` WHERE `name`='".$name."' AND `password`='".$pass."'";
        $selected = "SELECT * FROM `accounts` WHERE `name`='".$name."'";
        $result = $connect->query($select);
        $resulted = $connect->query($selected);
        if ($result->num_rows > 0) {
            $_SESSION['player_auth'] = 1;
            $_SESSION['username'] = $name;

            $response = [
                'type' => 1,
                'message' => '',
                'status' => true
            ];
            echo json_encode($response);
        } else if ($resulted->num_rows > 0) {
            $response = [
                'type' => 1,
                'message' => 'Пароль неправильный!',
                'status' => false
            ];
            echo json_encode($response);
        } else {
            $response = [
                'type' => 1,
                'message' => 'Такого пользователя не существует!',
                'status' => false
            ];
            echo json_encode($response);
        }
    }
}

?>