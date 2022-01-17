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