<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>VehicleHub</title>
</head>
<body>
    <?php
        session_start();
        require_once "navbar.php";
    ?>
    <div class="background1">
        <img src="images/obi-onyeador-JIcR3-O8ko8-unsplash.jpg">
        <div class="bgcontent">
            <p>Search and find Cars, Bikes, Goods carriers, and even Buses for people transport in the one go.</p>
            <p>Join the VehicleHub and Start your Journey in just 2 steps.</p>
            <p>Step 1 - Search for the Vehicle that meets your requirements.</p>
            <p>Step 2 - Book it and enjoy the service.</p>
        </div>
    </div>
    <div class = "services" id="service">
        <h1>Services</h1>
        <div class="row1">
            <div class="polaroid">
                <img src="images/bikedemo2.jpg">
                <p>Nothing can beat the experience of travelling on a bike. Weather maneuvering through traffic. And freah Air you feel on the bike is matchless.
                    it is ideal for travellers who travels alone or travel with a friend. And we have a great collection of Bikes in our garage. Feel free to check them.
                </p>
                <a href="bike_form.php">Book Here</a>
            </div>
            <div class = "polaroid">
                <img src = "images/cardemo.jpg">
                <p>Wanna Travel with family or a group of friends, we got you covered. In the market renting a car with 5 or 7 seats can cost a fortune but we are delivering the same 
                    for a fraction of price. We have a wide variety of 5 seaters and 7 seaters. The vehicles go through many tests and inspections before renting.
                </p>
                <a href="car_form.php">Book Here</a>
            </div>
            <div class = "polaroid">
                <img src = "images/cargodemo.jpg">
                <p>Shifting house! or want to ship large amount of cargo or furniture. We also provide a wide range of transport vehicles. We aslo facilitate with movers and packers
                    at a very competitive price in the market. And we have a world class drivers to make sure the cargo reaches the destination safe and sound.
                </p>
                <a href="truck.php">Book Here</a>
            </div>
        </div>
    </div>
    <div class="team" id="team">
        <h1>Meet our Development Team</h1>
        <div class="team_row">
            <div class="team_details">
                <img src="images/vallabh.jpeg">
                <p>Tippa Srivallabh</p>
                <p>BL.EN.U4CSE20181</p>
                <P>CSE-C SECTION</P>
                <P>AMRITA-BLR</P>
            </div>
            <div class="team_details">
                <img src="images/varshith.jpeg">
                <p>Tummala Varshith</p>
                <p>BL.EN.U4CSE20184</p>
                <P>CSE-C SECTION</P>
                <P>AMRITA-BLR</P>
            </div>
            <div class="team_details">
                <img src="images/hemanth.jpeg">
                <p>Gadiraju Hemanth Sai Varma</p>
                <p>BL.EN.U4CSE20042</p>
                <P>CSE-A SECTION</P>
                <P>AMRITA-BLR</P>
            </div>
            <div class="team_details">
                <img src="images/madhukar.jpeg">
                <p>Raghupathruni Sai Madhukar</p>
                <p>BL.EN.U4CSE20137</p>
                <P>CSE-C SECTION</P>
                <P>AMRITA-BLR</P>
            </div>
        </div>
    </div>
    <div class="advert">
        <p>When you feel it's the right time to travel, It is the right thing to visit VehicleHub.com</p>
        <img src = "images/pngegg (1).png">
    </div>
    <footer>
        <div class="footer_details">
            <br><br>
            <h1>VehicleHub Corporation.</h1>
            <br><br>
            <p>Head Quarters:</p>
            <p>Floor no-7, officeHubs, D/No-5-13-67/h, industrial area, Bangalore</p>
            <br>
            <p>For querys contact:</p>
            <p>contact no. 8125058106</p>
            <p>email to :<a href="emailto:Vehiclehub@gmail.com" style="margin-left: 3px;">Vehiclehub@query.com</a></p>
            <a href = "admin_login.php"> admin_login </a>
        </div>
        <div class="footer_links">
            <a href="#"><i class="fa fa-facebook-official" style="font-size: 50px;"></i>&emsp;facebook/VehilcleHub_official</a>
            <br>
            <a href="#"><i class="fa fa-instagram" style="font-size: 50px;"></i>&emsp;Instagram/Vehicle_hub</a>
            <br>
            <a href="#"><i class="fa fa-twitter" style="font-size: 50px;"></i>&emsp;twitter/Official_VehicalHub</a>
            <br>
            <a href="#"><i class="fa fa-linkedin" style="font-size: 50px;"></i>&emsp;Linkedin/vehicleHub_corp</a>
        </div>
    </footer>
</body>
</html>