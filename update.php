
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Feedback</title>
        <link rel="stylesheet" href="4chan.css"/>
    </head>
    <body>

        <h3 style="text-align: center">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "admin";
            $dbname = "programming";

// Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "UPDATE customer SET password = '". $_POST["pass"] ."' WHERE email = '" . $_POST["email"] . "' ;";

            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }


            mysqli_close($conn);
            ?>
        </h3>


      
    </body>
</html>
