<?php

include "connection.php";

$result = $conn->query("SELECT * FROM students ORDER BY year");

// $courses = [
//     "WEB программирование",
//     "DEVOPS",
//     "UI/UX",
// ];

$courses = $conn->query("SELECT * FROM courses ORDER BY title");

include "template.php";