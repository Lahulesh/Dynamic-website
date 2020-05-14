<?php

$server = "localhost";
$username = "root";
$db = "home";
$password = "";



$conection = mysqli_connect($server,$username,$password,$db);

if($conection)
{

}else
{
    ?>
    <script>
        alert("Try Again Later");
    </script>

    <?php
    die("Try Again Later" . mysqli_connect_error());


}

?>