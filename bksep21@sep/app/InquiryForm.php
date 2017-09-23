<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<style>
	body{
		font-family: 'Raleway', sans-serif; 
		margin: 0; 
		padding: 0;
	}
	a, a:hover, a:focus{
		text-decoration: none;
		color: #fff;
	}
	@@media (max-width: 480px){
		h3{
			font-size: 15px;
		}
		h4{
			margin-left: 0;
		}
	}
</style>

<?php
ini_set('display_errors',1);
include 'include/DBConnection.php'; 
header("Access-Control-Allow-Origin: *");
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die;
if(isset($_POST['uploadFile'])){
$url = "https://shopify.beetronicsfx.com/app/images/custom_image/".$_POST['uploadFile'];

}else{
	$url = '';
}

$admin_email = $db->query('SELECT * FROM admin_email');
	if($admin_email->num_rows > 0){
		$email =  $admin_email->fetch_assoc();
}
$host_setting = $db->query('SELECT * FROM tbl_host_settings');
if($host_setting->num_rows > 0){
	$host_details = $host_setting->fetch_assoc();
}

$host_name = $host_details['host_name'];
$host_username = $host_details['host_username'];
$host_pass = $host_details['host_pass'];
$host_secure = $host_details['host_secure'];
$host_port = $host_details['host_port'];

$admin =  $email['email'];
$user_email = $_POST['email'];
//$user_email='tesingrevin@gmail.com';
 // $from_add = "Contact@beetronicsfx.com"; 
 // $to_add  = $user_email;
$from_add = $user_email;
$to_add  = $admin;

$message = '<div style="width:630px; max-width:100%; float:none; margin:0 auto;">
				<div style="width:100%;max-width:100%;float:left; padding: 15px 0;">
					<img style="display: block; margin-left: auto; margin-right: auto; width: 100px;" src="https://cdn.shopify.com/s/files/1/2124/2959/t/4/assets/logo.png?14760029643187738573" alt="Logo.">
				</div>
				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">1</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Choose a Circuit</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

if(trim($_POST['chooseTxt'])!='null' && trim($_POST['chooseImage'])!='null'){
	
	$chooseTxtArr = explode(',', $_POST['chooseTxt']);
	$chooseImageArr = explode(',', $_POST['chooseImage']);
	
	for($i=0;$i<count($chooseTxtArr);$i++){
		$message .='<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
					<span style="display: block; border: 2px solid #ddb031; padding: 15px 5px;">
						<img style="margin: 0 auto; width: 100%;" src="'.$chooseImageArr[$i].'">
					</span>
					<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$chooseTxtArr[$i].'</p>
				</li>';
	}	
}

$message .='</ul>
			</div>

			<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>
			<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">2</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Pick A Color</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

	if(trim($_POST['pickTxt'])!='null' && trim($_POST['pickImage'])!='null'){
		$pickTxtArr = explode(',', $_POST['pickTxt']);
		$pickImageArr = explode(',', $_POST['pickImage']);
		
		for($i=0;$i<count($pickTxtArr);$i++){
			$message .='<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
								<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
									<img style="margin: 0 auto; width: 100%;" src="'.$pickImageArr[$i].'">
								</span>
								<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$pickTxtArr[$i].'</p>
							</li>';
		}	
	}

$message .='</ul>
					<div style="width: 400px; max-width: 100%; display: inline-block; vertical-align: top; text-align: center;">
						<label style="font-weight: normal; font-size: 13px; color: #666;">Looking for something else? No problem. Please describe the color you are looking for:</label>
					</div>
					<div style="width: 200px; max-width: 100%; display: inline-block; vertical-align: top; text-align: center;">';

if(trim($_POST['ideaTxt'])!='null'){

	$message .='<input type="text" value="'.$_POST['ideaTxt'].'" name="color" readonly="readonly" style="border: 0 none; background-color: transparent; font-size: 14px; color: #000; text-align: center;">';
}


$message .=			'</div>
				</div>
				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>
				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">3</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Custom design, symbol, logo or pattern</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">
						<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">';

if(trim($_POST['uploadFile'])!='null' && trim($_POST['uploadFile'])!='null'){
	$message .=				'<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
								<a href="'.$url.'"><img src="'.$url.'" style="margin: 0 auto; width: 100%;"></a>
							</span>';
}
if(trim($_POST['issueCmt'])!='null'){
	$message .=				'<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$_POST['issueCmt'].'</p>';
}



$message .= 	   '</li>
					</ul>
				</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>
				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">4</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Knobs</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

if(trim($_POST['knobTxt'])!='null' && trim($_POST['knobImage'])!='null'){
		$knobTxtArr = explode(',', $_POST['knobTxt']);
		$knobImageArr = explode(',', $_POST['knobImage']);
		
		for($i=0;$i<count($knobTxtArr);$i++){
			$message .='<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
							<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
								<img style="margin: 0 auto; width: 100%;" src="'.$knobImageArr[$i].'">
							</span>
							<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$knobTxtArr[$i].'</p>
						</li>';
		}	
	}


