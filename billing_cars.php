<?php
require_once "config.php";
require_once "navbar.php";

$mysqli->query($_SESSION['sqlstmt']);
$result = $mysqli->query($_SESSION['sqlstmt2']);
$row = $result -> fetch_assoc();
?>

<!-- $_SESSION["customer_name"] = $customer_name;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["customer_email"] = $customer_email; -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title></title>
</head>
<script type="text/javascript">
    function checking_e(x) {
        var zip = document.formz.Zipcode.value;
        var cardno = document.formz.CN.value;
        var expmonth = document.formz.Month.value;
        var expyear = document.formz.Year.value;
        var CVV = document.formz.CVV.value;
        const d = new Date();
        if (zip.length != 6) { alert('Please check Zipcode'); return false; }
        if (document.getElementById('!!radio').checked == false && document.getElementById('!radio').checked == false) {
            alert('Please check the payment method');
            return false;
        }
        if (document.getElementById('!!radio').checked == false) {
            if (cardno.length != 16) {
                alert('please check Credit/Debit Card Number');
                return false;
            }
            if (d.FullYear() > expyear) {
                alert('please check your entered expriy date');
            }
            else {
                if (d.FullYear == expyear) {
                    if (d.getMonth() > expmonth) {
                        alert('Please check your entered month');
                    }
                }
                else {
                    //ANYTHING IS FINE
                }
            }
        }
        var atposition = x.indexOf("@");  
		var dotposition = x.lastIndexOf(".");  
		if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
		{  
  			alert('Please Enter a Valid Email ID');  
  			return false;
  		}  
    }

