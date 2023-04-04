<?php

require_once './db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $title = $_POST["title"] ?? null;

    $target_dir = "../img/slider/";

    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        try {
            $insert_imges = insert_images($title, str_replace("../", "", $target_file));
            if ($insert_imges === true) print_r(get_images_details());
            else echo "Failed to insert images";
        } catch (\Throwable $th) {
            print_r($th->getMessage());
        }
    } else echo "Not uploaded!!!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="title" />
        <input type="file" name="image" id="">
        <input name="submit" type="submit" />
    </form>
</body>

</html>