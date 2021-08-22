<?php
        $conn = mysqli_connect("Localhost","root","","onlineeducations");

        if (!$conn) {
            die("Failed to connect to databases".mysqli_error($conn));
        }

?>