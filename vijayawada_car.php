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
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'tata_harrier'";
        $result = $mysqli->query($selectstmt);
        $tata_status = $result->fetch_assoc();
        if($tata_status['car_status'] === "y"){
            echo '<style>
                #tata{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'renualt_kwid'";
        $result = $mysqli->query($selectstmt);
        $renualt_status = $result->fetch_assoc();
        if($renualt_status['car_status'] === "y"){
            echo '<style>
                #renualt{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'ford_ecosport'";
        $result = $mysqli->query($selectstmt);
        $ford_status = $result->fetch_assoc();
        if($ford_status['car_status'] === "y"){
            echo '<style>
                #ford{
                    opacity : 0.6;
                }
            </style>';
        };
        $selectstmt = "SELECT car_status FROM car WHERE car_name = 'tata_altroz'";
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
            if($car === "16"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 16";
                $stmt2 = "SELECT car_price FROM car WHERE id = 16";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "17"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 17";
                $stmt2 = "SELECT car_price FROM car WHERE id = 17";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "18"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 18";
                $stmt2 = "SELECT car_price FROM car WHERE id = 18";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "19"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 19";
                $stmt2 = "SELECT car_price FROM car WHERE id = 19";
                session_start();
                $_SESSION['sqlstmt'] = $stmt;
                $_SESSION['sqlstmt2'] = $stmt2;
                header("location: billing_cars.php");
            }
            if($car === "20"){
                $stmt = "UPDATE car SET car_status = 'y' WHERE id = 20";
                $stmt2 = "SELECT car_price FROM car WHERE id = 20";
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
            Opp Ramalayam Temple, Block No: 92, OLD MIG, Bhavanipuram, Housing Board Colony, Vijayawada, Andhra Pradesh 520012, India</p>
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
        <div id = "tata" class="car_polaroid">
            <div  class="car_image"><img src="car_show_case/car16.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2>tata harrier </h2>
                <p><b>Engine</b>  :  diesel </p>
                <p><b>Transmission</b>  :  automatic</p>
                <p><b>Mileage</b>  :  <b style="color:red;">18 - 20</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 2800/day</h3>
                <br>
                <br><br>
                <form action="vijayawada_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "16"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="renualt" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car17.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> renualt kwid</h2>
                <p><b>Engine</b>  : diesel </p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">20-25</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 1200/day</h3>
                <br>
                <br><br>
                <form action="vijayawada_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "17"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="ford" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car18.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2>ford ecosport </h2>
                <p><b>Engine</b>  :  diesel</p>
                <p><b>Transmission</b>  :  automatic</p>
                <p><b>Mileage</b>  :  <b style="color:red;">23-25</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 2250/day</h3>
                <br>
                <br><br>
                <form action="vijayawada_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "18"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="tata" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car19.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> tata altroz </h2>
                <p><b>Engine</b>  :  petrol</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">22-25</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 1798/day</h3>
                <br>
                <br><br>
                <form action="vijayawada_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "19"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br>
        <div id="suzuki" class="car_polaroid">
            <div class="car_image"><img src="car_show_case/car20.jpg" alt="enfield"></div>
            <div class="car_details">
                <h2> suzuki celerio </h2>
                <p><b>Engine</b>  :  petrol</p>
                <p><b>Transmission</b>  :  manual</p>
                <p><b>Mileage</b>  :  <b style="color:red;">18-23</b> kmpl</p>
            </div>
            <div class="car_book_now">
                <h3>RS. 1098/day</h3>
                <br>
                <br><br>
                <form action="vijayawada_car.php" method="post">
                    <button style = "color : red; padding : 10px;" type = "submit" name="buy" value = "20"> BOOK NOW </button>
                </form>
            </div>
        </div>
        <br><br>
    </div>

</body>
</html>