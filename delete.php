<?php

include "connection.php";

$id = $_GET['id'] ?? 0;
$conn->query("DELETE FROM students WHERE ")