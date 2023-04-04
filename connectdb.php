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
?>