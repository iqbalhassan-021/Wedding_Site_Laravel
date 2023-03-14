<head>
  <link rel="stylesheet" href="/css/contentpage.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Great+Vibes&display=swap" rel="stylesheet">
<?php
    foreach($list as $item){
      $CoupleName[] = $item->CoupleName;
  }
 
    end($CoupleName);
    ?>
    
    <title><?php echo end($CoupleName);?></title>
    
</head>

    <div class="topnav" id="myTopnav">
    <a href="{{url('/')}}" class="stylishfont" style="color: green;font-family: 'Great Vibes', cursive;;"><?php echo end($CoupleName);?></a>
    <a href="{{url('/')}}" >Home</a>
    <a href="{{url('/')}}">Date</a>
    <a href="{{url('/')}}">Photos</a>
    <a href="{{url('/')}}">Our Story</a>
    <a href="{{url('Blog')}}">Blog</a>
    <a href="{{url('ContactPage')}}" class="active" >Contact</a>
    <a href="{{url('Guests')}}" >Guests</a>
    <a href="{{url('/')}}">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div>
    @include('Contactform')