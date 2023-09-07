<?php
    include "connect.php";      

    if(empty($_POST['newpassword'])|| empty($_POST['confirmpassword'])|| empty($_POST['fregnumber']))
    {
     ?>
		<script>
		alert('Please fill all Details');
        window.location.href='forget.html';
        </script>        
		<?php
    }else{
            $regno=$_POST['fregnumber'];
            $npass = $_POST['newpassword'];
            $cpass = $_POST['confirmpassword'];  
            
            if($npass!=$cpass)
                {
                    ?>
                    <script>
                    alert("New Password and confirm password must be same");
                    window.location.href="forget.html";
                    </script>
                    <?php 
                }
            if(strlen($npass)<8 || strlen($npass)>16)
                {
                    ?>
                    <script>
                    alert("Password must be 8-16 characters");
                    window.location.href="forget.html";
                    </script>
                    <?php
                }
                $query = "select registrationno from student";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_assoc($result))
                    {
                        if($row['registrationno']==$regno)
                            {
                                $query = "update student set password = '$cpass' where registrationno = '$regno' ";
                                $result = mysqli_query($con,$query);
                                if($result)
                                    {   
                                        ?>
                                        <script>
                                        alert("Password change successfully");
                                        window.location.href="studlogin.php";
                                        </script>
                                        <?php
                                    }
                            }
                    }
                ?>
                <script>
                alert("Incorrect registration number");
                window.location.href="forget.html";
                </script>
                <?php
        }

?> 