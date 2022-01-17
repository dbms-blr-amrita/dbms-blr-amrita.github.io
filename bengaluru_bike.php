<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/show_case.css">
    <title>List of Bikes</title>
</head>
<body>
    <?php
        include "navbar.php";
        require_once "config.php";
        $selectstmt = "SELECT bike_status FROM bike WHERE bike_name = 'Triump_t120' AND bike_location = 'bengaluru'";
        $result = $mysqli->query($selectstmt);
        $triumph_status = $result->fetch_assoc();
        if($triumph_status['bike_status'] === "y"){
            echo '<style>
                #triumph{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT bike_status FROM bike WHERE bike_name = 'Bajaj_ns200' AND bike_location = 'bengaluru'";
        $result = $mysqli->query($selectstmt);
        $bajaj_status = $result->fetch_assoc();
        if($bajaj_status['bike_status'] === "y"){
            echo '<style>
                #bajaj{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT bike_status FROM bike WHERE bike_name = 'RE_himalayan' AND bike_location = 'bengaluru'";
        $result = $mysqli->query($selectstmt);
        $RE_status = $result->fetch_assoc();
        if($RE_status['bike_status'] === "y"){
            echo '<style>
                #RE{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT bike_status FROM bike WHERE bike_name = 'apache_rr310' AND bike_location = 'bengaluru'";
        $result = $mysqli->query($selectstmt);
        $apache_status = $result->fetch_assoc();
        if($apache_status['bike_status'] === "y"){
            echo '<style>
                #apache{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT bike_status FROM bike WHERE bike_name = 'HD_iron_883' AND bike_location = 'bengaluru'";
        $result = $mysqli->query($selectstmt);
        $HD_status = $result->fetch_assoc();
        if($HD_status['bike_status'] === "y"){
            echo '<style>
                #HD{
                    opacity : 0.6;
                }
            </style>';
        };
        if(isset($_POST['buy'])){
            $bike = $_POST['buy'];
            if($bike === "5"){
                $stmt = "UPDATE bike SET bike_status = 'y' WHERE id = 5";
                $stmt2 = "SELECT bike_price FROM bike WHERE id = 5";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_bikes.php");
            }
            if($bike === "1"){
                $stmt = "UPDATE bike SET bike_status = 'y' WHERE id = 1";
                $stmt2 = "SELECT bike_price FROM bike WHERE id = 1";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_bikes.php");
            }
            if($bike === "2"){
                $stmt = "UPDATE bike SET bike_status = 'y' WHERE id = 2";
                $stmt2 = "SELECT bike_price FROM bike WHERE id = 2";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_bikes.php");
            }
            if($bike === "3"){
                $stmt = "UPDATE bike SET bike_status = 'y' WHERE id = 3";
                $stmt2 = "SELECT bike_price FROM bike WHERE id = 3";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_bikes.php");
            }
            if($bike === "4"){
                $stmt = "UPDATE bike SET bike_status = 'y' WHERE id = 4";
                $stmt2 = "SELECT bike_price FROM bike WHERE id = 4";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_bikes.php");
            }
        }

    ?>
    <div class="show_content_date_location">
        <div class="location_pickup">
            <p><b style="font-size: 22px;"><i class="fa fa-map-marker" aria-hidden="true" style="color : rgb(87, 204, 83); font-size: 27px; margin-right: 15px;"></i>Location : </b>
                HAL Old Airport Rd, Chandra Layout, Marathahalli, Bengaluru, Karnataka, India</p>
        </div>
        <br><br>
        <div class="date_pick_drop">
            <div class="start_date">
                <h4>Pickup Date/Time</h4>
                <p><?php echo $_SESSION['pickup'];?></p>
            </div>
            <div class="date_icon">
                <p><i class="fa fa-arrow-circle-right" style="font-size: 23px;"></i></p>
            </div>
            <div class="end_date">
                <h4>Drop Date/Time</h4>
                <p><?php echo $_SESSION['drop'];?></p>
            </div>
        </div>
    </div>
    <div class="bike_portfolio">
        <div id = "triumph" class="bike_polaroid">
            <div  class="bike_image"><img src="bike_show_case/bike1.jpg" alt="enfield"></div>
            <div class="bike_details">
                <h2>Triumph bonneville t120 </h2>
                <p><b>Engine</b>  :  1200cc</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">21-24</b> kmpl</p>
            </div>
            <div class="bike_book_now">
                <h3>RS. 1140/day</h3>
                <br>
                <br><br>
                <form action="bengaluru_bike.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "1"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="bajaj" class="bike_polaroid">
            <div class="bike_image"><img src="bike_show_case/bike2.jpg" alt="enfield"></div>
            <div class="bike_details">
                <h2>Bajaj NS200 </h2>
                <p><b>Engine</b>  :  200cc</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">33-35</b> kmpl</p>
            </div>
            <div class="bike_book_now">
                <h3>RS. 398/day</h3>
                <br>
                <br><br>
                <form action="bengaluru_bike.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "2"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="RE" class="bike_polaroid">
            <div class="bike_image"><img src="bike_show_case/bike3.png" alt="enfield"></div>
            <div class="bike_details">
                <h2>Royal enfield himalayan </h2>
                <p><b>Engine</b>  :  411cc</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">30-36</b> kmpl</p>
            </div>
            <div class="bike_book_now">
                <h3>RS. 608/day</h3>
                <br>
                <br><br>
                <form action="bengaluru_bike.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "3"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="apache" class="bike_polaroid">
            <div class="bike_image"><img src="bike_show_case/bike4.jpeg" alt="enfield"></div>
            <div class="bike_details">
                <h2>Apache rr310 </h2>
                <p><b>Engine</b>  :  310cc</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">28-33</b> kmpl</p>
            </div>
            <div class="bike_book_now">
                <h3>RS. 714/day</h3>
                <br>
                <br><br>
                <form action="bengaluru_bike.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "4"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="HD" class="bike_polaroid">
            <div class="bike_image"><img src="bike_show_case/bike5.png" alt="enfield"></div>
            <div class="bike_details">
                <h2>Harley Davidson iron 883 </h2>
                <p><b>Engine</b>  :  883cc</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">18-23</b> kmpl</p>
            </div>
            <div class="bike_book_now">
                <h3>RS. 998/day</h3>
                <br>
                <br><br>
                <form action="bengaluru_bike.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "5"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br><br>
    </div>

</body>
</html>