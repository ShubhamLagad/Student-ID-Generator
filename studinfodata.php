<?php
session_start();
    include "connect.php";

    $flag=1;

    $fname = strtoupper($_POST['firstname']);
    $mname = strtoupper($_POST['middlename']);
    $lname = strtoupper($_POST['lastname']);
    $bdate = $_POST['dob'];
    $bloodgroup = strtoupper($_POST['bloodgroup']);
    $mobileno = $_POST['mobileno'];
    $email = strtolower($_POST['email']);
    $address = ucwords($_POST['address']);
    $course = $_POST['course'];
    $registration = $_POST['regnumber'];

    $photo =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="img/";

    $new_size = $file_size/1024;  
    $new_file_name = strtolower($photo);
    $final_file=str_replace(' ','-',$new_file_name);
    
    if(empty($fname) || empty($mname) || empty($lname) || empty($bdate) || empty($mobileno) || empty($email) || empty($address) || empty($course) || empty($registration))
        {
          $flag=0;
            ?>
            <script>
              alert("Please fill all details");
              window.location.href = 'studinfo.php?fail';
            </script>
            <?php
        }

    if(empty($bloodgroup))
        {
            $bloodgroup = "-";
        }

    if(strlen($mobileno)>10)
        {
          $flag=0;
            ?>
            <script>
              alert("Please enter your correct mobile number");
              window.location.href = 'studinfo.php?fail';
            </script>
            <?php
        }
        
    if($_SESSION['registrationno']!=$registration)
        {
          $flag=0;
            ?>
            <script>
              alert("Please check your registration number is correct?");
              window.location.href = 'studinfo.php?fail';
            </script>
            <?php
        }

    $atindex = strpos($email,"@");
    $dotindex = strpos($email,".");
    if($atindex<1 || $dotindex>=strlen($email)-3 || $dotindex-$atindex<3)
        {
          $flag=0;
            ?>
            <script>
              alert("Please enter your valid email address");
              window.location.href = 'studinfo.php?fail';
            </script>
            <?php
        }

    if($flag==1){
      $upload = move_uploaded_file($file_loc,$folder.$final_file);
      $query = "insert into studentinfo values('$fname','$mname','$lname','$bdate','$bloodgroup','$mobileno','$email','$address','$course','$registration','$photo')";
      $result = mysqli_query($con,$query);
      // echo var_dump($result);
      if($upload || $result)
        {
          header("location:welcome.php?regno=$registration");
        }
    }
    
?>

