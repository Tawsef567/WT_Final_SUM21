<?php
$car_name ="";
$car_model ="";
$email ="";
$phone_number ="";
$enquire_date ="";

$err_car_name ="";
$err_car_model ="";
$err_email ="";
$err_phone_number ="";
$err_enquire_date ="";

$hasError=false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //car name//
		if(empty($_POST["car_name"])){
			$hasError=true;
			$err_car_name="-Car Name Required-";
		}
		else
		{
			$car_name = $_POST["car_name"];
		}
    //car model//
		if(empty($_POST["car_model"])){
			$hasError=true;
			$err_car_model="-Model of the car Required-";
		}
		else
		{
			$car_model = $_POST["car_model"];
		}
     //Email//
        if(empty($_POST["email"]))
        {
            $hasError=true;
            $err_email="-Email is Required-";
        }
        else if(!strpos($_POST["email"],"@"))
        {
            $err_email = "*-Invalid Email-";
        }
        else
        {
            $email = $_POST["email"];
        }
    //Phone Number//
        if(!empty($_POST["phone_number"]))
        {
            $hasError=true;
            $err_phone_number="-Phone number is Required-";
        }
        
        else
        {
            $phone_number = $_POST["phone_number"];
        }
    //Enquire Date//
        if(!empty($_POST["enquire_date"]))
        {
            $hasError=true;
            $err_enquire_date="-Date is Required-";
        }
        
        else
        {
            $enquire_date = $_POST["enquire_date"];
        }


        if(!$hasError)
        {
        echo $_POST["car_name"]."<br>";
        echo $_POST["car_model"]."<br>";
        echo $_POST["email"]."<br>";
        echo $_POST["phone_number"]."<br>";
        echo $_POST["enquire_date"]."<br>";
        }

}
?>

<html>
    <head>
        <title>Booking Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    
<!--- Navabr Start--->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Car Management System</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto w-100 justify-content-end">
        <li class="nav-item active">
          <a class="nav-link" href="../project/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="carlist/carlist.php">Car List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="brandlist/brandlist.php">Brand List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bookingpage.php">Booking page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log in</a>
        </li>
      </ul>
    </div>
    </div>
</nav>

<!--- Navabr End--->

        <form action="">
            <fieldset>
                <table>
                    <tr>
                    <td align="right">Car Name</td>
                        <td>
                            :<input name="car_name" value="<?php echo $car_name;?>" type="text" placeholder=""><br>
                            <span style="color:red;"><?php echo $err_car_name;?></span>
                        </td>
                    </tr>

                    <tr>
                    <td align="right">Car Model</td>
                        <td>
                            :<input name="car_model" value="<?php echo $car_model;?>" type="text" placeholder=""><br>
                            <span style="color:red;"><?php echo $err_car_model;?></span>
                        </td>
                    </tr>

                    <tr>
                    <td align="right">Email</td>
                        <td>
                            :<input name="email" value="<?php echo $email;?>" type="text" placeholder="Your Email"><br>
                            <span style="color:red;"><?php echo $err_email;?></span>
                        </td>
                    </tr>

                    <tr>
                    <td align="right">Phone Number</td>
                        <td>
                            :<input name="phone_number" value="<?php echo $phone_number;?>" type="number" placeholder="Your Phone Number"><br>
                            <span style="color:red;"><?php echo $err_phone_number;?></span>
                        </td>
                    </tr>

                    <tr>
                    <td align="right">Enquire Date</td>
                        <td>
                            :<input name="enquire_date" value="<?php echo $enquire_date;?>" type="text" placeholder=""><br>
                            <span style="color:red;"><?php echo $err_enquire_date;?></span>
                        </td>
                    </tr>

                    <tr>
					<td align="left" >
                        <button><a href="../car management system/Payment Page/Payment Page.php">Continue to Payment</a></button>
                    </td>
				    </tr>

                </table>
            </fieldset>
        </form>
    </body>
</html>