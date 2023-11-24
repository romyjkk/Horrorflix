<?php
//$array = [
//    'test' => 'Ajax'
//];
//echo json_encode($array);
//


//var_dump($_POST);

$name = $email = $age = $description = $feedback = $feedback_name = $feedback_email = $feedback_age = $feedback_description = "";
$error = "Something went wrong! Please try again.\n";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $is_error = false;
        $errors = [];

        // name validation
        $name = $_POST["name"];
        $namelength = strlen($name);
        if ($namelength > 2 && $namelength < 101) {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $is_error = true;
                $errors["name"] = "Please make sure your input only contains letters and white space.";
            } else {
                $name = trim(preg_replace("/^\s+|\s+$|\s+(?=\s)/", "", $name));
                $name = ucwords($name);
                $name = test_input($_POST["name"]);
                $name = test_name($_POST["name"]);
            }
        } elseif ($namelength > 100) {
            $is_error = true;
            $errors["name"] = "Please provide a name with less than 100 characters. " . $_POST["name"] . " is not a valid input.";
        } elseif ($namelength > 0 && $namelength < 3) {
            $is_error = true;
            $errors["name"] = "Please provide a name with at least 3 characters. " . $_POST["name"] . " is not a valid input.";
        } else {
            $is_error = true;
            $errors["name"] = "This field is required!";
        }

        // e mail validation
        $email = $_POST["email"];
        $email_length = strlen($email);
        if (!empty($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $is_error = true;
                $errors["email"] = "Please provide an actual e mail address, " . $_POST["email"] . " is not a valid input.";
            } else {
                $email = test_input($_POST["email"]);
            }
        } else {
            $is_error = true;
            $errors["email"] = "This field is required!";
        }

        // age validation

        $now = new DateTimeImmutable(); // There's nothing inside of the (), so it will take today's date and time.
        $age = new DateTimeImmutable($_POST["age"]);

        $hundred_twenty_years_ago = $now->modify("-120 years");
        $sixteen_years_ago = new DateTimeImmutable(("-16 years"));

        if (!empty($_POST["age"])) {
            if ($age < $now && $age > $hundred_twenty_years_ago) {
                if ($age < $sixteen_years_ago) {
                    $age = test_age($age);
                } else {
                    $is_error = true;
                    $errors["age"] = "You're not old enough to enter. You need to be at least 16 years old.";
                }
            } else {
                $is_error = true;
                $errors["age"] = "Please provide an actual date, " . $_POST["age"] . " is not a valid input.";
            }
        } else {
            $is_error = true;
            $errors["age"] = "Please provide a date!";
        }

        // description validation
        $description = $_POST["description"];
        $text_length = strlen($description);

        if (!empty($description)) {
            if ($text_length > 500) {
                $is_error = true;
                $errors["description"] = "We love your enthousiasm, but please don't use more than 500 characters!";
            } else {
                $description = test_input($_POST["description"]);
                $description = test_description($_POST["description"]);
                $description = trim(preg_replace("/^\s+|\s+$|\s+(?=\s)/", "", $description));
            }
        } else {
            $is_error = true;
            $errors["description"] = "This field is required!";
        }

        if ($is_error) {
            echo json_encode([
                "status" => "error",
                "errors" => $errors
            ]);
        } else {
            echo json_encode([
                "status" => "succes"
            ]);

            $to = "romy@go2people.nl";
            $subject = "Horrorflix Giveaway";
            $message =
//                "Het werkt!!!\n
//                Groetjes, $name.";
                "$name joined the giveaway.
            \nThey're at least 16 years old, being born on $age.
            \nThis is good news: we have another worthy sacrifice for our dark Lord, Lucifer.
            \n$name just doesn't know about that yet... they think it's just some silly prank.
            \nWe can reach them on $email.
            \nThe following is what they wanted to tell us about their favorite horror movie(s):
            \n\"$description\"
            \nMuhahahaha!";

            mail($to, $subject, $message);

        }

    } else {
        $is_error = true;
        $errors["general"] = "Please make sure the entire form has been filled in before you send it!";
    }

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function test_name($name){
    $name = trim(preg_replace("/^\s+|\s+$|\s+(?=\s)/", "", $name));
    $name = ucwords($name);
    return $name;
}

function test_description($description){
    $description = trim(preg_replace("/^\s+|\s+$|\s+(?=\s)/", "", $description));
    return $description;
}

function test_age($age) {
    $age = $age->format("Y-m-d");
    return $age;
}