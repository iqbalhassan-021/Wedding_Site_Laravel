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
  
    <a href="{{url('ContentPage')}}" style="color: green;font-family: 'Brush Script MT', cursive;"><?php echo end($CoupleName);?></a>
    <a href="{{url('ContentPage')}}" class="active">Home</a>
    <a href="#sec-aab4">Date</a>
    <a href="#sec-036b">Photos</a>
    <a href="#carousel_7fc0">Our Story</a>
    <a href="{{url('Blog')}}">Blog</a>
    <a href="{{url('ContactPage')}}">Contact</a>
    <a href="#sec-0caf">About</a>
    <a href="{{url('Guests')}}" >Guests</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    @include('Groom&Bride')
    @include('Dates')
    @include('Photos')
    @include('OurStory')
    @include('invitation')
    @include('WeddingDestination')
    @include('gettingThere')
    @include('footer')

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