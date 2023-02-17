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
    <link rel="stylesheet" href="/css/ContentPage.css" media="screen">
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
  <body class="u-body u-xl-mode" data-lang="en">
    
  <section  class="u-clearfix u-section-2" id="sec-0caf">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-40 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1" style="overflow: auto;">
                  <h2 class="u-text u-text-default u-text-palette-3-base u-text-1"><?php echo end($groom);?></h2>
                  <p id="grrom" class="u-text u-text-2"><?php echo $textaboutGroom;?></p>
                </div>
              </div>
              <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-1" src="" data-image-width="1000" data-image-height="977" data-animation-name="pulse" data-animation-duration="1000" data-animation-direction="">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_418b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-1" src="" data-image-width="1690" data-image-height="1589" data-animation-name="pulse" data-animation-duration="1000" data-animation-direction="">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-40 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2" style="overflow: auto;">
                  <h2 class="u-text u-text-default u-text-palette-3-base u-text-1"><?php echo end($bride);?></h2>
                  <p class="u-text u-text-2"><?php echo $textaboutBride;?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
  </body></html>