<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include "config.php";

// Delete handler
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM sanju WHERE id=$id");
    header("Location: index.php");
    exit;
}

// Add handler
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $barber_name = $_POST['barber_name'];
    $select_service = $_POST['select_service'];

    $result = mysqli_query($conn, "INSERT INTO sanju (name, phone, email, gender, date, time, barber_name, select_service) 
                     VALUES ('$name', '$phone', '$email', '$gender', '$date', '$time', '$barber_name', '$select_service')");
    
    if (!$result) {
        die("Insert Error: " . mysqli_error($conn));
    }
    
    header("Location: index.php");
    exit;
}

// Update handler
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $barber_name = $_POST['barber_name'];
    $select_service = $_POST['select_service'];

    // ID එක ලැබුණාද check කරනවා
    if (empty($id)) {
        die("Error: ID එක හම්බවුනේ නෑ! POST data: " . print_r($_POST, true));
    }

    $sql = "UPDATE sanju SET name='$name', phone='$phone', email='$email', gender='$gender', date='$date', time='$time', barber_name='$barber_name', select_service='$select_service' WHERE id=$id";
    
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        die("Update Error: " . mysqli_error($conn) . "<br>SQL: " . $sql);
    }
    
    // Affected rows check
    if (mysqli_affected_rows($conn) == 0) {
        die("Warning: Query ran but 0 rows updated. ID=$id exist කරනවද? SQL: $sql");
    }

    header("Location: index.php");
    exit;
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM sanju WHERE id=$id");
    header("Location: index.php");
    exit;
}