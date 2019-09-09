<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Update  Student</title>
    <style>
      body,html{
        height:100%;
      }

      *{
        box-sizing:border-box;
      }

      .bg-img{
        background-image:url(Images/login.jpg);
        min-height:650px;
        background-position:center;
        background-repeat:no-repeat;
        background-size:50%;
        position:relative;
      }

      .container{
        position:absolute;
        margin:20px;
        max-width:800px;
        padding:16px;
        background-image:url(Images/book.png);
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
        right:35%;
        top:10%;
        bottom:5%;
      }

      input[type=text],input[type=file],input[type=email]{
        width:95%;
        padding:15px;
        margin:5px 0 22px 0;
        border:none;
        background:#cbcbcb;
      }

      input[type=text]:focus,input[type=file]:focus,input[type=email]:focus{
        background-color:b3b3b3;
        outline:none;
      }

      .btn{
        background-color:#330;
        color:white;
        padding:16px 20px;
        border:none;
        cursor:pointer;
        width:100%;
        opacity:0.9;
      }

      .btn:hover{
        opacity:1;
      }

      .btnsearch{
        background-color:#330;
        color:white;
        padding:16px 20px;
        border:none;
        cursor:pointer;
        width:30%;
        opacity:0.9;
      }

      .btnsearch:hover{
        opacity:1;
      }

			* {
        box-sizing: border-box;
      }

      body {
        font-family: Arial;
        padding: 10px;
        background: #f1f1f1;
      }

      /* Header/Blog Title */
      .header {
        padding: 30px;
        text-align: center;
        background: white;
      }

      .header h1 {
        font-size: 50px;
      }

      /* Style the top navigation bar */
      .topnav {
        overflow: hidden;
        background-color: #333;
      }

      /* Style the topnav links */
      .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        float:right;
      }

      /* Change color on hover */
      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Footer */
      .footer {
        padding: 30px;
        text-align: center;
        background: #ddd;
        margin-top: 20px;
      }

      /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {   
          width: 100%;
          padding: 0;
        }
      }

      /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
      @media screen and (max-width: 400px) {
        .topnav a {
          float: none;
          width: 100%;
        }
      }
    </style>
  </head>

  <body>
    <?php
      $no="";
      $app_no="";
      $name_with_initials="";
      $categary="";
      $type="";
      $address="";
      $mobile_no="";
      $email="";
      $id_no="";
      $iid_no="";
      $issued_date="";
      $invention="";
      $patent_no="";
      $district="";
      $province="";
        
      if (isset($_REQUEST["iid_no"])){
        $iid_no=$_REQUEST["iid_no"];
         
        $con=mysqli_connect("localhost","root","");
          
        $database=mysqli_select_db($con,"inventors");
           
        $sql="SELECT * FROM details WHERE iid_no='$iid_no' ";
          
        $result=mysqli_query($con,$sql);
      
        if($row = mysqli_fetch_array($result)){
          $no=$row[0];
          $app_no=$row[1];
          $name_with_initials=$row[2];
          $categary=$row[3];
          $type=$row[4];
          $address=$row[5];
          $mobile_no=$row[6];
          $email=$row[7];
          $id_no=$row[8];
          $iid_no=$row[9];
          $issued_date=$row[10];
          $invention=$row[11];
          $patent_no=$row[12];
          $district=$row[13];
          $province=$row[14];
          //echo "Records Updated";
        }
        
      //CLOSE CONNECTION
        mysqli_close($con);
          
      }
    ?>

    <?php
      if (isset($_REQUEST["update"])){
          
        $con=mysqli_connect("localhost","root","");
        
        $database=mysqli_select_db($con,"inventors");
        
        $sql="UPDATE details SET  app_no='$_POST[app_no]' , name_with_initials='$_POST[name_with_initials]' , categary='$_POST[categary]' , type='$_POST[type]' , address='$_POST[address]' , mobile_no='$_POST[mobile_no]' , email='$_POST[email]' , id_no='$_POST[id_no]' , iid_no='$_POST[iid_no]' , issued_date='$_POST[issued_date]' , invention='$_POST[invention]' , patent_no='$_POST[patent_no]' , district='$_POST[district]' , province='$_POST[province]' WHERE iid_no='$_POST[iid_no]'";
        
        if ($con->query($sql) === TRUE) {
          echo "Record updated successfully";
        } 
        else {
          echo "Error updating record: " . $con->error;
        }
          
        mysqli_close($con);
      }
    ?>

    <div class="header" id="myHeader">
      <img src="Images/logo.png">
    </div>

    <div class="topnav">
      <a href="help.php">Help</a>
      <a href="inventors.php">Inventors</a>
      <a href="home.php">Home</a>
    </div>

    <div class="row">
      <form method="post" action="Update.php" name="form" style="text-align:center" >
        <h1>Update Inventors' Details</h1>
        Enter IId: <input type="text" name="iid_no" size="10px" value="<?php echo $iid_no; ?>"  />
        <input type="submit" name="search" value="Search" class="btnsearch" />
      </form>

      <form method="post" action="Update.php" name="form" style="text-align:center">
        <br/ >
        <table align="center">
          <tr>
            <td>Application No</td>
            <td><input type="text" name="app_no" value="<?php echo $app_no; ?>" /></td>
          </tr>
          <tr>
            <td>Name with initials</td>
            <td><input type="text" name="name_with_initials" value="<?php echo $name_with_initials; ?>" /></td>
          </tr>
          <tr>
            <td>Categary</td>
            <td><input type="text" name="categary" value="<?php echo $categary; ?>" /></td>
          </tr>
          <tr>
            <td>Type</td>
            <td><input type="text" name="type" value="<?php echo $type; ?>" /></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $address; ?>" /></td>
          </tr>
          <tr>
            <td>Mobile No</td>
            <td><input type="text" name="mobile_no" value="<?php echo $mobile_no; ?>" /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $email; ?>" /></td>
          </tr>
          <tr>
            <td>ID No</td>
            <td><input type="text" name="id_no" value="<?php echo $id_no; ?>" /></td>
          </tr>
          <tr>
            <td>IID No</td>
            <td><input type="text" name="iid_no" value="<?php echo $iid_no; ?>" /></td>
          </tr>
          <tr>
            <td>Issued Date</td>
            <td><input type="text" name="issued_date" value="<?php echo $issued_date; ?>" /></td>
          </tr>
          <tr>
            <td>Invention</td>
            <td><input type="text" name="invention" value="<?php echo $invention; ?>" /></td>
          </tr>
          <tr>
            <td>Patent No</td>
            <td><input type="text" name="patent_no" value="<?php echo $patent_no; ?>" /></td>
          </tr>
          <tr>
            <td>District</td>
            <td><input type="text" name="district" value="<?php echo $district; ?>" /></td>
          </tr>
          <tr>
            <td>Province</td>
            <td><input type="text" name="province" value="<?php echo $province; ?>" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="update" value="Update" class="btn"/></td>
          </tr>

        </table>
      </form>
    </div>

    <div class="footer">
      <p>© 2017, All rights reserved by Sri Lanka Inventors Commission</p>
      <p>46-48, Cotta Road, Colombo 08</p>
    </div>
  </body>
  
</html>