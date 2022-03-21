<?php

function get_path($name)
{

    $connect = mysqli_connect('127.0.0.1:3306', 'root',  '',  'my_album');

    if(!$connect){
        die('error with database');
    }
    else{
        $path = mysqli_query($connect, "SELECT path FROM my_album.photos_path WHERE titel = '$name'");
        $path = mysqli_fetch_all($path);

        return $path[0][0];
    }
}
?>