<?php

include "config.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM sanju WHERE id=$id");
$sanju = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Edit Appointment</h1>
            <form method="POST" action="action.php">
                <!-- FIX: hidden field එකෙන් id එක pass කරනවා -->
                <input type="hidden" name="id" value="<?= $sanju['id'] ?>">

                <input type="text" name="name" placeholder="Name" value="<?= $sanju['name'] ?>" required>
                <input type="text" name="phone" placeholder="Phone No" value="<?= $sanju['phone'] ?>" required>
                <input type="email" name="email" placeholder="Email" value="<?= $sanju['email'] ?>" required>

                <!-- FIX: gender check කරන්න sanju['gender'] use කරනවා -->
                <select name="gender" required>
                  <option value="">Select Gender</option>
                  <option value="Male" <?= ($sanju['gender'] == 'Male') ? 'selected' : '' ?>>Male</option>
                  <option value="Female" <?= ($sanju['gender'] == 'Female') ? 'selected' : '' ?>>Female</option>
                </select>

                <input type="date" name="date" placeholder="Date" value="<?= $sanju['date'] ?>" required>
                <input type="time" name="time" placeholder="Time" value="<?= $sanju['time'] ?>" required>
                <input type="text" name="barber_name" placeholder="Barber Name" value="<?= $sanju['barber_name'] ?>" required>

                <select name="select_service" required>
                  <option value="">Select Service</option>
                  <option value="Hair Cut" <?= ($sanju['select_service'] == 'Hair Cut') ? 'selected' : '' ?>>Hair Cut</option>
                  <option value="Shaving" <?= ($sanju['select_service'] == 'Shaving') ? 'selected' : '' ?>>Shaving</option>
                  <option value="Hair Color" <?= ($sanju['select_service'] == 'Hair Color') ? 'selected' : '' ?>>Hair Color</option>
                  <option value="Tattoo" <?= ($sanju['select_service'] == 'Tattoo') ? 'selected' : '' ?>>Tattoo</option>
                  <option value="Massage" <?= ($sanju['select_service'] == 'Massage') ? 'selected' : '' ?>>Massage</option>
                  <option value="Facial" <?= ($sanju['select_service'] == 'Facial') ? 'selected' : '' ?>>Facial</option>
                  <option value="Manicure" <?= ($sanju['select_service'] == 'Manicure') ? 'selected' : '' ?>>Manicure</option>
                  <option value="Pedicure" <?= ($sanju['select_service'] == 'Pedicure') ? 'selected' : '' ?>>Pedicure</option>
                  <option value="Eyebrows" <?= ($sanju['select_service'] == 'Eyebrows') ? 'selected' : '' ?>>Eyebrows</option>
                  <option value="Layer Cut" <?= ($sanju['select_service'] == 'Layer Cut') ? 'selected' : '' ?>>Layer Cut</option>
                  <option value="Oil Treatment" <?= ($sanju['select_service'] == 'Oil Treatment') ? 'selected' : '' ?>>Oil Treatment</option>
                  <option value="Hair Treatment" <?= ($sanju['select_service'] == 'Hair Treatment') ? 'selected' : '' ?>>Hair Treatment</option>
                  <option value="Ear & Eyebrow Piercing" <?= ($sanju['select_service'] == 'Ear & Eyebrow Piercing') ? 'selected' : '' ?>>Ear & Eyebrow Piercing</option>
                  <option value="Other" <?= ($sanju['select_service'] == 'Other') ? 'selected' : '' ?>>Other</option>
                </select>

                <div class="btn-box">
                    <button type="submit" class="btn" name="update">Update</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>