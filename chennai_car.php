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
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'suzuki_swift'";
        $result = $mysqli->query($selectstmt);
        $suzuki_status = $result->fetch_assoc();
        if($suzuki_status['car_status'] === "y"){
            echo '<style>
                #suzuki{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'ford_endeavour'";
        $result = $mysqli->query($selectstmt);
        $ford_status = $result->fetch_assoc();
        if($ford_status['car_status'] === "y"){
            echo '<style>
                #ford{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'mg_gloster'";
        $result = $mysqli->query($selectstmt);
        $mg_status = $result->fetch_assoc();
        if($mg_status['car_status'] === "y"){
            echo '<style>
                #mg{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'honda_city'";
        $result = $mysqli->query($selectstmt);
        $honda_status = $result->fetch_assoc();
        if($honda_status['car_status'] === "y"){
            echo '<style>
                #honda{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'bmw_x1'";
        $result = $mysqli->query($selectstmt);
        $bmw_status = $result->fetch_assoc();
        if($bmw_status['car_status'] === "y"){
            echo '<style>
                #bmw{
                    opacity : 0.6;
                }
            </style>';
        };
        if(isset($_POST['buy'])){
            $car = $_POST['buy'];
            if($car === "6"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 6";
                $stmt2 = "SELECT car_price FROM car WHERE id = 6";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "7"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 7";
                $stmt2 = "SELECT car_price FROM car WHERE id = 7";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "8"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 8";
                $stmt2 = "SELECT car_price FROM car WHERE id = 8";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "9"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 9";
                $stmt2 = "SELECT car_price FROM car WHERE id = 9";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "10"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 10";
                $stmt2 = "SELECT car_price FROM car WHERE id = 10";
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
            No:52, South West Boag Road,, T.Nagar, Chennai, Tamil Nadu 600017, India</p>
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
        <div id = "suzuki" class="car_polaroid">
            <div  class="car_image"><img src="car_show_case/car6.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2>suzuki swift </h2>
                <p><b>Engine</b>  :  diesel </p>
                <p><b>Transmission</b>  :  automatic</p>
                <p><b>Mileage</b>  :  <b style="color:red;">18 - 20</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 1850/day</h3>
                <br>
                <br><br>
                <form action="chennai_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "6"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="ford" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car7.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> ford endeavour </h2>
                <p><b>Engine</b>  : diesel </p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">12-15</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 3200/day</h3>
                <br>
                <br><br>
                <form action="chennai_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "7"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="mg" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car8.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2>mg gloster </h2>
                <p><b>Engine</b>  :  diesel</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">8-11</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 3749/day</h3>
                <br>
                <br><br>
                <form action="chennai_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "8"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="tata" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car9.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> honda city </h2>
                <p><b>Engine</b>  :  petrol</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">21-24</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 2198/day</h3>
                <br>
                <br><br>
                <form action="chennai_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "9"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="bmw" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car10.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> bmw x1 </h2>
                <p><b>Engine</b>  :  diesel</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">13-18</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 4099/day</h3>
                <br>
                <br><br>
                <form action="chennai_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "10"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br><br>
    </div>

</body>
</html>