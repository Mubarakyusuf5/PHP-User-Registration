<?php
$con = new mysqli('localhost', 'root', '', 'group13');
if (!$con) {
    die(mysqli_error($con));
}