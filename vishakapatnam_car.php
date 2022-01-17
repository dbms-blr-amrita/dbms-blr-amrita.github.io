<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/show_case.css">
    <link rel="stylesheet" href="css/car_show_case.css">
    <title>List of cars</title>
</head>
<body>
    <?php
        include "navbar.php";
        require_once "config.php";
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'mini_cooper'";
        $result = $mysqli->query($selectstmt);
        $mini_status = $result->fetch_assoc();
        if($mini_status['car_status'] === "y"){
            echo '<style>
                #mini{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'honda_civic'";
        $result = $mysqli->query($selectstmt);
        $honda_status = $result->fetch_assoc();
        if($honda_status['car_status'] === "y"){
            echo '<style>
                #honda{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'jeep_wrangler'";
        $result = $mysqli->query($selectstmt);
        $jeep_status = $result->fetch_assoc();
        if($jeep_status['car_status'] === "y"){
            echo '<style>
                #jeep{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'tata_nexon'";
        $result = $mysqli->query($selectstmt);
        $tata_status = $result->fetch_assoc();
        if($tata_status['car_status'] === "y"){
            echo '<style>
                #tata{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'ford_fiesta'";
        $result = $mysqli->query($selectstmt);
        $ford_status = $result->fetch_assoc();
        if($ford_status['car_status'] === "y"){
            echo '<style>
                #ford{
                    opacity : 0.6;
                }
            </style>';
        };
        if(isset($_POST['buy'])){
            $car = $_POST['buy'];
            if($car === "21"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 21";
                $stmt2 = "SELECT car_price FROM car WHERE id = 21";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "22"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 22";
                $stmt2 = "SELECT car_price FROM car WHERE id =22";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "23"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 23";
                $stmt2 = "SELECT car_price FROM car WHERE id = 23";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "24"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 24";
                $stmt2 = "SELECT car_price FROM car WHERE id = 24";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "25"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 25";
                $stmt2 = "SELECT car_price FROM car WHERE id = 25";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
        }
    ?>
    <div class="show_content_date_location">
        <div class="location_pickup">
            <p><b style="font-size: 22px;"><i class="fa fa-map-marker" aria-hidden="true" style="color : rgb(87, 204, 83); font-size: 27px; margin-right: 15px;"></i>Location : </b>
            Hotel The Park, Beach Rd, Visakhapatnam, Andhra Pradesh 530001 , India</p>
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
    <div class="car_portfolio">
        <div id = "mini" class="car_polaroid">
            <div  class="car_image"><img src="car_show_case/car21.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2>mini cooper </h2>
                <p><b>Engine</b>  :  diesel </p>
                <p><b>Transmission</b>  :  automic</p>
                <p><b>Mileage</b>  :  <b style="color:red;">12-16</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 3699/day</h3>
                <br>
                <br><br>
                <form action="vishakapatnam_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "21"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="honda" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car22.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> honda civic </h2>
                <p><b>Engine</b>  : diesel </p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">20-25</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 2200/day</h3>
                <br>
                <br><br>
                <form action="vishakapatnam_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "22"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="jeep" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car23.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2>jeep wrangler </h2>
                <p><b>Engine</b>  :  diesel</p>
                <p><b>Transmission</b>  :  automatic</p>
                <p><b>Mileage</b>  :  <b style="color:red;">10-15</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 4250/day</h3>
                <br>
                <br><br>
                <form action="vishakapatnam_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "23"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="tata" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car24.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> tata nexon </h2>
                <p><b>Engine</b>  :  petrol</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">22-25</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 1798/day</h3>
                <br>
                <br><br>
                <form action="vishakapatnam_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "24"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="ford" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car25.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> ford fiesta </h2>
                <p><b>Engine</b>  :  petrol</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">18-23</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 1998/day</h3>
                <br>
                <br><br>
                <form action="vishakapatnam_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "25"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br><br>
    </div>

</body>
</html>