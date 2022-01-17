<?php
    require_once "config.php";
    $state = "SELECT COUNT(id) FROM customer";
    $result = $mysqli->query($state);
    $row = $result -> fetch_assoc();
    $state2 = "SELECT COUNT(id) FROM bike";
    $result2 = $mysqli->query($state2);
    $row2 = $result2 -> fetch_assoc();
    $state3 = "SELECT COUNT(id) FROM car";
    $result3 = $mysqli->query($state3);
    $row3 = $result3 -> fetch_assoc();
?>
<DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
            <link rel="stylesheet" href="css/style.css">
            <title>Admin Dashboard</title>
        </head>
        <body>
        <div class="navbar">
        <div class="logo">
        </div>
        <div class="content">
            <a href="index.php">Home</a>
            <a href="index.php#service">Services</a>
            <a href="index.php#team">Team</a>
            <a href="policy.php">Policy</a>
        </div>
</div>
                <div class="main-content">
            
                    <main>
                        <div class="cards">
            
                            <div class="card-single">
                                <div>
                                  
                                    <h1>No of Users</h1>
                                    <span><?php echo $row['COUNT(id)']; ?></span>
                                    
                                </div>
                                <div>
                                   
                                </div>
                            </div>
            
                            <div class="card-single">
                                <div>
                                    <h1>Cars</h1>
                                    <span><?php echo $row3['COUNT(id)']; ?></span>
                                </div>
                                <div>
                                   
                                </div>
                            </div>
            
                            <div class="card-single">
                                <div>
                                    <h1>Bikes</h1>
                                    <span><?php echo $row2['COUNT(id)']; ?></span>
                                    <span></span>
                                </div>
                                <div>
                                </div>
                            </div>
                    </div>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Customer Name</th>
                            <th>Email Id</th>  

                        </tr>
                    <?php
                    $conn =mysqli_connect("localhost","root","","dbmsdemo");
                    if ($conn -> connect_error){
                        die("connection failed: ". $conn-> connect_error); 
                    }
                    $sql = "SELECT customer_name, id, customer_email from customer ";
                    $result = $conn -> query($sql);
if ($result -> num_rows >0){
    while ($row=$result -> fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["customer_name"]."</td><td>".$row["customer_email"]."</td></tr>"  ;
    }
    echo "</table>";

} 
else {
    echo "0 result";
}
// $conn = mysqli_connect("localhost", "root", "root", "dbmsdemo");
// $result = mysqli_query($conn, "SELECT COUNT(*) AS total_users FROM users");
// $row = mysqli_fetch_object($result);
// $total_users = $row->total_users;
// $total_users = substr("0000" . $total_users, -4);
$conn-> close()
?>
<!-- <div class="row">
    <div id="countdown">
        <div id='tiles'>
            <span>0</span>
            <span>0</span>
            <span>0</span>
            <span>0</span>
        </div>
 
        <div class="labels">
            <li>Registered users</li>
        </div>
    </div>
</div> -->
</table>
        </body>
    </html>