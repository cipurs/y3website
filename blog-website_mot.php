<!DOCTYPE html>
<html lang="en-gb">
<head>
<meta charset="utf-8">
 <meta name="description" content="Case study; Film project in conjunction with Sale Sharks about a player unveiling.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name='theme-color' content='#000'> <!-- Browser theme colour for ANDROID -->
<link href="style.css" type="text/css" rel="stylesheet"/>
 <title> Ross Taylor - Website MOT Blog</title>        
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
<img src='media/images/blog_optimisation/opt-banner.png' alt='Light painting taken on a road to depict speed and connectivity.'>
<h1>Website M.O.T... Is it web ready?</h1>
<hr>
<h2>Code Validation!</h2>
<p>This is an integral process in website development. Making sure your semantics are perfect could make or break (literally) your website. Due to this, whenever I make a significant change to my website I upload it to my web server and run the URL through w3school’s <a href= 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fpaintedwithpixels.uk%2F' title='html validator by w3 schools'>Nu HTML checker</a> to see if I’ve made any errors in my coding. Although however, some elements such as ARIA roles tend to bring up warnings in this method of validation it is still important that you keep them in. After all, it is only a warning, not an error! Developers validate their code, much like I have, for various reasons. Be it as simple as debugging code it is a crucial part of the development process as it also enforces and teaches developers about best practices in website development. I have also made use of other free online tools such as <a href='http://csslint.net/' title='CSS validator'>CSS Lint</a> to ensure that my CSS is valid and follows the industry standards.
</p>
<hr>
<img src='media/images/blog_optimisation/opt-val.png' alt='Screenshot of this website passing the validator with zero errors or warnings.'>
<hr>
<h2>Page Optimisation!</h2>
<p>Being very interested in <a href='flickr.php' title='Case study of my current image gallery'>photography</a>, this is always an issue I face when I design a website. I am always faced with the same argument; quality vs file size. Given that the images I usually use are taken using my DSLR, they often come with extremely large dimensions and incredibly high pixel density. One of the ways I combat this is through Adobe Photoshop’s ‘Save for web’ feature which allows you to select dimensions and file extension as well as remove select colours from the image pallet in hopes to reduce file size. This usually means that the image quality suffers terribly and as a result I am usually restricted in the images that I use. Recently, however, I have been told about free websites such as <a href=' https://tinypng.com/' title='tiny png homepage'>TinyPNG</a>, which strip away a large amount of the image’s meta data and selective colours meaning that the image you are left with at the end still has a very high quality but with a fraction of the file size. I may consider, in the future, increasing the amount of time the website stores cached files as a hope to reduce the data usage of returning visitors!</p>
<hr>
<img src='media/images/blog_optimisation/opt-img.png' alt='Screenshot from TinyPNG showing that the difference between the optimised and original image is negligible.'>
<hr>
<h2>SEO Optimisation!</h2>
<p>As I am relatively new to the web development scene, this isn’t a subject I know a large amount about. As such I have ensured that I have rich and relevant meta data and that the site is totally mobile friendly as a hope to increase my website’s standing. To increase my knowledge into this field I intend to eventually integrate google analytics to my website to measure traffic and conduct further research into what I can do to increase the amount of viewers to my site, such as looking at google AdWords and reading related literature. The only indicator of my website SEO Score is through the <a href='http://whois.domaintools.com/paintedwithpixels.uk' title='My whois lookup page'>Whois Lookup</a> of my domain which shows at the time of this post is around 89%. </p>
<hr>
<img src='media/images/blog_optimisation/opt-seo.png' alt='Scrabble tiles spelling out "adwords".'>
</div>
</div>
<!-- FOOTER -->

<?php include_once("footer.php");
?>
</div>
</body>
</html>