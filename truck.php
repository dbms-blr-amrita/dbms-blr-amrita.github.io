<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title></title>
</head>
<style type="text/css">
	*
	{
		border-radius: 5px;
	}
	body
	{
		background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		background-position: center;
	}
  .form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
  width: 50%;
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
.form__field:placeholder-shown ~ .form__label {
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
.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #11998e;
  font-weight: 700;
}

/* reset input */
    .form__field:required, .form__field:invalid
    {
        box-shadow: none;
    }
    .btn 
    {
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
        bottom: 15%;
        left: 28.5%;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        font-family: sans-serif;
        font-weight: bold;
        box-shadow: 0 0 40px 40px rgba(89,125,244,0.6) inset;
    }
    .btn:active
    {
      transform: scale(1.1);
      box-shadow: 0 0 40px 40px rgba(255,255,255) inset;
    }
    .one
    {
      position: relative;
      transition: 0.1s;
      padding: 1.2em 2.8em;
    }
    .out_form
    {
    	text-align: center;
    	position: absolute;
    	background-color: rgba(255, 255, 255, 0.74);
    	padding: 10px;
    	top: 14%;
    	left: 33%;
        height: 65%;
        width: 30%;
        animation-duration: 0.6s;
        animation-timing-function: ease;
        animation-name: expand;
        animation-direction: forwards;
    }
    @keyframes expand
    {
        0%
        {
            transform: translateX(1400px);
        }
        100%
        {
            transform: translateX(5px);
        }
    }
    body
    {
        overflow-x: hidden;
    }
    form
    {
        height: 100px;
    }
    a {text-decoration: none;}
    .form_des
    {
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
.btnposition
{
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

input:checked + .slider {
  background-color: blue;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
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
</style>
<script type="text/javascript">
var day, month, year;
$(document).ready(function(){
$('#submit').on('click', function() {
 var date = $('#input_date').val().split("-");
  day = date[2];
  month = date[1];
  year = date[0];
  var today = new Date();
  if(year <  today.getFullYear())
  {
  	alert("Please Check your entered year");
  	return false;
  }
    else
  	{
  		if(month < (today.getMonth()+1) && year == today.getFullYear())
  		{
  			alert("Please Check your entered month");
  			return false;

  		}
  		else
  		{
  			if(day < today.getDate() && month == (today.getMonth()+1))
  			{
  				alert("Please Check your entered date");
  				return false;
  			}
  		}
  	}
  	var date2 = $('#input_date_drop').val().split("-");
  	day2 = date2[2];
  	month2 = date2[1];
  	year2 = date2[0];
  	if(year2 < year)
  	{
  		alert("Please Check your entered year2");
  		return false;
  	}
  	else
  	{
  		if(month2 < month)
  		{
  			alert("Please Check your entered month2");
  			return false;
  		}
  		else
  		{
  			if(day2 < day)
  			{
  				alert("Please Check your entered date2");
  				return false;
  			}
  		}
  	}
	});
});
</script>
<script type="text/javascript">
		function valueSender()
		{
			var wei = document.Load.Weight.value;
			var tra = document.Load.Distance.value;
			if(wei < 0 || wei == 0)
			{
				alert('Please check the Weight field');
				return false;
			}
			if(tra < 0 || tra == 0)
			{
				alert('Please check the Distance field');
				return false;
			}
			var calculate = tra * wei;
            calculate = calculate/100
            if(tra < 100 && wei < 100)
            {
                calculate = 50;
            }
        	localStorage.setItem("SendingToBillpage", calculate);
        }
</script>

<body>
	<div class="out_form">
	<div style="background-color: rgba(255, 255, 255, 0); border-radius: 0;border-top-right-radius: 5px;border-top-left-radius: 5px; ">
        <h1>Packers & Movers</h1><br>
  	</div>
	<form class="form_des" method="post" name="Load" action="billing.php">
		<div style="position: relative; left: 10%; top: -25%;">
			<div class="form__group field">
				<input type="text" name="customer_location" class="form__field" placeholder="location" style="color: black;" id="location" required />
				<label for="name" class="form__label">Pickup Location</label>
			</div>
		</div>
		<div style="position: relative; left: 10%; top: -25%;">
			<div class="form__group field">
				<input type="date" name="choice_date_pick" class="form__field" placeholder="Date of Pickup" style="color: black;" id="input_date" required />
				<label for="name" class="form__label">Date of Pickup</label>
			</div>
		</div>
		<div style="position: relative; left: 10%; top: -35%;">
			<div class="form__group field">
				<input type="text" name="customer_location" class="form__field" placeholder="location" style="color: black;" id="location" required />
				<label for="name" class="form__label">Drop Location</label>
			</div>
		</div>
		<div style="position: relative; left: 10%; top: -40%;">
			<div class="form__group field">
				<input name="Distance" class="form__field" type="number" placeholder="Distance" style="color: black;" id="Distance" pattern="[0-9]{3}" title="3 digit range only" id="travel"></input><!--Not validated-->
				<label class="form__label" for="name">Travelling Distance(in Km)</label>
			</div>
		</div>
		<div style="position: relative; left: 10%; top: -40%;">
			<div class="form__group field">
				<input name="Weight" class="form__field" type="number" placeholder="Weight" style="color: black;" id="Weight" pattern="[0-9]{3}" title="3 digit range only" id="weight"></input><!--Not validated-->
				<label class="form__label" for="name">Weight of the Cargo(in Kg)</label>
			</div>
		</div>
		<button type = "submit" class="btn one" id="submit" onclick="valueSender();">Submit</button>
    </form>
</div>
</body>
</html>