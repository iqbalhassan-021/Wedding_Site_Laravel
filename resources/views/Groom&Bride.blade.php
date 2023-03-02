<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=2.00, minimum-scale=1.00" user-scalable=no">
    <meta name="keywords" content="Couple name, WE ARE GETTING MARRIED, Couple name, WE ARE GETTING MARRIED, couple name, 72, 100, 87, Photoshoots, Join us on ourBig Day">
    <meta name="description" content="">
    <?php
    foreach($list as $item){
      $CoupleName[] = $item->CoupleName;
      $groom[] = $item->GroomName;
      $bride[] = $item->BrideName;
      $textaboutGroom = $item->TextAboutGroom;
      $textaboutBride = $item->TextAboutBride;

  }
   // end($textaboutGroom);
   // end($textaboutBride);
    end($bride);
    end($groom);
    end($CoupleName);
    ?>
    <title><?php echo end($CoupleName);?></title>
    <link rel="stylesheet" href="/css/nicepage.css" media="screen">
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/ContentPage.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script class="u-script" type="text/javascript" src="/js/jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="/js/nicepage.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="/js/nav.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
 
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
  <div class="wrapper" id="couple">
        <div class="groomholder">
            <div class="Groomimagesholder"></div>
            <h1><?php echo end($groom);?></h1>
            <img class="titleimg" src="/images/title2.png" alt="">
            <div class="aboutcouple">
                <p><?php echo $textaboutGroom;?></p>

            </div>
          
            <div class="Groomsocialicons">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </div>
        <div class="us">
        <div class="usimage">
            <img src="/images/shape.png" alt="">
        </div>
        </div>
        <div class="brideholder">
            <div class="Brideimagesholder">
              
            </div>
            <h1><?php echo end($bride);?></h1>
            <img class="titleimg" src="/images/title2.png" alt="">
                      <div class="aboutcouple">
                <p><?php echo $textaboutBride;?></p>
                
            </div>
                <div class="Bridesocialicons">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </div>
    </div>
   
  </body></html>