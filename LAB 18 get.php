<!DOCTYPE html>
<html>

<body>

    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" required
        value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>"><br><br>
        Email: <input type="email" name="email" required
        value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>"><br><br>
        Password: <input type="password" name="password" required><br><br>
        Age: <input type="number" name="age" required
        value="<?php echo isset($_GET['age']) ? htmlspecialchars($_GET['age']) : ''; ?>"><br><br>

        Gender: 
        <input type="radio" name="gender" value="Male" <?php echo (isset($_GET['gender']) && $_GET['gender'] == 'Male') ? 'checked' : ''; ?>> Male
        <input type="radio" name="gender" value="female" <?php echo (isset($_GET['gender']) && $_GET['gender'] == 'female') ? 'checked' : ''; ?>> Female
        <input type="radio" name="gender" value="other" <?php echo (isset($_GET['gender']) && $_GET['gender'] == 'other') ? 'checked' : ''; ?>> Other
        <br>
        
        Course:
        <select name="course">
            <option value="BSIT" <?php echo (isset($_GET['course']) && $_GET['course'] == 'BSIT') ? 'selected' : ''; ?>> BSIT</option>
            <option value="BSOA" <?php echo (isset($_GET['course']) && $_GET['course'] == 'BSOA') ? 'selected' : ''; ?>>BSOA</option>
        </select>
        <br><br>

        Hobbies: 
        <input type="checkbox" name="hobbies[]" value="Reading" <?php echo (isset($_GET['hobbies']) && in_array('Reading', $_GET['hobbies'])) ? 'checked' : ''; ?>> Reading
        <input type="checkbox" name="hobbies[]" value="Music" <?php echo (isset($_GET['hobbies']) && in_array('Music', $_GET['hobbies'])) ? 'checked' : ''; ?>> Music
        <input type="checkbox" name="hobbies[]" value="Sports" <?php echo (isset($_GET['hobbies']) && in_array('Sports', $_GET['hobbies'])) ? 'checked' : ''; ?>> Sports
        <br><br>

        Message: <br>
        <textarea name="message" rows="5" cols="40"><?php echo isset($_GET['message']) ? htmlspecialchars($_GET['message']) : ''; ?></textarea><br>
        
        <input type="submit">
        <input type="reset">
    </form><br><br>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {


    if (empty($_GET["name"])) {
        echo "Name is required <br>";
    }

    if (empty($_GET["email"])) {
        echo "Email is required <br>";
    } else {

        $email = htmlspecialchars($_GET["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email <br>";
        }
    }

    if (
        !empty($_GET['name']) &&
        !empty($_GET['email']) &&
        !empty($_GET['gender']) &&
        !empty($_GET['course']) &&
        !empty($_GET['message']) &&
        !empty($_GET['hobbies']) &&
        !empty($_GET['age'])
        
    ) {

        $name = htmlspecialchars($_GET["name"]);
        $email = htmlspecialchars($_GET["email"]);
        $gender = htmlspecialchars($_GET["gender"]);
        $course = htmlspecialchars($_GET["course"]);
        $message = htmlspecialchars($_GET["message"]);
        $hobbies = isset($_GET['hobbies']) ? $_GET['hobbies'] : [];
        $age = htmlspecialchars($_GET["age"]);

        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: Successfully received<br>";
        echo "Course: " . $course . "<br>";
        echo "Hobbies: " . implode(", ", $hobbies) . "<br>";
        echo "Message: " . $message . "<br>";
      }
    }


    ?>

</body>

</html>
