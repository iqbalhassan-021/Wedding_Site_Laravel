<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Couple name, WE ARE GETTING MARRIED, Couple name, WE ARE GETTING MARRIED, couple name, 72, 100, 87, Photoshoots, Join us on ourBig Day">
    <meta name="description" content="">
    <?php
    foreach($list as $item){
      $CoupleName[] = $item->CoupleName;
  }
    end($CoupleName);
    ?>
    <title><?php echo end($CoupleName);?></title>
    <link rel="stylesheet" href="/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="/css/blog.css" media="screen">
    <link rel="stylesheet" href="/css/style.css" media="screen">
    <link rel="stylesheet" href="/css/timeline.css" media="screen">
    <link rel="stylesheet" href="/css/ContentPage.css" media="screen">
    <link rel="stylesheet" href="/css/Blog-Template.css" media="screen">
   <script class="u-script" type="text/javascript" src="/js/nav.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Great+Vibes&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body>
  <div class="topnav" id="myTopnav">
    <a href="{{url('/')}}" class="stylishfont" style="color: green; font-family: 'Great Vibes', cursive;"><?php echo end($CoupleName);?></a>
    <a href="{{url('/')}}" >Home</a>
    <a href="#" onclick="dispPhotos()">Photos</a>
    <a href="#" onclick="dispOurStory()">Our Story</a>
    <a href="{{url('ContactPage')}}" >Contact</a>
    <a href="{{url('Guests')}}" >Guests</a>
    <a href="#" onclick="dispAbout()" >About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div>
  <div class="blog">
    <h1 class="stylishfont">Blog</h1>
  </div>
  <div id="about">
  @include('Groom&Bride')
  </div>
  <div id="Photos">
  @include('Photos')
  </div>
  <div id="OurStory">
  @include('OurStory')
  </div>
  @include('footer')
  <script>
    document.getElementById('Photos').style.display='none';
    document.getElementById('OurStory').style.display='none';
    function dispOurStory(){
      document.getElementById('Photos').style.display='none';
      document.getElementById('about').style.display='none';
      document.getElementById('OurStory').style.display='block';
    }
    function dispAbout(){
      document.getElementById('Photos').style.display='none';
      document.getElementById('OurStory').style.display='none';
      document.getElementById('about').style.display='block';
    }
    function dispPhotos(){
      document.getElementById('about').style.display='none';
      document.getElementById('OurStory').style.display='none';
      document.getElementById('Photos').style.display='block';
    }
  </script>


  </body>
</html>