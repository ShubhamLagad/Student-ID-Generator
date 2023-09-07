<?php
    session_start();
    include "connect.php";
    $flag=0;
    $query = "select registrationno, password from student";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($result))
        {
            if($_SESSION['registrationno']==$row['registrationno'] && $_SESSION['password']==$row['password'])
            {
                $flag=1;
                ?>
                <script>
                alert("Login successfull");
                </script> 
                <?php
            }
        }

    $query1 = "select registrationno from studentinfo";
    $result1 = mysqli_query($con,$query1);
    $rno = $_SESSION['registrationno'];
    while($row1 = mysqli_fetch_assoc($result1))
        {
            if($_SESSION['registrationno']==$row1['registrationno'])
            {
                header("location:welcome.php?regno=$rno");
            }
        }

    if(!isset($_SESSION['registrationno']) || !isset($_SESSION['password']))
        {
           ?>
           <script>
               alert("Please enter your registration number and password");
               window.location.href='studlogin.php';
           </script> 
           <?php
        }else{
         if($flag==0)
                {
                    unset($_SESSION['registrationno']);
                    unset($_SESSION['password']);

                    ?>
                <script>
                    alert("Please enter your correct registration number and password");
                    window.location.href='studlogin.php';
                </script> 
                <?php
                }else{
    

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
                    <div class="panel-title">Please fill your correct Information</div>
                </div>
                <div class="panel-body">
                    <form action="studinfodata.php" method="POST" id="signupform" class="form-horizontal" role="form" enctype="multipart/form-data">

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
                                <input type="date" class="form-control" name="dob" placeholder="dd-mm-yyyy" min="1990-01-01" max="2030-12-31">
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
                            <label for="regnumber" class="col-md-3 control-label">Registration Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="regnumber" placeholder="Registration Number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="photo" class="col-md-3 control-label">Your Photo</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="file" >
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <!-- <button id="btn-signup" type="button" class="btn btn-info"><i
                                        class="icon-hand-right"></i>
                                    &nbsp; Submit</button> -->
                                    <input type="submit" value="Submit" id="btn-signup" class="btn btn-info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
        }}
?>