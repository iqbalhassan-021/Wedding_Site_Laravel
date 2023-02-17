<?php
    foreach($list as $item){
    $CoupleName[] = $item->CoupleName;}
    end($CoupleName);
    ?>
@include('Slider')
<div class="topnav" id="myTopnav">
    <a href="{{url('ContentPage')}}" class="active"><?php echo end($CoupleName);?></a>
    <a href="{{url('ContentPage')}}" >Home</a>
    <a href="{{url('ContentPage')}}">Date</a>
    <a href="{{url('ContentPage')}}">Photos</a>
    <a href="{{url('ContentPage')}}">Our Story</a>
    <a href="#">Blog</a>
    <a href="{{url('ContactPage')}}">Contact</a>
    <a href="{{url('ContentPage')}}>About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
 