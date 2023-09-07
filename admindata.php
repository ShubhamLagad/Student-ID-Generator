<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username!="shubham@2000" || $password!="admin@2000")
        {
            ?>
            <script>
                alert("Incorrect username and password");
                window.location.href = 'adminlogin.html?fail';
            </script>
            <?php
        }else{
            header("location:record.php");
        }

?>