<!DOCTYPE html>

<html>
    <head>
        <title>thanks</title>
    </head>

    <body>
            <?php 
                //login credentials to db
                $servername = "localhost";
                $username = "php";
                $password = "password";
                $dbname = "steaks";
                //store form inputs to variables
                $firstname = htmlspecialchars($_POST['firstname']);
                $lastname = htmlspecialchars($_POST['lastname']);
                $doneness = htmlspecialchars($_POST['doneness']);
                $cut = htmlspecialchars($_POST['cut']);
            ?>

            <!--user confirmation message-->
            <h3>Hello <?php echo $firstname ?> <?php echo $lastname ?>. </h3> </br>
            Your favorite steak is a <?php echo $doneness ?> <?php echo $cut ?>. </br> </br>

            <?php
                //connection to db
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                //insert data to db
                $sql = "INSERT INTO steaks (firstname, lastname, cut, doneness)
                    VALUES ('{$firstname}', '{$lastname}', '{$cut}', '{$doneness}')";
                //confirmation
                if (mysqli_query($conn, $sql)) {
                    echo "Thank you for submitting your application.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                //close connection 
                mysqli_close($conn);
                //blinks LED on pin 22 once the form is submtted
	        	`gpio blink 22`;
            ?>
    </body>
</html>