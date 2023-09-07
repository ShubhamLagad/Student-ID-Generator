<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Record</title>
</head>

<body>
<span class="border border-danger">
<div class="p-3 mb-2 bg-success text-white">
    <h1 class="mb-3" align="center"><u>Student Information</u></h1>
    </div>
    <div class="p-3 mb-2 bg-warning text-dark">
    <?php
    include "connect.php";
    echo '
        <table class="table table-bordered border-primary">   
        <tr>
            <th class="table-light">Sr.No.</th>
            <th class="table-primary">First Name</th>
            <th class="table-secondary">Middle Name</th>
            <th class="table-success">Last Name</th>
            <th class="table-danger">Birth Date</th>
            <th class="table-warning">Blood Group</th>
            <th class="table-info">Mobile No</th>
            <th class="table-light">Email</th>
            <th class="table-danger">Address</th>
            <th class="table-success">Course</th>
            <th class="table-warning">Registration No</th>
            <th class="table-primary">Photo</th>
            <th class="table-info">View Card</th>
            <th class="table-secondary">Update Details</th>
            <th class="table-light">Delete Info</th>
        </tr>';
    $query = "select * from studentinfo";
    $result = mysqli_query($con,$query);
    $count=1;
    while($row = mysqli_fetch_assoc($result))
        {
            echo '
                <tr>
                    <td class="table-light">'.$count.'</td>
                    <td class="table-primary">'.$row['firstname'].'</td>
                    <td class="table-secondary">'.$row['middlename'].'</td>
                    <td class="table-success">'.$row['lastname'].'</td>
                    <td class="table-danger">'.$row['birth_date'].'</td>
                    <td class="table-warning">'.$row['blood_group'].'</td>
                    <td class="table-info">'.$row['mobile_no'].'</td>
                    <td class="table-light">'.$row['email'].'</td>
                    <td class="table-danger">'.$row['address'].'</td>
                    <td class="table-success">'.$row['course'].'</td>
                    <td class="table-warning">'.$row['registrationno'].'</td>
                    <td class="table-primary">'.$row['photo'].'</td>

                    <td class="table-info" align="center"><a href="view.php?reg='.$row['registrationno'].'"><input type="button" value="View" class="btn btn-success"></a></td>

                    <td class="table-secondary" align="center"><a href="edit.php?reg='.$row['registrationno'].'"><input type="button" value="Update" class="btn btn-warning"></a></td>

                    <td class="table-light" align="center"><a onClick=\'javascript: return confirm("Can you delete this record?");\' href="delete.php?reg='.$row['registrationno'].'"><input type="button" value="Delete" class="btn btn-danger"></a></td>
                </tr>';
                $count++;
        }

echo '</table>';
?></div></span>
</body>

</html>