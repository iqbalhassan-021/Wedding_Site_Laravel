<!DOCTYPE html>
<html style="font-size: 16px;" lang="en" >
<head>
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
    <title>Admin Page</title>
    <link rel="stylesheet" href="/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="/css/blog.css" media="screen">
    <link rel="stylesheet" href="/css/style.css" media="screen">
    <link rel="stylesheet" href="/css/auth.css" media="screen">
    <link rel="stylesheet" href="/css/ContentPage.css" media="screen">
    <link rel="stylesheet" href="/css/Blog-Template.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script class="u-script" type="text/javascript" src="/js/nav.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="/js/auth.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Great+Vibes&display=swap" rel="stylesheet">

  </head>
  <body>
    <div id="adminsection">
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
    <div class="blog" >
    <h1 class="stylishfont">Admin Portal</h1>
  </div>
  <div class="dataentryform">
        <form action="AddCouple" method="POST" class="dataformclass">
            @csrf
          <div class="dataentryformlft">
            <input type="text" placeholder="Couplename" name="CoupleName">
            <input type="text" placeholder="Wedding Destination" name="WeddingDestinatoin" style="margin-top: 10px;">
            
            <div class="names"> 
                <input type="text" placeholder="Groom name" name="GroomName">
                <input type="text" placeholder="Bride name" name="BrideName">   
            </div>
       
         
       
          </div>
          <div class="dataentryformrgt">
            <textarea rows="4" type="text" id="lname" name="TextAboutGroom" placeholder="Text about Groom.."  maxlength="500"></textarea>
            <textarea rows="4" type="text" id="lname" name="TextAboutBride" placeholder="Text about Bride.." maxlength="500"></textarea>
            <textarea rows="4" type="text" id="fname" name="FirstMet" placeholder="Story of first Meeting.." maxlength="500"></textarea>
            <textarea rows="4" type="text" id="lname" name="DATE" placeholder="Story of first Date .." maxlength="500"></textarea>
            <textarea rows="4" type="text" id="lname" name="Proposal" placeholder="Story of Proposal.." maxlength="500"></textarea>
            <div class="savedata">
                <input type="submit" value="Submit" >
                
            </div>
          </div>
       
          
        </form>
    </div>
</div>

</body>
</html>