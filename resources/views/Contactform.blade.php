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
   // end($textaboutGroom);
   // end($textaboutBride);
  
    end($CoupleName);
    ?>
    <title><?php echo end($CoupleName);?></title>
    <link rel="stylesheet" href="/css/style.css" media="screen">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script class="u-script" type="text/javascript" src="/js/nav.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
<body>

<div class="contactform">
  <div class="contactfromleft"></div>
  <div class="contactformright">
    <h1 class="stylishfont"><?php echo end($CoupleName);?></h1>

    <div class="formcontainer">
      <form action="ContactPage" method="POST" class="newguestfrom">
        @csrf
        <input type="text" id="name" name="username" placeholder="Your Name">
    
        <input type="text" id="address" name="phonen" placeholder="Your Address">
  
        <input type="text" id="nguests" name="number_of_guests" placeholder="Number of Guests">
    
        <input type="text" id="phonen" name="address" placeholder="Your Phone Number">
        <span style="font-size: 10px;color:red;display:none;margin-top:10px;" id="wrongentery">Please fill all the entries</span>
        <input type="submit" value="Submit">
      </form>
    </div>
    
    <script>
       name = document.getElementById('name').value;
       address = document.getElementById('address').value;
       nguests = document.getElementById('nguests').value;
       phonen = document.getElementById('phonen').value;

      if(name == " " && address == " " && nguests == " " && phonen == " " ){
          document.getElementById('wrongentery').style.display="block";
      }
    </script>
  </div>
</div>
</body>
</html>