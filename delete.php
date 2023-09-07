<?php

include "connect.php"; 

$reg = $_GET['reg'];

$del = mysqli_query($con,"delete from studentinfo where registrationno = '$reg'"); // delete query

if($del)
{
    ?>
    <script>
        alert("Record deleted successfully");
        window.location.href = 'record.php';
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("Error deleting record");
        window.location.href = 'record.php';
    </script>
    <?php
}
?>