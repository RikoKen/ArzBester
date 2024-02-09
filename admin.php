<?php 
session_start();
require_once 'db.php';
$title = $_POST["title"];
$content = $_POST["content"];
$date = $_POST["date"];
$photopost = $_POST['photo'];
$photo = $_FILES['photo'];

$player_auth = $_SESSION['player_auth'];
$admin = $_SESSION['admin'];

if($player_auth == 1 && $admin == 1) {
    if($_POST) {
        if(!$title || !$content || !$date || !$photo) {
            $response = [
                'status'=> false,
                'message'=> 'Не все поля заполнены'
            ];
            echo json_encode($response);
        } else {
            $allowed_types = array('image/png', 'image/jpeg', 'image/jpg');
            $type = $photo['type'];

            if(in_array($_FILES['photo']['type'], $allowed_types)) {
                $path = 'news/' . time() . $photo['name'];
                if (!move_uploaded_file($photo['tmp_name'], '../' . $path)) {
                    $response = [
                        "status" => false,
                        "message" => "Ошибка при загрузке аватарки"
                    ];
                    echo json_encode($response);
                } else {
                    $response = [
                        "status" => true,
                        "message" => 'Новость успешно создана'
                    ];
                    echo json_encode($response);
                    $path1 = time() . $photo['name'];
                    mysqli_query($connect, "INSERT INTO `news__site` (`id`, `title`, `description`, `date`, `href`, `src`) VALUES (NULL, '$title', '$content', '$date', '$path1', 0)");
                }
            } else {
                $response = [
                    "status" => false,
                    "message" => "Расширение файла должно быть .png или .jpeg"
                ];
                echo json_encode($response);
            }
        }
    }
} else {
    header('Location: ../index.php');
}
?>