$message .=			'</ul>
				</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>
				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">5</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Footswitch Color</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

if(trim($_POST['footcolorTxt'])!='null' && trim($_POST['footcolorImage'])!='null'){
	$footcolorTxtArr = explode(',', $_POST['footcolorTxt']);
	$footcolorImageArr = explode(',', $_POST['footcolorImage']);
	
	for($i=0;$i<count($footcolorTxtArr);$i++){
		$message .=		'<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
							<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
								<img style="margin: 0 auto; width: 100%;" src="'.$footcolorImageArr[$i].'">
							</span>
							<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$footcolorTxtArr[$i].'</p>
						</li>';
	}	
}



$message .=		   '</ul>
				</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>
				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">6</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Footswitch Hardware</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

if(trim($_POST['hardwareTxt'])!='null' && trim($_POST['hardwareImage'])!='null'){
	$hardwareTxtArr = explode(',', $_POST['hardwareTxt']);
	$hardwareImageArr = explode(',', $_POST['hardwareImage']);
	
	for($i=0;$i<count($hardwareTxtArr);$i++){
		$message .=		'<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
							<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
								<img style="margin: 0 auto; width: 100%;" src="'.$hardwareImageArr[$i].'">
							</span>
							<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$hardwareTxtArr[$i].'</p>
						</li>';
	}	
}

$message .=			'</ul>
				</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>
				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">7</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Toggle switch Hardware</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

if(trim($_POST['TogglehardwareTxt'])!='null' && trim($_POST['TogglehardwareImage'])!='null'){
	$TogglehardwareTxtArr = explode(',', $_POST['TogglehardwareTxt']);
	$TogglehardwareImageArr = explode(',', $_POST['TogglehardwareImage']);
	
	for($i=0;$i<count($TogglehardwareTxtArr);$i++){
		$message .=		'<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
							<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
								<img style="margin: 0 auto; width: 100%;" src="'.$TogglehardwareImageArr[$i].'">
							</span>
							<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$TogglehardwareTxtArr[$i].'</p>
						</li>';
	}	
}


$message.=			'</ul>
				</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>
				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">8</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Toggle switch Tip</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

if(trim($_POST['ToggleTxt'])!='null' && trim($_POST['ToggleImage'])!='null'){
	$ToggleTxtArr = explode(',', $_POST['ToggleTxt']);
	$ToggleImageArr = explode(',', $_POST['ToggleImage']);
	
	for($i=0;$i<count($ToggleTxtArr);$i++){
		$message .=		'<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
							<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
								<img style="margin: 0 auto; width: 100%;" src="'.$ToggleImageArr[$i].'">
							</span>
							<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$ToggleTxtArr[$i].'</p>
						</li>';
	}	
}

$message .=			'</ul>
				</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>

				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">9</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Jewel Lens</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

if(trim($_POST['jewlTxt'])!='null' && trim($_POST['jewlImage'])!='null'){
	$jewlTxtArr = explode(',', $_POST['jewlTxt']);
	$jewlImageArr = explode(',', $_POST['jewlImage']);
	
	for($i=0;$i<count($jewlTxtArr);$i++){
		$message .=		'<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
							<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
								<img style="margin: 0 auto; width: 100%;" src="'.$jewlImageArr[$i].'">
							</span>
							<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$jewlTxtArr[$i].'</p>
						</li>';
	}	
}

$message .=			'</ul>
				</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>

				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">10</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Dc power jack color</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

if(trim($_POST['dcTxt'])!='null' && trim($_POST['dcImage'])!='null'){
	$dcTxtArr = explode(',', $_POST['dcTxt']);
	$dcImageArr = explode(',', $_POST['dcImage']);
	
	for($i=0;$i<count($dcTxtArr);$i++){
		$message .=		'<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
							<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
								<img style="margin: 0 auto; width: 100%;" src="'.$dcImageArr[$i].'">
							</span>
							<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$dcTxtArr[$i].'</p>
						</li>';
	}	
}

$message.=			'</ul>
				</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>

				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">11</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Logo Badge</h3>
					<ul style="list-style: none; padding-left: 0; width: 100%; text-align: center;">';

if(trim($_POST['logoTxt'])!='null' && trim($_POST['logoImage'])!='null'){
	$logoTxtArr = explode(',', $_POST['logoTxt']);
	$logoImageArr = explode(',', $_POST['logoImage']);
	
	for($i=0;$i<count($logoTxtArr);$i++){
		$message .=		'<li style="display: inline-block; width: 120px; max-width: 100%; margin: 5px auto; vertical-align: top;">
							<span style="display: block; border: 2px solid #ddb031; padding: 5px;">
								<img style="margin: 0 auto; width: 100%;" src="'.$logoImageArr[$i].'">
							</span>
							<p style="display: block; text-align: center; color: #333; margin: 10px auto; font-size: 14px;">'.$logoTxtArr[$i].'</p>
						</li>';
	}	
}

