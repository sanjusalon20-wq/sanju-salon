<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Appointment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Apply Appointment</h1>
            <form method="POST" action="action.php">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="phone" placeholder="Phone No" required>
                <input type="email" name="email" placeholder="Email" required>
                <select name="gender" required>
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <input type="date" name="date" placeholder="Date" required>
                <input type="time" name="time" placeholder="Time" required>
                <input type="text" name="barber_name" placeholder="Barber Name">
                <select name="select_service">
                <option value="">Select Service</option>
                  <option value="Hair Cut">Hair Cut</option>
                  <option value="Shaving">Shaving</option>
                  <option value="Hair Color">Hair Color</option>
                  <option value="Tattoo">Tattoo</option>
                  <option value="Massage">Massage</option>
                  <option value="Facial">Facial</option>
                  <option value="Manicure">Manicure</option>
                  <option value="Pedicure">Pedicure</option>
                  <option value="Eyebrows">Eyebrows</option>
                  <option value="Layer Cut">Layer Cut</option>
                  <option value="Oil Treatment">Oil Treatment</option>
                  <option value="Hair Treatment">Hair Treatment</option>
                  <option value="Ear & Eyebrow Piercing">Ear & Eyebrow Piercing</option>
                  <option value="Other">Other</option>
                </select>
                <div class="btn-box">
                    <button type="submit" class="btn" name="add">Submit</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>