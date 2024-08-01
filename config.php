<?php

$conn = new mysqli('localhost','root','','crm-digi');
if ($conn->connect_error) {
    die('Connectivity Error..'. $conn->connect_error);
}