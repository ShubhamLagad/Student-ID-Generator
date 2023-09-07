<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<style>
    .passhelp{
        font-size: 12px;
        color: #777;
    }
</style>
<body>
    <div id="signupbox" style="margin-top: 50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink"
                        href="studlogin.php">Log In</a></div>
            </div>
            <div class="panel-body">
                <form id="signupform" action="studsignupdata.php" method="POST" class="form-horizontal" role="form">

                    <div class="form-group">
                        <label class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control"  name="firstname" placeholder="First Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="lastname" placeholder="SirName">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Registration Number</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="registrationno" placeholder="Registration Number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div id="passwordHelpBlock" class="passhelp">
                            Your password must be 8-20 characters long.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="Submit" value="Sign Up" id="btn-signup" class="btn btn-info">
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

