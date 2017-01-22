
<html>
    <head>
        <meta charset="UTF-8">
        <title>Signup Feedback</title>
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

            $sql = "INSERT INTO `customer` (`name`, `email`, `password`, `contact`)"
                    . " VALUES ('" . $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["pass"] . "', '" . $_POST["contact"] . "')";

            if (mysqli_query($conn, $sql)) {
                echo "<br>New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }


            mysqli_close($conn);
            ?>
        </h3>


        <table style="display: table;" class="postForm hideMobile" id="postForm">
            <tbody>
                <tr>
                    <td>Name</td>
                    <td><?php echo $_POST["name"]; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $_POST["email"]; ?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><?php echo $_POST["pass"]; ?></td>
                </tr>
                <tr>
                    <td>Contact No.</td>
                    <td><?php echo $_POST["contact"]; ?></td>
                </tr>


            </tbody>

        </table>

    </body>
</html>
