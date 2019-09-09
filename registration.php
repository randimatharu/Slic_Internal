
<html>
    <head>
        <title>Login</title>
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
              background-position:center;
              background-repeat:no-repeat;
              background-size:cover;
              right:35%;
              top:30%;
              bottom:5%;
            }
            input[type=text],input[type=email],input[type=file]{
              width:75%;
              padding:15px;
              margin:5px 0 22px 0;
              border:none;
              background:#cbcbcb;
            }
            input[type=text]:focus,input[type=email]:focus,input[type=file]:focus{
              background-color:#ddd;
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
      <div class="header" id="myHeader">
        <img src="Images/logo.png">
      </div>

      <div class="topnav">
        <a href="help.php">Help</a>
        <a href="inventors.php">Inventors</a>
        <a href="home.php">Home</a>
      </div>

      <div class="container"> 
        <form method="post" action="#" name="form" style="text-align:center">
          <h1>Register</h1>
          <br/ >
          <table align="center">
            <tr>
              <td>Application No</td>
              <td><input type="text" name="app_no"  /></td>
            </tr>
            <tr>
              <td>Name with initials</td>
              <td><input type="text" name="name_with_initials"/></td>
            </tr>
            <tr>
              <td>Categary</td>
              <td><input type="text" name="categary" /></td>
            </tr>
            <tr>
              <td>Type</td>
              <td><input type="text" name="type"/></td>
            </tr>
            <tr>
              <td>Address</td>
              <td><input type="text" name="address"/></td>
            </tr>
            <tr>
              <td>Mobile No</td>
              <td><input type="text" name="mobile_no" /></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type="email" name="email"/></td>
            </tr>
            <tr>
              <td>ID No</td>
              <td><input type="text" name="id_no" /></td>
            </tr>
            <tr>
              <td>IID No</td>
              <td><input type="text" name="iid_no" /></td>
            </tr>
            <tr>
              <td>Issued Date</td>
              <td><input type="text" name="issued_date"/></td>
            </tr>
            <tr>
              <td>Invention</td>
              <td><input type="text" name="invention"/></td>
            </tr>
            <tr>
              <td>Patent No</td>
              <td><input type="text" name="patent_no"/></td>
            </tr>

            <tr>
              <td>District</td>
              <td><input type="text" name="district"/></td>
            </tr>
            <tr>
              <td>Province</td>
              <td><input type="text" name="province"/></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="save" value="Save" class="btn"/>
                  <input type="reset" name="reset" class="btn"/></td>
              </tr>

          </table>
        </form>
      </div>

      <?php 
        //connect server
          $username="root";
          $password="";
          $hostname="localhost";
          $con=mysqli_connect($hostname,$username,$password);
          
        //connect database
          $database=mysqli_select_db($con,"inventors");
          
        //select table 
          $sql="SELECT * FROM details";
          
        //get result for all table data
          $result=mysqli_query($con,$sql);

        //close server
          mysqli_close($con);
	      ?>

        <?php
          if(isset($_REQUEST["iid_no"])){
            $app_no=$_REQUEST["app_no"];
            $name_with_initials=$_REQUEST["name_with_initials"];
            $categary=$_REQUEST["categary"];
            $type=$_REQUEST["type"];
            $address=$_REQUEST["address"];
            $mobile_no=$_REQUEST["mobile_no"];
            $email=$_REQUEST["email"];
            $id_no=$_REQUEST["id_no"];
            $iid_no=$_REQUEST["iid_no"];
            $issued_date=$_REQUEST["issued_date"];
            $invention=$_REQUEST["invention"];
            $patent_no=$_REQUEST["patent_no"];
            $district=$_REQUEST["district"];
            $province=$_REQUEST["province"];
    
            $con=mysqli_connect("localhost","root","");
              
            $database=mysqli_select_db($con,"inventors");
              
            $sql="INSERT INTO details(app_no,name_with_initials,categary,type,address,mobile_no,email,id_no,iid_no,issued_date,invention,patent_no,district,province)  VALUES('$app_no','$name_with_initials','$categary','$type','$address','$mobile_no','$email','$id_no','$iid_no','$issued_date','$invention','$patent_no','$district','$province')";
            
            $result=mysqli_query($con,$sql);
            
          //print 
              echo "Number Of records Inserted: $result<br/>";
                 
          //CLOSE CONNECTION
            mysqli_close($con);
            
          }
        ?>
    </body>
  </html>




