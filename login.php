<?php

    if (isset($_POST['submit'])) {
        $email = $_POST('email');
        $pass = $_POST('pass');

        echo $email;
    }

?>