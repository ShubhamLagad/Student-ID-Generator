<?php

include "connect.php"; 

$reg = $_GET['reg']; 

$qry = mysqli_query($con,"select * from studentinfo where registrationno='$reg'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
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

    $photo =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="img/";

    $new_size = $file_size/1024;  
    $new_file_name = strtolower($photo);
    $final_file=str_replace(' ','-',$new_file_name);
           
	if(empty($fname) || empty($mname) || empty($lname) || empty($bdate) || empty($mobileno) || empty($email) || empty($address) || empty($course) )
        {
            $flag=0;
            ?>
            <script>
                alert("Record updation failed");
                window.location.href = 'record.php';
            </script>
            <?php
        }
    if(empty($bloodgroup))
        {
            $bloodgroup = "-";
        }
    if($flag==1)
        {
            $upload = move_uploaded_file($file_loc,$folder.$final_file);
            $edit = mysqli_query($con,"update studentinfo set firstname='$fname',middlename='$mname',lastname='$lname',birth_date='$bdate',blood_group='$bloodgroup',mobile_no='$mobileno',email='$email',address='$address',course='$course',photo='$photo' where registrationno='$reg'");
	
            if($edit || $upload)
            {
               ?>
               <script>
                   alert("Information updated successfully");
                   window.location.href = 'welcome.php?regno=<?php echo $reg; ?>';
               </script>
               <?php
            }
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
</head>

<body>
        <div id="signupbox" style="margin-top: 50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Update your Information</div>
                </div>
                <div class="panel-body">
                    <form action="" method="POST" id="signupform" class="form-horizontal" role="form" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="firstname" placeholder="Sirname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="middlename" class="col-md-3 control-label">Middle Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="middlename" placeholder="Your Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="lastname" placeholder="Last/Father Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-md-3 control-label">Date of Birth</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" name="dob" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bloodgroup" class="col-md-3 control-label">Blood Group</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="bloodgroup" placeholder="eg. B+">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobnumber" class="col-md-3 control-label">Mobile Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="mobileno" placeholder="10-Digit Mobile Number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Email Address</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-md-3 control-label">Address</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputState" class="col-md-3 control-label">Course</label>
                            <div class="col-md-9">
                            <select id="inputState" class="form-control" name="course">
                              <option selected>Course</option>
                              <option>BSc.Computer Science</option>
                              <option>BSc.Biotechnology</option>
                              <option>BSc.Regular</option>
                              <option>MSc.Computer Science</option>
                            </select>
                        </div>
                          </div>

                        <div class="form-group">
                            <label for="photo" class="col-md-3 control-label">Your Photo</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="file" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" value="Update" name="update" id="btn-signup" class="btn btn-info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>