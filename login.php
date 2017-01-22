



<html>
    <head>
        <meta charset="UTF-8">
        <title>login Feedback</title>
        <link rel="stylesheet" href="4chan.css"/>
    </head>
    <body>

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

        $sql = "SELECT * FROM `customer` WHERE `email` = '" . $_POST["email"] . "' AND `password` = '" . $_POST["pass"] . "';";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            ?>

            <h3 style="text-align: center"><br>Login Successful!<br></h3>


            <table style="display: table;" class="postForm hideMobile" id="postForm">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><?php echo $row["name"]; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $row["email"]; ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?php echo $row["password"]; ?></td>
                    </tr>
                    <tr>
                        <td>Contact No.</td>
                        <td><?php echo $row["contact"]; ?></td>
                    </tr>


                </tbody>

            </table>

<!--            <h1><br>THis is some test code<br></h1>-->

            <h3 style="text-align: center"><br>Change Your Password<br></h3>

            <form action="update.php" method="post">
                <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">
                <table style="display: table;" class="postForm hideMobile" id="postForm">
                    <tbody>
                        <tr>
                            <td>New Password</td>
                            <td><input name="pass" type="text"></td>
                        </tr>

                        <tr>
                            <td>

                            </td>
                            <td>
                                <input value="Change" type="submit">
                            </td>

                        </tr>
                    </tbody>

                </table>
            </form>
            
            <h3 style="text-align: center"><br>Delete Your Account<br></h3>
            
            <form action="delete.php" method="post">
                <input type="hidden" name="email" value="<?php echo $_POST["email"]; ?>">
                <table style="display: table;" class="postForm hideMobile" id="postForm">
                    <tbody>

                        <tr>
                            <td>

                            </td>
                            <td>
                                <input value="Delete" type="submit">
                            </td>

                        </tr>

                    </tbody>

                </table>
            </form>




            <?php
        } else {
            echo "<h1  style=\"text-align: center\">Incorrect Login Details</h1>";
        }

        mysqli_close($conn);
        ?> 




    </body>
</html>
