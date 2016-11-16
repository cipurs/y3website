<!DOCTYPE html>

<html lang="en-gb">
<head>
<meta charset="utf-8">
 <meta name="description" content="Personal and Professional portfolio of Ross Taylor with all my current on ongoing work, as well as my thoughts and feelings towards the industry, making this website and everything inbetween!">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name='theme-color' content='#000'> <!-- Browser theme colour for ANDROID -->
<title>Ross Taylor - Digital Footprint</title>
<link rel='icon' href='media/images/pwpgreen.png'><!-- Bowser Tab Icon -->
<link href="style.css" type="text/css" rel="stylesheet" />
</head>      
<body role='document'> 
<?php include_once("analytics.php");
?>
    <!-- Start of Global Content Conatainer -->
<div class="container">

    <!-- Header php -->
<?php include_once("header.php");
?>
    <!-- END OF HEADER -->  

    
<!-- Start of Main Content -->    
<section class="hero clear">
<div class="content" id='content'> 

    <div class="banner clear">
        <img src="media/images/banner.png" alt="Banner depicting items that represent my various hobbies">
        <div class='overlay'>
        <h1>I'm Ross Taylor</h1>
        <p>Born and bred in the birthplace of the Co-op and the word 'Cruckle'.</p>
        </div>
    </div> 
    <div class='about' role='article'>
    <h2>About Me</h2>
    <p>I am a Digital Media student at Manchester Metropolitan University with a keen intrest in User Experience Design.<br> When I'm not studying or working you can usually find me behind a console or on the pitch, donning my team colours; <br>being from Manchester it has got to be red...</p>
    </div>
    <div class='project clear'>
        <a href="sale_sharks.php" title='Case study of Sale Sharks'><img src="media/images/ss.png" alt="Sale sharks player unveiling advertisement."></a>
        <a href='housing_units.php' title='Case study of Housing Units'><img src="media/images/hu.png" alt="Housing Units Favourite Things advertisement"></a>
        <a href="upgog.php" title='Case study of UpDog'><img src="media/images/updog.png" alt="University project revolving around event advertisement and tickets"></a>
    </div>
</div>
</section>
<!-- End of Main Content -->
    
<!-- FOOTER -->
<?php include_once("footer.php");
?>

</div>
</body>


</html>