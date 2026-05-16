<!DOCTYPE html>
<html>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" 
        value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"><br>
        Email: <input type="email" name="email" 
        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"><br><br>
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

        Message: <br>
        <textarea name="message" rows="5" cols="40"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea><br>
        
        <input type="submit">
    </form><br><br>

    <?php

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


    if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        $course = htmlspecialchars($_POST["course"]);
    } 

    if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        $message = htmlspecialchars($_POST["message"]);
    }


    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['course'])
        && isset($_POST['message'])) {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $course = htmlspecialchars($_POST["course"]);
        $message = htmlspecialchars($_POST["message"]);
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Course: " . $course . "<br>";
        echo "Message: " . $message . "<br>";
    }

    ?>

</body>

</html>
