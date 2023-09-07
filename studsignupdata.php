<?php
include "connect.php";
if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['password'])|| empty($_POST['registrationno']))
    {
     ?>
		<script>
		alert('Please fill all Details');
        window.location.href='studsign.php?fail';
        </script>        
		<?php
    }else{
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];
        if($password!=$cpassword)
            {
                ?>
                <script>
                alert('Password must be same');
                window.location.href='studsign.php?fail';
                </script>        
                <?php
            }else if(strlen($password)<8)
                    {
                        ?>
                        <script>
                        alert('Password must be 8-16 charactors');
                        window.location.href='studsign.php?fail';
                        </script>        
                        <?php
                    }else{
                        $firstname = strtoupper($_POST['firstname']);
                        $lastname = strtoupper($_POST['lastname']);
                        $regnumber = $_POST['registrationno'];
                        $password = $_POST['password'];

                        $query1 = "select registrationno from student";
                        $result1 = mysqli_query($con,$query1);
                        while($row1 = mysqli_fetch_assoc($result1))
                            {
                                if($row1['registrationno']== $regnumber)
                                    {
                                        ?>
                                        <script>
                                        alert('Account has already exists');
                                        window.location.href='studlogin.php?fail';
                                        </script>        
                                        <?php  
                                    }

                            }

                        $query2 = "insert into student values('$firstname','$lastname','$regnumber','$password')";
                        $result2 = mysqli_query($con,$query2);
                        // echo var_dump($result);
                        if($result2){
                            ?>
                            <script>
                            alert('Account Created Successfully');
                            window.location.href='studlogin.php?success';
                            </script>        
                            <?php
                        }
                    
                    }
        }//end of main else..........

?>