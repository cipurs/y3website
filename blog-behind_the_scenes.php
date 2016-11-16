<!DOCTYPE html>
<html lang="en-gb">
<head>
<meta charset="utf-8">
 <meta name="description" content="Blog written about the entire process i undertook to design and build this website.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name='theme-color' content='#000'> <!-- Browser theme colour for ANDROID -->
<link href="style.css" type="text/css" rel="stylesheet"/>
<title> Ross Taylor - Behind the Scenes Blog</title>  
</head>      
<body role='document'>
<?php include_once("analytics.php");
?>
<!-- START OF HEADER -->    
    
<?php include_once("header.php");
?>
    
<!-- END OF HEADER -->      
    
<div class="container">
<div class="content" id='content'>
<div class='post' role='article'>
<img src='media/images/blog_development/dev-banner.png' alt='Image depicting a macbook with Brackets open to show code.'>
<h1>Behind the scenes...</h1>
<hr>
<h2>Research.</h2>
<p>As with any new digital product the very first step is always research! Due to the web being saturated with people’s personal portfolios, there is a wealth of inspiration and design ideas. As always the main places to check for possible design trends and themes would be <a href=' http://www.awwwards.com/' title='Awwwards homepage'>Awwwards</a> as they showcase and award the best websites in given categories. For this given project I obviously looked at the portfolio category to try and discover any trends I may want to follow on with. However, as with modern art, its very subjective to the individual taste and this often resulted in some quite shocking UX issues. Confusing menus coupled with completely random layout made navigating some of these websites very difficult. Users leave a website when they can’t find what they want or at least see signals — an information scent, if you will — to guide them to it. Information scent describes “the extent to which users can predict what they will find if they pursue a certain path through a website,” <a href=' https://www.nngroup.com/articles/information-scent/' title='Article about information scent from the NN Group'>(Jakob Nielsen)</a> As such I decided early on to make my website as minimalistic and user friendly as possible. One online portfolio that particularly caught my attention was one I was shown in my University Agency Ready course, and was that of Designer and Developer <a href=' http://www.adhamdannaway.com/' title='Adham Dannaways portfolio'>Adham Dannaway</a>, due to its flat design. The image below demonstrates a UX nightmare as the writing across the screen is actually the <a href='http://www.durimel.io/nel' title='awward winner with bad UX'>websites navigation.</a>
</p>
<hr>
<img src='media/images/blog_development/dev-bux.png' alt='A screenshot from an awwward winning website that has terrible UX.'>
<hr>
<h2>Design!</h2>
<p>The design process, I found to be, was fairly easy and fast. Given Adham Danaway’s site had inspired me the most in the way of design and simplicity, low fidelity paper wire framing was fairly simple and once I had a solid design I began to adapt it to suit the individual needs of the different pages within the site. Using web applications such as Adobe color I designed my own custom colour scheme that displayed my favourite colour combination, green and black, along with lots of neutral tones to add a very simplistic fell to the site. After I had my colour scheme and wireframes I began to generate some of the content for the website. Using my own images captured with my Nikon d3200 SLR I began to pool together images that would suit the overall feel of the site. The main banner image of the site which fitted perfectly with my colour scheme, being black and green, was a macro shot of my computer mouse. Once I had enough written and image content to place within the site the coding began!</p>
<hr>
<img src='media/images/blog_development/dev-col.png' alt='The clour scheme and rgb codes used on this website and also my first paper wireframes for this website.'>
<hr>
<h2>&lt;Development&gt;</h2>
<p>The process of coding my own website has always been my most difficult task when it came down to website design. Being new to the coding scene I only started to learn HTML and CSS in my first year of University so at this point I’ve only been coding websites for the past two and a bit years. That being said, I am a quick learner and as such the difference between my old portfolio and this one are quite dramatic as I get to grips with a new set of skills. My initial set up of this process always starts with a blank project in Brackets. After learning some very basic PHP, I then set up a virtual host using XAMPP. Using PHP to include my header and footer allows me to call the exact same elements that may otherwise be broken due to a paste error or due to me not changing something on every page, as well as cutting down on file sizes as the code for my header and footer have only been typed out once and not repeated on every page. This website also allowed me to try out CSS Transitions and CSS Flexbox. Flexbox made the layout of my site far easier to manage and less code heavy, and probably much more acceptable, than floating elements and creating my website within a table! </p>
<hr>
<img src='media/images/blog_development/dev-php.png' alt='Screenshot of my Brackets window showing a PHP include rule and some CSS.'>
</div>
</div>
<!-- FOOTER -->

<?php include_once("footer.php");
?>
</div>
</body>
</html>