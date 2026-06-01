<?php

$conn = mysqli_connect("sql300.infinityfree.com", "if0_42060325", "sanjusalon0", "if0_42060325_sanju_salon_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}