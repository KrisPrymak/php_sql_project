<?php

include "connection.php";

$result = $conn->query("SELECT * FROM students ORDER BY year");

$courses = [
    "WEB программирование",
    "DEVOPS",
    "UI/UX",
];

include "template.php";