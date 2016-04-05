<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'Koduleht'; 
    $to = 'kontakt@fixelektroonika.ee'; 
    $subject = 'Uus s6num kodulehelt!';
    
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Palun sisesta oma nimi';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Palun sisesta töötav e-post';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Palun sisesta sõnum';
    }
    
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-info">Täname! Vastame Teile esimesel võimalusel.</div>';
  } else {
    $result='<div class="alert alert-danger">Vabadame! Sõnumi edastamisel tuli sisse räme error. Proovi hiljem uuesti.</div>';
  }
}
  }
?>
<!DOCTYPE html>
<html lang=et>
<head>
<meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv=x-ua-compatible content="ie=edge">
<title>Fix Elektroonika - Tartu nutikaim elektroonikaremont</title>
<meta name="Fix Elektroonika" content="Elektrooniliste seadmete remont Tartus">
<meta name=description content="Tartu nutikaim elektroonikaremont">
<meta name=author content="Taavi Rannamets">
<link href=favicon-96x96.png rel=icon type=image/x-icon />
<link rel=stylesheet type=text/css href=css/styles.min.css>
<link rel=stylesheet href=css/bootstrap.min.css>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab|Alfa+Slab+One|Source+Sans+Pro:400,300' rel=stylesheet type=text/css>
<link rel=stylesheet href=fonts/font-awesome-4.5.0/css/font-awesome.min.css>
<script src=includes/js/modernizr-2.6.2.min.js></script>
<script>(function(d,e,j,h,f,c,b){d.GoogleAnalyticsObject=f;d[f]=d[f]||function(){(d[f].q=d[f].q||[]).push(arguments)},d[f].l=1*new Date();c=e.createElement(j),b=e.getElementsByTagName(j)[0];c.async=1;c.src=h;b.parentNode.insertBefore(c,b)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create","UA-72752653-1","auto");ga("send","pageview");</script>
</head>
<body>
<section class=wrapper id=cover>
<input type=checkbox id=menu name=menu class=menu-checkbox>
<div class=menu>
<label class=menu-toggle for=menu>
<span>Toggle Navigation</span>
</label>
<ul id=menu-list class=list-unstyled>
<li>
<a class=menu-link href=#meist>Meist</a>
</li>
<li>
<a class=menu-link href=#remont>Remont</a>
</li>
<li>
<a class=menu-link href=#kontakt>Kontakt</a>
</li>
</ul>
</div>
<div class=container>
<div class=section-content>
<div class=row>
<div class=col-xs-12>
<div class=result>
<?php echo $result; ?>
</div>
<div class=logo>
<img src=img/logo3.png>
</div>
<div class=about-text>
<h1>Tartu nutikaim elektroonikaremont!</h1>
</div>
<div id=location>
<p>Jalaka 48, ruum 16</p>
</div>
<div class=time>
<p>E-R 11-18</p>
</div>
<div class=number>
<p><a href=tel:+37258531958>58531958</a></p>
</div>
</div>
</div>
</div>
</div>
<div id=about_meist>
</div>
<a class=button href=#about_meist></a>
</section>
<div class=container-fluid>
<div class=page-header id=meist>
<div class=row>
<div class=col-sm-12>
<h3 class="text-sm-center m-t-3">Meist</h3>
</div>
</div>
</div>
</div>
<div class=container id=about_content>
<div class="row m-y-2">
<div class=col-xs-12>
<h2 class="text-xs-center intro">Fix Elektroonika OÜ on Tartus tegutsev elektrooniliste seadmete remondiga tegelev ülituus ettevõte.</h2>
</div>
<div class=col-sm-12>
<p class="text-xs-center second_row m-t-1">Võtame meelsasti käsile ka need võimatuna tunduvad projektid, millega nii mõnedki teised on hätta jäänud.</p>
</div>
</div>
</div>
<div class=container-fluid>
<div class=break_line>
</div>
</div>
<div class=remont-background>
<div class=container>
<div class=page-header id=remont>
<div class=row>
<div class=col-sm-12>
<h3 class="text-sm-center m-t-3">Remont</h3>
</div>
</div>
</div>
</div>
<div class="container list-group">
<ul class=list-unstyled>
<div class=row>
<div class="col-xs-12 col-md-6 text-xs-center">
<li>Telerite, digiboxide, mängukonsoolide ning DVD ja Blu-Ray mängijate parandus.</li>
</div>
<div class="col-xs-12 col-md-6 text-xs-center">
<li class=li-second>Valgus- ja helitehnika remont (LED prožektorid, võimendid, kõlarid, mikserpuldid ja muud seadmed).</li>
</div>
<div class="col-xs-12 col-md-6 text-xs-center">
<li>Vana tehnika remont (lampvõimendid, vinüülimängijad jne).</li>
</div>
<div class="col-xs-12 col-md-6 text-xs-center">
<li class=li-second>Koduelektroonika parandus. Remondime ka kohvimasinaid ja teisi kuuma ning külma joogi seadmeid.</li>
</div>
<div class="col-xs-12 col-md-6 text-xs-center">
<li>Elektriliste tööriistade kordategemine.</li>
</div>
<div class="col-xs-12 col-md-6 text-xs-center">
<li class=li-second>Tellimuse järgi väiksema elektroonika- või elektriseadme valmistamine.</li>
</div>
</div>
</ul>
</div>
</div>
<footer id=footer-main>
<div class=container>
<div class=page-header id=kontakt>
<div class=row>
<div class=col-sm-12>
<h3 class="text-sm-center m-t-3">Kontakt</h3>
</div>
</div>
</div>
</div>
<div class="container map">
<div class=row>
<div class=col-xs-12>
<iframe class="m-t-2 m-b-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2093.6817825473336!2d26.72165271603285!3d58.34816978132627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eb3749f1ecb3e7%3A0xe3deee1a3fe904ea!2sJalaka+48%2C+50109+Tartu!5e0!3m2!1set!2see!4v1459147434321" width=400 height=150 frameborder=0 style=border:0 allowfullscreen>
</iframe>
</div>
</div>
</div>
<div class=container>
<div class=row>
<div class=col-md-4>
<div class="details text-xs-center text-md-left m-t-2">
<div id=company>
<p>Fix Elektroonika OÜ</p>
<p>Reg. kood: 14009074</p>
<p>EE237700771001957889</p>
</div>
<div id=contact>
<p>Jalaka 48, ruum 16</p>
<p>Tartu, 50109</p>
<p>kontakt@fixelektroonika.ee</p>
<p>+372 58531958</p>
</div>
<div class=container id=social-media>
<ul class="list-unstyled social-media fa-stack-2x">
<li>
<a href=https://www.facebook.com/fixelektroonika>
<i class="fa fa-facebook-square fa-inverse" style:"color:white" alt=facebook></i>
</a>
</li>
<li>
<a href="https://plus.google.com/b/103633086014343719470/103633086014343719470/posts?gmbpt=true&pageId=103633086014343719470">
<i class="fa fa-google-plus-square fa-inverse" style:"color:white" alt="google plus"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class=col-md-4>
<form role=form method=post action=index.php>
<div class=form-group>
<label for=name>Nimi*</label>
<input type=text class=form-control id=name name=name placeholder="Minu Nimi" value=<?php echo htmlspecialchars($_POST['name']); ?>>
<?php echo "<p class='text-danger'>$errName</p>";?>
</div>
<div class=form-group>
<label for=email>E-post*</label>
<input type=email class=form-control id=email name=email placeholder=minu@email.ee value=<?php echo htmlspecialchars($_POST['email']); ?>>
<?php echo "<p class='text-danger'>$errEmail</p>";?>
</div>
<div class=form-group>
<label for=message>Sõnum*</label>
<textarea class=form-control rows=4 name=message placeholder="Kirjuta või joonista midagi..."><?php echo htmlspecialchars($_POST['message']);?></textarea>
<?php echo "<p class='text-danger'>$errMessage</p>";?>
</div>
<p>*kõik väljad on kohustuslikud!</p>
<button id=submit name=submit type=submit value=send class="btn btn-secondary-outline">Lennuta teele!</button>
<input type=hidden name=_next value=//www.fixelektroonika.ee/index.php#kontakt />
</form>
</div>
<div class="col-xs-12 col-md-4" id=house>
<iframe class="m-t-2 m-b-3" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1set!2see!4v1459171514575!6m8!1m7!1sBf8pyPcf3hkDbkvtuy7roA!2m2!1d58.34818862412431!2d26.72345817488871!3f95.34!4f0!5f0.7820865974627469" width=400 height=315 frameborder=0 style=border:0 allowfullscreen></iframe>
</div>
</div>
</div>
<div class=container-fluid>
<div class=row id=copyright>
<div class="col-xs-12 text-xs-center p-t-1">
<p>&copy; Copyright 2016, designed and coded by Taavi Rannamets (taavirannamets@gmail.com)</p>
</div>
</div>
</div>
</footer>
<script type=text/javascript src=jquery/jquery-2.2.2.min.js defer></script>
<script type=text/javascript src=js/bootstrap.min.js defer></script>
</body>
</html>