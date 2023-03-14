<head>
  <link rel="stylesheet" href="/css/style.css">
<?php
    foreach($list as $item){
      $CoupleName[] = $item->CoupleName;
  }

    end($CoupleName);
    ?>
    <title><?php echo end($CoupleName);?></title>
  
    
</head>

    @include('Slider')
    <!--NavBar-->
    <div class="topnav" id="myTopnav">
  
    <a href="{{url('ContentPage')}}" class="stylishfont" style="color: green; font-family: 'Great Vibes', cursive;"><?php echo end($CoupleName);?></a>
    <a href="{{url('ContentPage')}}" class="active">Home</a>
    <a href="#weddingdate">Date</a>
    <a href="#photosection">Photos</a>
    <a href="#storyline">Our Story</a>
    <a href="{{url('Blog')}}">Blog</a>
    <a href="{{url('ContactPage')}}">Contact</a>
    <a href="#viewcouple">About</a>
    <a href="{{url('Guests')}}" >Guests</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div id="viewcouple">@include('Groom&Bride')
    </div>
    <div id="weddingdate">@include('Dates')</div> 
    <div id="photosection">@include('Photos')</div>
    <div id="storyline">@include('OurStory')</div>
    <div id="destination">@include('WeddingDestination')</div> 
    <div id="invitation">@include('invitation')</div>
    <div id="getthere">@include('gettingThere')</div>
   <div id="footersection">@include('footer')</div>





  <script>
    // Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
  </script>