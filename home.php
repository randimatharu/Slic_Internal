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

      /* Header/Heading */
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
      <a href="#">Home</a>
    </div>

    <div class="row">
        <img src="Images/inno.jpg" width="100%" heigth="50%">
    </div>

    <div class="footer">
      <p>© 2017, All rights reserved by Sri Lanka Inventors Commission</p>
      <p>46-48, Cotta Road, Colombo 08</p>
    </div>

  </body>
</html>
