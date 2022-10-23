<?php

$conn = new mysqli("localhost", "root", "", "studentsDB");
$result = $conn->query("SELECT * FROM students");

include "template.php";