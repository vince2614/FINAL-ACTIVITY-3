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
