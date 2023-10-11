<?php
    require __DIR__ . "/private/config.php";

    $host = $config['database']['hostname'];
    $username = $config['database']['username'];
    $password = $config['database']['password']; //Your password may be an empty string
    $database = $config['database']['database'];
    
    //$conn is our database object
    $db = mysqli_connect($host, $username, $password, $database);
    if(!$db) :
        die('Cannot connect to database');
    else :
     // echo "Successful Connection!";
    endif;

    $_SESSION["userName"] = "Shannon";
    $_SESSION["isAuthenticated"] = false;

   if(isset($_POST['login'])){
       print_r($_POST);
        // Do some verification checks

        if($_POST['user_name'] == 'Shannon' && $_POST['user_password'] == 'password'){
            $_SESSION["isAuthenticated"] = true;
        }

   }

    include('comments.php');

    $sql = "SELECT * FROM comments";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $rows = array();
        while($row = $result->fetch_assoc()) {
            array_push($rows,array('id'=>$row['id'], 'name'=>$row['user_name'], 'text'=>$row['text'], 'date'=>$row['date_created']));
        }
        // $rows = $result ->fetch_assoc();
        // echo '<pre>';
        // print_r($rows);
        // echo '</pre>';
        // exit();
    } else {
        echo "0 results";
    }

    

    $db->close();
?>
