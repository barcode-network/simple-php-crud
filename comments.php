<?php

    if(isset($_POST['comment_save'])){
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        $name = $_POST['comment_author'];
        $text = $_POST['comment_text'];
        $date = date('Y-m-d h:i:s');

        $sql = "INSERT INTO comments(user_name, text, date_created) VALUES ('{$name}','{$text}','{$date}')";
        // $result= $conn->query($sql)
        if ($db->query($sql) === TRUE) {
            echo "New comment added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }

    }
?>