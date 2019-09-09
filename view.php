<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>

            body {
                font-family: Arial;
                padding: 10px;
                background: #f1f1f1;
            }

            table, th, td {
                border-collapse: collapse;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #d8d8d8;
            }

            th{
                background-color: #b2b2b2;
            }
            
            .container-table100 {
                max-width: 1366px;
                margin: 0 auto;
                min-height: 40vh;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
            }

            .wrap-table100 {
                width: 50%;
            }

            .table100-firstcol table {
                background-color: transparent;
            }

            /* Footer */
            .footer {
                padding: 30px;
                text-align: center;
                background: #ddd;
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

            .scrollmenu {
                background-color: #333;
                overflow: auto;
                white-space: nowrap;
            }

            #myInput{
                width:75%;
                padding:15px;
                margin:5px 0 22px 0;
                border:none;
                background:#cbcbcb;
            }
            h1{
                text-align: center;
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

        <?php
            $sid="";
                
            if (isset($_REQUEST["searchid"])){
                $searchid=$_REQUEST["searchid"];
                
                $con=mysqli_connect("localhost","root","");
                
                $database=mysqli_select_db($con,"inventors");
                
                $sql="SELECT * FROM details WHERE sid='$searchid' ";   
                
                $result=mysqli_query($con,$sql);
                
                //CLOSE CONNECTION
                mysqli_close($con);
            }
        ?>

        <div class="row">
            <form method="post" action="#" name="form" style="text-align:center" >
                <h1>Inventors' Details</h1>
                Enter SId: <input type="text" id="myInput" name="searchid" size="10px" value="<?php echo $sid; ?>" onkeyup="myFunction()" />
            </form>
        
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "inventors";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT no, app_no, name_with_initials, categary, type, address, mobile_no, email, id_no, iid_no, issued_date, invention, patent_no, district, province FROM details";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class=limiter>
                        <div class=container-table100>
                            <div class=wrap-table100>
                                <div class=table100 ver1>
                                    <div class=table100-firstcol>
                                        <table id=myTable>
                                            <tr class=row100 head>
                                                <th class=cell100 column1>no</th>
                                                <th class=cell100 column1>app_no</th>
                                                <th class=cell100 column1>name_with_initials</th>
                                                <th class=cell100 column1>categary</th>
                                                <th class=cell100 column1>type</th>
                                                <th class=cell100 column1>address</th>
                                                <th class=cell100 column1>mobile_no</th>
                                                <th class=cell100 column1>email</th>
                                                <th class=cell100 column1>id_no</th>
                                                <th class=cell100 column1>iid_no</th>
                                                <th class=cell100 column1>issued_date</th>
                                                <th class=cell100 column1>invention</th>
                                                <th class=cell100 column1>patent_no</th>
                                                <th class=cell100 column1>district</th>
                                                <th class=cell100 column1>province</th>
                                            </tr>";
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<tr  class=row100 body>
                                                        <td>" . $row["no"]. "</td>
                                                        <td>" . $row["app_no"]. "</td>
                                                        <td>" . $row["name_with_initials"]. "</td>
                                                        <td>" . $row["categary"]. "</td> 
                                                        <td>" . $row["type"]. "</td>
                                                        <td>" . $row["address"]. "</td>
                                                        <td>" . $row["mobile_no"]. "</td>
                                                        <td>" . $row["email"]. "</td>
                                                        <td>" . $row["id_no"]. "</td>
                                                        <td>" . $row["iid_no"]. "</td>
                                                        <td>" . $row["issued_date"]. "</td>
                                                        <td>" . $row["invention"]. "</td>
                                                        <td>" . $row["patent_no"]. "</td>
                                                        <td>" . $row["district"]. "</td>
                                                        <td>" . $row["province"]. "</td>
                                                </tr>";
                                            }
                                        echo "</table>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>"; 
                        echo "</div>"; 
                    echo "</div>";      
                } 
                else {
                    echo "0 results";
                }

                $conn->close();
            ?>

            <script>
                function myFunction() {
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        txtValueArr = [];
                        for(j=0;j<14;j++){
                            td = tr[i].getElementsByTagName("td")[j];
                            if (td) {
                                txtValueArr.push(td.textContent || td.innerText);
                            }
                        }
                        if(txtValueArr.length>0){
                            state=0;
                            k=0;
                            while(state=0 || k<txtValueArr.length){
                                if(txtValueArr[k].toUpperCase().indexOf(filter) > -1){
                                    state=1;
                                    break;
                                }
                                k++;
                            }
                            if(state==1){
                                tr[i].style.display = "";
                            }
                            else{
                                tr[i].style.display = "none";
                            }
                            state=0;
                        }
                    }
                }
            </script>

        </div>

        <div class="footer">
            <p>© 2017, All rights reserved by Sri Lanka Inventors Commission</p>
            <p>46-48, Cotta Road, Colombo 08</p>
        </div>

    </body>
    
</html>