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
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'kia_seltos'";
        $result = $mysqli->query($selectstmt);
        $kia_status = $result->fetch_assoc();
        if($kia_status['car_status'] === "y"){
            echo '<style>
                #kia{
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
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'mg_hector'";
        $result = $mysqli->query($selectstmt);
        $mg_status = $result->fetch_assoc();
        if($mg_status['car_status'] === "y"){
            echo '<style>
                #mg{
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
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'suzuki_celerio'";
        $result = $mysqli->query($selectstmt);
        $suzuki_status = $result->fetch_assoc();
        if($suzuki_status['car_status'] === "y"){
            echo '<style>
                #suzuki{
                    opacity : 0.6;
                }
            </style>';
        };
        if(isset($_POST['buy'])){
            $car = $_POST['buy'];
            if($car === "5"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 5";
                $stmt2 = "SELECT car_price FROM car WHERE id = 5";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "1"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 1";
                $stmt2 = "SELECT car_price FROM car WHERE id = 1";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "2"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 2";
                $stmt2 = "SELECT car_price FROM car WHERE id = 2";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "3"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 3";
                $stmt2 = "SELECT car_price FROM car WHERE id = 3";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "4"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 4";
                $stmt2 = "SELECT car_price FROM car WHERE id = 4";
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
    <div class="car_portfolio">
        <div id = "kia" class="car_polaroid">
            <div  class="car_image"><img src="car_show_case/car1.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2>Kia Seltos </h2>
                <p><b>Engine</b>  :  diesel CVT</p>
                <p><b>Transmission</b>  :  CVT</p>
                <p><b>Mileage</b>  :  <b style="color:red;">18 - 20</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 2400/day</h3>
                <br>
                <br><br>
                <form action="bengaluru_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "1"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="honda" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car2.jpg" alt="enfield"></div>
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
                <form action="bengaluru_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "2"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="mg" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car3.JPEG" alt="enfield"></div>
            <div class="car_details">
                <h2>mg hector </h2>
                <p><b>Engine</b>  :  diesel</p>
                <p><b>Transmission</b>  :  automatic</p>
                <p><b>Mileage</b>  :  <b style="color:red;">10-15</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 2250/day</h3>
                <br>
                <br><br>
                <form action="bengaluru_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "3"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="tata" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car4.jpg" alt="enfield"></div>
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
                <form action="bengaluru_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "4"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="suzuki" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car5.jpeg" alt="enfield"></div>
            <div class="car_details">
                <h2> suzuki celerio </h2>
                <p><b>Engine</b>  :  petrol</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">18-23</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 1299/day</h3>
                <br>
                <br><br>
                <form action="bengaluru_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "5"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br><br>
    </div>

</body>
</html>