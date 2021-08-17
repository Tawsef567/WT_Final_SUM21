<?php
	$fullname="";
	$err_fullname="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
    $confirm_pass="";
    $err_confirm_pass="";
    $email="";
    $err_email="";
    $phone="";
    $err_phone="";
    $address="";
    $err_address="";
    $birthdate="";
    $err_birthdate="";
	
	
	$hasError=false;
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

        //User name//
        if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="-User Name Required-";
		}
		elseif (strlen($_POST["uname"]) <=6)
		{
			$hasError = true;
			$err_uname = "-User Name must be greater than 6 characters-";
		}
		else if(strpos($_POST["uname"]," "))
		{
			$err_uname = "-no space is allowed-";
		}	
		else
		{
			$uname = $_POST["uname"];
		}

        //Password//
        if(empty($_POST["pass"])){
			$hasError=true;
			$err_pass="-Password Required-";
		}
		elseif (strlen($_POST["pass"]) <=8)
		{
			$hasError = true;
			$err_pass = "-Password must be greater than 8 characters-";
		}
		else if(strpos($_POST["pass"],"#"||"?"))
		{
			$err_pass = "-Dont use those special characters in your password-";
		}	
		else
		{
			$pass = $_POST["pass"];
		}

		//Confirm Password//
		if(empty($_POST["confirm_pass"]))
		{
			$hasError=true;
			$err_confirm_pass="-Password Required-";
		}

		elseif($pass != $confirm_pass)
		{
			$hasError=true;	
   			$err_confirm_pass ="-Password and Confirm password should not be different-";  
		}
		if($pass ==  $confirm_pass)
        {
            if( ctype_upper($pass) && ctype_lower($pass) && is_numeric($pass) )
            {
               $pass = $_POST["pass"];
            }

            else
            {
                 $err_pass="-Password should contain atleast one uppercase,lower case and numeric-";
            }
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

        //Phone//
        if(!empty($_POST["phone"]))
		{
			$hasError=true;
			$err_phone="-Phone number is Required-";
		}
		
		else
		{
			$phone = $_POST["phone"];
		}

        //Address//
        if(empty($_POST["address"])){
			$hasError=true;
			$err_address="-Address is Required-";
		}
		else
		{
			$address = $_POST["address"];
		}
		
		if(!$hasError){
			echo $_POST["fullname"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["pass"]."<br>";
            echo $_POST["confirm_pass"]."<br>";
            echo $_POST["email"]."<br>";
            echo $_POST["phone"]."<br>";
            echo $_POST["address"]."<br>";
            echo $_POST["birthdate"]."<br>";

			}
		}
?>