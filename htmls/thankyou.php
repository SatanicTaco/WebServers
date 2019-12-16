<!DOCTYPE html>

<html>
    <head>
        <title>thanks</title>
    </head>

    <body>
            <?php 
                $servername = "localhost";
                $username = "php";
                $password = "password";
                $dbname = "steaks";
                $first = htmlspecialchars($_POST['first']);
                $last = htmlspecialchars($_POST['last']);
                $doneness = htmlspecialchars($_POST['doneness']);
                $cut = htmlspecialchars($_POST['cut']);
            ?>
            <h3>Hello <?php echo $first ?> <?php echo $last ?>.</br>
            Your favorite steak is a <?php echo $doneness ?> <?php echo $cut ?>. </br> </br></h3>
            <?php
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $sql = "INSERT INTO steaks (first, last, cut, doneness)
                    VALUES ('{$first}', '{$last}', '{$cut}', '{$doneness}')";
                if (mysqli_query($conn, $sql)) {
                    echo "Thank you for submitting your application.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
            ?>
    </body>
</html>