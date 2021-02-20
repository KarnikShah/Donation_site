<?php
require('connection.inc.php');

 $name =$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $amount=$_POST['amount'];
 $purpose='Donation';
 $sql="INSERT INTO `users` (`name`, `email`, `mobile`, `amount`) VALUES ('$name', '$email', '$mobile', '$amount')";
 $res=mysqli_query($con,$sql);
 
 include 'Instamojo.php';
 $api = new Instamojo\Instamojo('test_036a283e11996ef430c1d46de9d','test_afcd8f61b53e944d966f20c89de', 'https://test.instamojo.com/api/1.1/');
 
 try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
		"buyer_name"=>$name,
        "phone"=> $mobile,
        "send_sms"=> true,
		"allow_repeated_payments"=> false,
        "redirect_url" => "http://localhost/donation/public/thankyou.php"
		//"webhook"=>
        ));
    //print_r($response);
	$pay_url=$response['longurl'];
	header("location:$pay_url");
	}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
	}	
?>