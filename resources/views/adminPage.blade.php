<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Couple name, WE ARE GETTING MARRIED, Couple name, WE ARE GETTING MARRIED, couple name, 72, 100, 87, Photoshoots, Join us on ourBig Day">
    <meta name="description" content="">
    <title>Admin Page</title>
    <link rel="stylesheet" href="/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="/css/adminPage.css" media="screen">
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
<body>
    
<div class="formcontainer">
    <h1>Input the details</h1>
  <form action="AddCouple" method="POST" id="adminform">
    @csrf
    <input type="text" id="fname" name="CoupleName" placeholder="Couple name.." maxlength="500">
    <input type="text" id="lname" name="GroomName" placeholder="Groom name.."maxlength="500">
    <input type="text" id="lname" name="BrideName" placeholder="Bride name.." maxlength="500">
    <input type="text" id="fname" name="Day" placeholder="Date.." maxlength="500">
    <input type="text" id="lname" name="Month" placeholder="Month .." maxlength="500">
    <input type="text" id="lname" name="Year" placeholder="Year.." maxlength="500">
    <input type="text" id="lname" name="TextAboutGroom" placeholder="Text about Groom.."  maxlength="500">
    <input type="text" id="lname" name="TextAboutBride" placeholder="Text about Bride.." maxlength="500">
    <input type="text" id="fname" name="FirstMet" placeholder="Story of first Meeting.." maxlength="500">
    <input type="text" id="lname" name="DATE" placeholder="Story of first Date .." maxlength="500">
    <input type="text" id="lname" name="Proposal" placeholder="Story of Proposal.." maxlength="500">
    <input type="text" id="lname" name="WeddingDestinatoin" placeholder="Wedding Destinatoin.." maxlength="500">
  
    <input type="submit" value="Submit">
  </form>
</div>
    </body></html>