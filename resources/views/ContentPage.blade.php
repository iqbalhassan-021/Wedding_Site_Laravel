
    @include('Slider')
    <!--NavBar-->
    <div class="topnav" id="myTopnav">
    <a href="{{url('ContentPage')}}">{{$couplename}}</a>
    <a href="{{url('ContentPage')}}" class="active">Home</a>
    <a href="#sec-aab4">Date</a>
    <a href="#sec-036b">Photos</a>
    <a href="#carousel_7fc0">Our Story</a>
    <a href="#">Blog</a>
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
    