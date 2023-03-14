<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=2.00, minimum-scale=1.00" user-scalable=no">
    <meta name="keywords" content="Couple name, WE ARE GETTING MARRIED, Couple name, WE ARE GETTING MARRIED, couple name, 72, 100, 87, Photoshoots, Join us on ourBig Day">
    <meta name="description" content="">
    <title></title>
  <link rel="stylesheet" href="/css/style.css"> 
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <?php
    foreach($list as $item){
      $CoupleName[] = $item->CoupleName;
  }

    end($CoupleName);
    ?>
  </head>
  <body  >

<footer class="thefooter">
  <div class="textsection">
    <h1 class="stylishfont"><?php echo end($CoupleName);?></h1>
    <p>
"Love is the beginning of a journey that never ends."</p>
  </div>
  <div class="rolesections">
  <a href="#" >Home</a>
    <a href="#weddingdate">Date</a>
    <a href="#photosection">Photos</a>
    <a href="#storyline">Our Story</a>
    
    <a href="#invitation">Contact</a>
    <a href="#viewcouple">About</a>

  </div>
  <div class="pages">
    <a href="#">Home</a>
    <a href="{{url('ContactPage')}} ">Contact us</a>
    <a href="{{url('Blog')}} ">Blog</a>
    <a href="{{url('Guests')}} ">Guests</a>
    <a href="{{url('AdminPage')}} ">Login</a>
  </div>
</footer>
  </body></html>