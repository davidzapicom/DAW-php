<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

   test_input();
?>