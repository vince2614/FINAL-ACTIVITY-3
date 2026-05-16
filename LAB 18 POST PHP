<!DOCTYPE html>
<html>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" required
        value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"><br><br>
        Email: <input type="email" name="email" required
        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"><br><br>
        Password: <input type="password" name="password" required><br><br>
        Age: <input type="number" name="age" required
        value="<?php echo isset($_POST['age']) ? htmlspecialchars($_POST['age']) : ''; ?>"><br><br>

        Gender: 
        <input type="radio" name="gender" value="Male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'Male') ? 'checked' : ''; ?>> Male
        <input type="radio" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'checked' : ''; ?>> Female
        <input type="radio" name="gender" value="other" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'other') ? 'checked' : ''; ?>> Other
        <br>
        
        Course:
        <select name="course">
            <option value="BSIT" <?php echo (isset($_POST['course']) && $_POST['course'] == 'BSIT') ? 'selected' : ''; ?>> BSIT</option>
            <option value="BSOA" <?php echo (isset($_POST['course']) && $_POST['course'] == 'BSOA') ? 'selected' : ''; ?>>BSOA</option>
        </select>
        <br><br>

        Hobbies: 
        <input type="checkbox" name="hobbies[]" value="Reading" <?php echo (isset($_POST['hobbies']) && in_array('Reading', $_POST['hobbies'])) ? 'checked' : ''; ?>> Reading
        <input type="checkbox" name="hobbies[]" value="Music" <?php echo (isset($_POST['hobbies']) && in_array('Music', $_POST['hobbies'])) ? 'checked' : ''; ?>> Music
        <input type="checkbox" name="hobbies[]" value="Sports" <?php echo (isset($_POST['hobbies']) && in_array('Sports', $_POST['hobbies'])) ? 'checked' : ''; ?>> Sports
        <br><br>

        Message: <br>
        <textarea name="message" rows="5" cols="40"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea><br>
        
        <input type="submit">
        <input type="reset">
    </form><br><br>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["name"])) {
        echo "Name is required <br>";
    }

    if (empty($_POST["email"])) {
        echo "Email is required <br>";
    } else {

        $email = htmlspecialchars($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email <br>";
        }
    }

    if (
        !empty($_POST['name']) &&
        !empty($_POST['email']) &&
        !empty($_POST['gender']) &&
        !empty($_POST['course']) &&
        !empty($_POST['message']) &&
        !empty($_POST['hobbies']) &&
        !empty($_POST['age'])
        
    ) {

        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $course = htmlspecialchars($_POST["course"]);
        $message = htmlspecialchars($_POST["message"]);
        $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
        $age = htmlspecialchars($_POST["age"]);

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
