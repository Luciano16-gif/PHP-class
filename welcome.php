<html>
    <body>
        <?php
            // define variables and set to empty values
            $name = $email = $gender = $comment = $website = "";
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["name"])) {
                    $name = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                }

                if (empty($_POST["email"])) {
                    $email = "Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                }
            
                if (empty($_POST["website"])) {
                    $website = "Webiste is required";
                } else {
                    $website = test_input($_POST["website"]);
                }
            
                if (empty($_POST["comment"])) {
                    $comment = "Comment is required";
                } else {
                    $comment = test_input($_POST["comment"]);
                }
            
                if (empty($_POST["gender"])) {
                    $gender = "Gender is required";
                } else {
                    $gender = test_input($_POST["gender"]);
                }
            }
        ?>
        <p>Welcome <?php echo $name; ?><br></p>
        <p>Your email address is: <?php echo $email; ?></p>
        <p>Your email address is: <?php echo $website; ?></p>
        <p>Your email address is: <?php echo $comment; ?></p>
        <p>Your email address is: <?php echo $gender; ?></p>
    </body>
</html>