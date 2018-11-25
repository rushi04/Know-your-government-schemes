<?php
$mysqli = new mysqli('localhost', 'root', '', 'gov');
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?>