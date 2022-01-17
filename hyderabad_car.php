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
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'volkswagon_beetle'";
        $result = $mysqli->query($selectstmt);
        $volkswagon_status = $result->fetch_assoc();
        if($volkswagon_status['car_status'] === "y"){
            echo '<style>
                #volkswagon{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'benz_gle'";
        $result = $mysqli->query($selectstmt);
        $benz_status = $result->fetch_assoc();
        if($benz_status['car_status'] === "y"){
            echo '<style>
                #benz{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'bmw_m4'";
        $result = $mysqli->query($selectstmt);
        $bmw_status = $result->fetch_assoc();
        if($bmw_status['car_status'] === "y"){
            echo '<style>
                #bmw{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'bmw_x4'";
        $result = $mysqli->query($selectstmt);
        $bmw_status = $result->fetch_assoc();
        if($bmw_status['car_status'] === "y"){
            echo '<style>
                #bmw{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'mahindra_thar'";
        $result = $mysqli->query($selectstmt);
        $mahindra_status = $result->fetch_assoc();
        if($mahindra_status['car_status'] === "y"){
            echo '<style>
                #mahindra{
                    opacity : 0.6;
                }
            </style>';
        };
        if(isset($_POST['buy'])){
            $car = $_POST['buy'];
            if($car === "11"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 11";
                $stmt2 = "SELECT car_price FROM car WHERE id = 11";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "12"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 12";
                $stmt2 = "SELECT car_price FROM car WHERE id = 12";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "13"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 13";
                $stmt2 = "SELECT car_price FROM car WHERE id = 13";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "14"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 14";
                $stmt2 = "SELECT car_price FROM car WHERE id = 14";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "15"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 15";
                $stmt2 = "SELECT car_price FROM car WHERE id = 15";
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
            12-2-830/64, Hill Colony, Viswash Nagar, Mehdipatnam, Hyderabad, Telangana 500028 , India</p>
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
        <div id = "volkswagon" class="car_polaroid">
            <div  class="car_image"><img src="car_show_case/car11.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2>volkswagon beetle </h2>
                <p><b>Engine</b>  :  diesel </p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">12-14</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 2598/day</h3>
                <br>
                <br><br>
                <form action="hyderabad_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "11"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="benz" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car12.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> benz gle </h2>
                <p><b>Engine</b>  : diesel </p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">10-12</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 4215/day</h3>
                <br>
                <br><br>
                <form action="hyderabad_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "12"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="bmw" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car13.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2>bmw m4 </h2>
                <p><b>Engine</b>  :  diesel</p>
                <p><b>Transmission</b>  :  automatic</p>
                <p><b>Mileage</b>  :  <b style="color:red;">7-9</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 3749/day</h3>
                <br>
                <br><br>
                <form action="hyderabad_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "13"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="bmw" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car14.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> bmw x4</h2>
                <p><b>Engine</b>  :  petrol</p>
                <p><b>Transmission</b>  :  automatic </p>
                <p><b>Mileage</b>  :  <b style="color:red;">13-15</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 3999/day</h3>
                <br>
                <br><br>
                <form action="hyderabad_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "14"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="mahindra" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car15.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> mahindra thar </h2>
                <p><b>Engine</b>  :  diesel</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">13-17</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 1980/day</h3>
                <br>
                <br><br>
                <form action="hyderabad_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "15"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br><br>
    </div>

</body>
</html>