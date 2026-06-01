<?php

include "config.php";
$query = mysqli_query($conn, "SELECT * FROM sanju");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>CRUD Operation Using PHP & MySQL | Codehal</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <div class="container">
      <h1>Appointment Add</h1>
      <a href="add.php">Add User </a>

      <table>
         <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Date</th>
            <th>Time</th>
            <th>Barber Name</th>
            <th>Select Service</th>
            <th>Actions</th>
         </tr>

         <?php
         $no = 1;
         while ($sanju = mysqli_fetch_assoc($query)) : ?>
            <tr>
               <td><?= $no++ ?></td>
               <td><?= $sanju['name'] ?></td>
               <td><?= $sanju['phone'] ?></td>
               <td><?= $sanju['email'] ?></td>
               <td><?= $sanju['gender'] ?></td>
               <td><?= $sanju['date'] ?></td>
               <td><?= $sanju['time'] ?></td>
               <td><?= $sanju['barber_name'] ?></td>
               <td><?= $sanju['select_service'] ?></td>
               <td>
                 <a href="edit.php?id=<?= $sanju['id'] ?>">Edit</a>
                 <a href="action.php?delete=<?= $sanju['id'] ?>" class="btn-delete">Delete</a>
               </td>
           </tr>
         <?php endwhile; ?>
      </table>
   </div>
</body>

</html>