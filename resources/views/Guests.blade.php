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
    <link rel="stylesheet" href="/css/ContentPage.css" media="screen">
    <link rel="stylesheet" href="/css/Blog-Template.css" media="screen">
    <link rel="stylesheet" href="/css/style.css" media="screen">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script class="u-script" type="text/javascript" src="/js/jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="/js/nicepage.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="/js/nav.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body>
  <div class="topnav" id="myTopnav">
    <a href="{{url('ContentPage')}}" style="color: green;font-family: 'Brush Script MT', cursive;"><?php echo end($CoupleName);?></a>
    <a href="{{url('ContentPage')}}" >Home</a>
    <a href="{{url('ContentPage')}}" onclick="dispPhotos()">Photos</a>
    <a href="{{url('ContentPage')}}" onclick="dispOurStory()">Our Story</a>
    <a href="{{url('ContactPage')}}" >Contact</a>
    <a href="{{url('Guests')}}" >Guests</a>
    <a href="#" onclick="dispAbout()" >About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div>
  <div class="blog">
    <h1>Guests</h1>
  </div>
  
<table id="guests">
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Contact</th>
    <th>No of guests</th>
  </tr>
  @foreach($guestlist as $glist)
  <tr>
    <td>{{$glist->username}}</td>
    <td>{{$glist->address}}</td>
    <td>{{$glist->phonen}}</td>
    <td>{{$glist->number_of_guests}}</td>
  
  </tr>
  @endforeach
</table>
</body>
</html>