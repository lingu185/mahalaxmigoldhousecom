<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'imgupload');

function raise_exception($message, $code)
{
    throw new Exception($message, $code);
}

function connect_to_db()
{
    $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if ($conn === false) raise_exception("Failed to connect to DB...", 400);

    return $conn;
}

function insert_images($title, $url)
{
    $conn = connect_to_db();

    $insert_query = "INSERT INTO images(title, url) VALUES('$title', '$url')";
    $response = mysqli_query($conn, $insert_query);
    if ($response === false) raise_exception("Failed to insert DB record...", 410);

    $conn->close();
    return true;
}

function get_images_details()
{
    $conn = connect_to_db();

    $query = "SELECT * FROM images";
    $mysqli_result = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC);

    $conn->close();

    return $result;
}

function insert_product($name, $catagory, $label, $offer, $image)
{
    $conn = connect_to_db();
    $insert_query = "INSERT INTO productupload(name, catagory, label, offer, image) VALUES('$name','$catagory', '$label','$offer','$image')";
    $response = mysqli_query($conn, $insert_query);
    if ($response === false) raise_exception("Failed to insert DB record...", 410);

    $conn->close();
    return true;
}

function get_product_details()
{
    $conn = connect_to_db();

    $query = "SELECT * FROM productupload";
    $mysqli_result = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC);

    $conn->close();

    return $result;
}
function insert_imagesnew($title, $label, $catagory, $url)
{
    $conn = connect_to_db();

    $insert_query = "INSERT INTO chain(title, label, catagory, url) VALUES('$title','$label','$catagory','$url')";
    $response = mysqli_query($conn, $insert_query);
    if ($response === false) raise_exception("Failed to insert DB record...", 410);

    $conn->close();
    return true;
}

function get_images_detailsnew()
{
    $conn = connect_to_db();

    $query = "SELECT * FROM chain";
    $mysqli_result = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC);

    $conn->close();

    return $result;
}