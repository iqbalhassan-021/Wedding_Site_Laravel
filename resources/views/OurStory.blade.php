<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=2.00, minimum-scale=1.00" user-scalable=no">
    <meta name="keywords" content="Couple name, WE ARE GETTING MARRIED, Couple name, WE ARE GETTING MARRIED, couple name, 72, 100, 87, Photoshoots, Join us on ourBig Day">
    <meta name="description" content="">
    <?php
    foreach($list as $item){
    
      $firstMet = $item->FirstMet;
      $fdate = $item->DATE;
      $proposal = $item->Proposal;
  }
    ?>
    <title></title>

    <link rel="stylesheet" href="/css/timeline.css" media="screen">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
  <div class="timeline" id="timeline">
    <div class="timecontainer lineleft">
      <div class="timecontent">
        <img src="/images/FirstMeeting.jpg" alt="">
        <h2  class="stylishfont">First Met</h2>
        <p><?php echo $firstMet?></p>
      </div>
    </div>
    <div class="timecontainer lineright">
      <div class="timecontent">
      <img src="/images/FirstDate.jpg" alt="">
        <h2  class="stylishfont">First Date</h2>
        <p><?php echo $fdate?></p>
      </div>
    </div>
    <div class="timecontainer lineleft">
      <div class="timecontent">
      <img src="/images/ProposalIMG.jpg" alt="">
        <h2  class="stylishfont">Proposal</h2>
        <p><?php echo $proposal?></p>
      </div>
    </div>
 
  </div>

  </body></html>