<head>
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
    <a href="{{url('ContentPage')}}"><?php echo end($CoupleName);?></a>
    <a href="{{url('ContentPage')}}" class="active">Home</a>
    <a href="#sec-aab4">Date</a>
    <a href="#sec-036b">Photos</a>
    <a href="#carousel_7fc0">Our Story</a>
    <a href="{{url('Blog')}}">Blog</a>
    <a href="{{url('ContactPage')}}">Contact</a>
    <a href="#sec-0caf">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div>
    @include('Groom&Bride')
    @include('Dates')
    @include('Photos')
    @include('OurStory')
    @include('WeddingDestination')
    @include('footer')
    