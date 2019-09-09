<!DOCTYPE html>
<html>
  <head>
    <style>
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
      <a href="#">Inventors</a>
      <a href="home.php">Home</a>
    </div>

    <div class="row">
      <div class="column">
        <h2><a href="registration.php">Registration</a></h2>
        <a href="registration.php"><img src="Images/user.png"></a>
      </div>
  
      <div class="column">
        <h2><a href="view.php">View</a></h2>
        <a href="view.php"><img src="Images/view.jpg" width="90%"></a>
      </div>
      
      <div class="column">
        <h2><a href="view.php">Edit</a></h2>
        <a href="Update.php"><img src="Images/user.png"></a>
      </div>
    </div>

    <div class="footer">
      <p>© 2017, All rights reserved by Sri Lanka Inventors Commission</p>
      <p>46-48, Cotta Road, Colombo 08</p>
    </div>

  </body>
  
</html>


