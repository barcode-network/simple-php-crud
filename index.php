<?php
    session_start();
?>
<?php include('data.php');?>
<?php include('server.php');?>

<html>
    <head>
        <title>Registration Test</title>
        
        <link href='style.css' rel="stylesheet"/>
        <script src="scripts.js"></script>
    </head>
    <body>
        

        <?php
            if(!$_SESSION['isAuthenticated']):
        ?>
            <div>You are not logged in!<?=$_SESSION['isAuthenticated'];?></div>

            <h3 id="login_title">Login</h3>
            <form id="form_login" method="post" action=<?=$_SERVER['PHP_SELF'];?>>
                <input type='text' name='user_name' id='user_name' placeholder='User name' />
                <input type='password' name='user_password' id='user_password' placeholder='Enter password'/>
                <input type='submit' name='login' id="login" value="Login" />
            </form>

            <a href='registration.php'>Sign up</a>

            <?php else: ?>
        <table>
            <tr><th>ID</th><th>Name</th><th>Text</th><th>Date</th></tr>
            <?php foreach($rows as $row):?>
                <tr>
                    <td><?=$row['id'];?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['text'];?></td>
                    <td><?=$row['date'];?></td>
                </tr>
            <?php endforeach;?>
        </table>
            

        <h3 id="form_title">Add Comment</h3>
        <form id="form_comments" method="post" action=<?=$_SERVER['PHP_SELF'];?>>
            <input type='text' name='comment_author' id='comment_author' placeholder='Comment author' />
            <input type='text' name='comment_text' id='comment_text' placeholder='Enter comment here'/>
            <input type='submit' name='comment_save' id="comment_save" value="Save" />
        </form>
        <?php endif;?>
    </body>
</html>