$message.=			'</ul>
				</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>
				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">12</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Comments, ideas or suggestions</h3>';

if(trim($_POST['suggestion'])!='null'){
	
	
	$message .=		'<textarea type="text" name="comments" style="border: 0 none; background-color: transparent; width: 100%; text-align: center; resize: none;" readonly="readonly">'.$_POST['suggestion'].'</textarea>';
		
}

$message .=		'</div>

				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>

				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: left;">
					<h4 style="background-color: #ddb031; display: inline-block; border-radius: 50%; text-align: center; height: 20px; width: 20px; padding: 8px; margin-left: 10px; font-size: 15px;">13</h4>
					<h3 style="margin-top: 0; display: inline-block; padding-left: 10px;">Personal Info</h3>
					<div style="overflow: auto; min-height: 0.01%; max-width: 100%;">
						<table style="width: 100%; border: 0 none; box-shadow: none; text-align: center;">
							<thead style="background-color: #222;">
								<tr style="color: #fff;">
								<tr style="color: #fff;">
									<th style="padding: 6px 0; font-size: 14px;">Name</th>
									<th style="padding: 6px 0; font-size: 14px;">Email Address</th>
									<th style="padding: 6px 0; font-size: 14px;">Phone Number</th>
									<th style="padding: 6px 0; font-size: 14px;">Street Address</th>
									<th style="padding: 6px 0; font-size: 14px;">City</th>
									<th style="padding: 6px 0; font-size: 14px;">Zip Code</th>
									<th style="padding: 6px 0; font-size: 14px;">Country</th>
								</tr>
							</thead>
							<tbody>
								<tr style="background-color: #fff;">
								<td style="padding: 6px 0; font-size: 14px;">'.$_POST['name'].'</td>
									<td style="padding: 6px 0; font-size: 14px;">'.$_POST['email'].'</td>
									<td style="padding: 6px 0; font-size: 14px;">'.$_POST['mobile_number'].'</td>
									<td style="padding: 6px 0; font-size: 14px;">'.$_POST['strAddress'].'</td>
									<td style="padding: 6px 0; font-size: 14px;">'.$_POST['city'].'</td>
									<td style="padding: 6px 0; font-size: 14px;">'.$_POST['zipCode'].'</td>
									<td style="padding: 6px 0; font-size: 14px;">'.$_POST['cntry'].'</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div style="width: 100%; background: #ccc; max-width:100%; float:left; padding-top: 2px;"></div>

				<div style="background-color: #eee; width:100%; max-width:100%; float:left; padding: 10px 0; text-align: center;">
					<h3 style="font-weight: bold;">Thank you for your inquire!</h3>
					<p>We look forward to making you the coolest custom pedal ever!</p>
					<p>We’ll send you a quote in 24 hours or less.</p>
					<h4 style="font-weight: bold;">Bee Yourself!</h4>
				</div>';


$message .='</div>';


$mail = new PHPMailer;

$mail->isSMTP();                                    
//$mail->Host = 'smtp.office365.com';  
// $mail->Host = 'smtp.office365.com';  
// $mail->SMTPAuth = true;                               
// $mail->Username = 'contact@beetronicsfx.com';                 
// //$mail->Password = 'Sndg@2016$';   
// $mail->Password = 'Lipera@2008';                      
// $mail->SMTPSecure = 'STARTTLS';    

// $mail->Port = 587;   
$mail->Host = $host_name;
$mail->SMTPAuth = true;  
$mail->Username = $host_username; 
$mail->Password = $host_pass;
$mail->SMTPSecure = $host_secure;
$mail->Port = $host_port;

// $mail->Host = 'email-smtp.us-east-1.amazonaws.com';
// $mail->SMTPAuth = true;  
// $mail->Username = 'AKIAIZMT3GCFSF36C3YA'; 
// $mail->Password = 'AohdwLeiAJSNYxIhoVBA91YuPky2XVK2JJJUY/4pvXnZ';
// $mail->SMTPSecure = 'TLS'; 
// $mail->Port = 587;

//$mail->CharSet = "utf8";
//$mail->SMTPDebug = 2;                              

$mail->AddReplyTo('contact@beetronicsfx.com', 'Reply to beetronicsfx');
$mail->setFrom($to_add, 'Mailer');
$mail->addAddress($from_add);
$mail->isHTML(true);                                

$mail->Subject ="Customer Order";
  $mail->Body =  $message;

if(!$mail->send()) {
    echo 'Message could not be sent.<br />';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Success';
}

?>