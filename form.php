<?php 
session_start();
require_once 'db.php';
if($_POST) {
    $bcca = $_POST['bdddcc'];
    $playerid = $_SESSION['playerid'];

    $sql = "SELECT * FROM `promocode` WHERE `name` = '".$bcca."'";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0){
        $sqll = "SELECT * FROM `promocode_activations` WHERE `owner_id` = '".$playerid."' AND `name` = '".$bcca."'";
        $resultt = mysqli_query($connect, $sqll);
        if(mysqli_num_rows($resultt) > 0) {
            $responce = [
                'status' => false,
                'message' => 'Вы уже активировали данный промокод'
            ];
            echo json_encode($responce);
        } else {
            $sqli = "INSERT INTO `promocode_activations` (`owner_id`, `name`, `time`, `status`, `type`, `count`) VALUES ('$playerid', '$bcca', 0,0,0, 100000)";

            mysqli_query($connect, $sqli);
            $responce = [
                'status' => true,
                'message' => 'Промокод '.$bcca.' успешно активирован'
            ];
            echo json_encode($responce);
        }
    } else {
        $responce = [
            'status' => false,
            'message' => 'Промокода '.$bcca.' не существует'
        ];
        echo json_encode($responce);
    }
}
?>