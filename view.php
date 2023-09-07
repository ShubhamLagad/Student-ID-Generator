<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>Id card</title>
    <style>
        .main {
            border: 1px solid red;
            border-radius: 7px;
            width: 220px;
            height: 360px;
            margin-left: 40%;
            margin-top: 5%;
            background-image: url(img/bg1.jpg);
            padding:1px;            
        }

        .name {
            font-size: 2.5mm;
        }

        .studname {
            font-size: 11px;
            font-weight: bold;
            font-family: serif;
        }

        .info {
            font-size: 3mm;
        }

        .photo {
            border: 1px solid black;
        }
        .photo1 {
            padding-left: 10px;
        }

        .bottom {
            font-size: 10px;
        }
        .bot{
            padding-top:11px;
        }
        .principal {
            padding-right: 15px;
            font-weight: bold;
        }
        .dr{
            font-size: 10px;
        }
        .sign{
           padding-right:13px;
        }
    </style>
</head>
<body >
    <?php
        include "connect.php";
        $reg = $_GET['reg'];
        $query="select * from studentinfo where registrationno='$reg'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($result);
        $imageURL = 'img/'.$row["photo"];
    ?>
    <div class="main" id="idcard" >
        <table>
            <tr>
                <td>
                    <img src="img/vplogo.png" width="50mm" height="50mm">
                </td>
                <td colspan="2">
                    <div class="name">
                        Vidya Pratishthan's<br>
                        <b>Art's Science and Commerce College</b><br>
                        Vidyanagari,Baramati,Dist:Pune<br>
                        Contact: 91-02112-239166<br>
                        Website: www.vpasccollege.edu.in<br>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td colspan="" align="center" class="photo1">
                    <img src="<?php echo $imageURL;?>" width="85px" height="92px" class="photo">
                </td>
                <td></td>
            </tr>
            <tr>
                <td class="studname" align="center" colspan="3"><?php echo $row['firstname'].'  '.$row['middlename'].'  '.$row['lastname'];?></td>
            </tr>
            <tr>
                <td class="info course" align="center" colspan="3"><?php echo $row['course'];?></td>
            </tr>
            <tr>
                <td class="info" align="left" colspan="3"><b>DOB:</b><?php echo '  '.$row['birth_date'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Blood Group:</b><?php echo '  '.$row['blood_group'];?>
                </td>
            </tr>
            <tr>
                <td class="info" align="left" colspan="3"><b>Mobile: </b><?php echo '  '.$row['mobile_no'];?></td>
            </tr>
            <tr>
                <td class="info" align="left" colspan="3"><b>Email:</b><?php echo '  '.$row['email'];?></td>
            </tr>
            <tr>
                <td class="info" align="left" colspan="3"><b>Add: </b><?php echo '  '.$row['address'];?></td>
            </tr>

            <tr>
            <td class="bot sign" colspan="3" align="right"><img src="img/sign.png" width="50px" height="30px"></td>
            </tr>

            <tr class="dr">
            <td  colspan="3" align="right">Dr.Bharat Shinde </td>
            </tr>

            <tr>
                <td colspan="2" class="bottom " align="left">Year Of Admission:2018-19</td>
                <td class="bottom principal" align="center">Principal</td>
            </tr>
           
        </table>
    </div>
</body>

</html>