</script>
<style type="text/css">
    * {
        border-radius: 5px;
    }

    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }

    .form__group {
        position: relative;
        padding: 15px 0 0;
        margin-top: 10px;
        width: 25%;
    }

    .form__field {
        border: 0;
        border-bottom: 2px solid black;
        outline: 0;
        font-size: 1.3rem;
        color: #fff;
        padding: 7px 0;
        background: transparent;
        transition: border-color 0.2s;
        border-radius: 0;
        width: 150%;
        position: relative;
        left: 2px;
    }

    .form__field::placeholder {
        color: transparent;
    }

    .form__field:placeholder-shown~.form__label {
        font-size: 1.3rem;
        cursor: text;
        top: 20px;
    }

    .form__label {
        position: absolute;
        top: 0;
        display: block;
        transition: 0.2s;
        font-size: 1rem;
        color: black;
    }

    .form__field:focus {
        padding-bottom: 6px;
        font-weight: 700;
        border-width: 3px;
        border-image: linear-gradient(to right, #11998e, #38ef7d);
        border-image-slice: 1;
    }

    .form__field:focus~.form__label {
        position: absolute;
        top: 0;
        display: block;
        transition: 0.2s;
        font-size: 1rem;
        color: #11998e;
        font-weight: 700;
    }

    /* reset input */
    .form__field:required,
    .form__field:invalid {
        box-shadow: none;
    }

    .btn {
        box-sizing: border-box;
        appearance: none;
        background-color: transparent;
        border: 2px solid rgba(225, 225, 225, 0.99);
        border-radius: 0.6em;
        cursor: pointer;
        display: flex;
        align-self: center;
        font-size: 16px;
        line-height: 1;
        margin: 20px;
        position: relative;
        bottom: 4%;
        left: 25%;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        font-family: sans-serif;
        font-weight: bold;
        box-shadow: 0 0 40px 40px rgba(89, 125, 244, 0.6) inset;
    }

    .btn:active {
        transform: scale(1.1);
        box-shadow: 0 0 40px 40px rgba(255, 255, 255) inset;
    }

    .one {
        position: relative;
        transition: 0.1s;
        padding: 1.2em 2.8em;
    }

    .out_form {
        text-align: center;
        position: absolute;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 10px;
        top: 13%;
        left: 5%;
        height: 75%;
        width: 55%;
        animation-duration: 0.6s;
        animation-timing-function: ease;
        animation-name: expand;
        animation-direction: forwards;
    }

    .out_form2 {
        text-align: center;
        position: absolute;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 10px;
        top: 13%;
        left: 73%;
        height: 40%;
        width: 20%;
        animation-duration: 0.6s;
        animation-timing-function: ease;
        animation-name: expand;
        animation-direction: forwards;
    }

    @keyframes expand {
        0% {
            transform: translateX(1400px);
        }

        100% {
            transform: translateX(5px);
        }
    }

    body {
        overflow-x: hidden;
    }

    form {
        height: 100px;
    }

    a {
        text-decoration: none;
    }

    .form_des {
        position: relative;
        bottom: 5%;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 55px;
        height: 17px;
        border-radius: 17px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .btnposition {
        position: relative;
        top: 35%;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 13px;
        width: 13px;
        left: 4px;
        bottom: 1.7px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: blue;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(32px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 17px;
    }

    .slider.round:before {
        border-radius: 17px;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    h2 {
        text-align: left;
    }

    .inner {
        padding: 2.5%;
        padding-left: 5%;
    }

    .side {
        position: relative;
        left: 55%;
        bottom: 34%;
    }

    span.price {
        float: right;
        color: grey;
    }

    table,
    td {
        border: 0px solid black;
        border-collapse: collapse;
    }

    td {
        padding: 14px;
    }
</style>

<body>
    <div class="out_form">
        <div class="inner">
            <h2>Billing Address</h2>
            <form class="form_des" name="formz" action = "billing_bikes.php">
                <div class="form__group field">
                    <input type="text" name="Name" class="form__field" placeholder="location" style="color: black;"
                        id="location" value = <?php echo $_SESSION['customer_name'] ?>/>
                    <label for="name" class="form__label" >Name</label>
                </div>
                <div class="form__group field">
                    <input type="email" name="Email" class="form__field" placeholder="location" style="color: black;"
                        id="location" value = <?php echo $_SESSION['customer_email'] ?>/>
                    <label for="name" class="form__label">Email</label>
                </div>
                <div class="form__group field">
                    <input type="text" name="Address" class="form__field" placeholder="location" style="color: black;"
                        id="location" />
                    <label for="name" class="form__label">Address</label>
                </div>
                <div class="form__group field">
                    <input type="text" name="City" class="form__field" placeholder="location" style="color: black;"
                        id="location" />
                    <label for="name" class="form__label">City</label>
                </div>
                <div class="form__group field">
                    <input type="text" name="State" class="form__field" placeholder="location" style="color: black;"
                        id="location" />
                    <label for="name" class="form__label">State</label>
                </div>
                <div class="form__group field">
                    <input type="number" name="Zipcode" class="form__field" placeholder="location" style="color: black;"
                        id="location" />
                    <label for="name" class="form__label">Zipcode</label>
                </div>
        </div>
        <div class="side">
            <h2>Payment</h2>
            <div style="position: relative; right: 34.5%; top: 22%;">
                <label>Credit/Debit Card</label>
                <input type="radio" name="Card" id="!!radio">
                <label style="position: relative; left: 3%;">Pay in Person</label>
                <input type="radio" name="Card" style="position: relative; left: 3%;" id="!radio">
            </div>
            <div style="position: relative; top: 0;">
                <div class="form__group field">
                    <input type="text" name="n_o_card" class="form__field" placeholder="location" style="color: black;"
                        id="location" />
                    <label for="name" class="form__label">Name on Card</label>
                </div>
                <div class="form__group field">
                    <input type="number" name="CN" class="form__field" placeholder="location" style="color: black;"
                        id="location" />
                    <label for="name" class="form__label">Card Number</label>
                </div>
                <div class="form__group field">
                    <input type="number" name="Month" class="form__field" placeholder="location" style="color: black;"
                        id="location" />
                    <label for="name" class="form__label">Month</label>
                    <div class="form__group field">
                        <input type="number" name="Year" class="form__field" placeholder="location"
                            style="color: black;" id="location" />
                        <label for="name" class="form__label">Year</label>
                    </div>
                    <div class="form__group field">
                        <input type="number" name="CVV" class="form__field" placeholder="location" style="color: black;"
                            id="location" />
                        <label for="name" class="form__label">CVV</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="out_form2">
        <div class="inner">
            <table>
                <tr>
                    <th>
                        <h3>Bill</h3>
                    </th>
                </tr>
                <tr>
                    <td>price</td>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td>Rs.</td>
                    <td>
                        <div id="1"><?php echo $row['car_price'];?>/day</div>
                    </td>
                </tr>
                <tr>
                    <td>tax</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Rs.</td>
                    <td>
                        <div id="2"><?php echo $row['car_price']/10; ?></div>
                    </td>
                </tr>
                <tr style="border-top: 1px solid black;">
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    
                    <td></td>
                    <td>Rs.</td>
                    <td>
                    <div id="3"><?php echo $row['car_price']*110/100?>/day</div>
                    </td>
                </tr>
            </table>
        </div>
        <button class="btn one" onclick="checking_e(document.formz.Email.value);">Pay</button>
    </div>
    </form>
</body>

</html>