<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title?> | StarHealth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/google-code-prettify/prettify.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>      <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600' rel='stylesheet' type='text/css'>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/apple-touch-icon-144-precomposed.png"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/starhealth-favicon-144.png">
    <!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/ico/apple-touch-icon-114-precomposed.png"> -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/ico/starhealth-favicon-114.png">
      <!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/ico/apple-touch-icon-72-precomposed.png"> -->
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/ico/starhealth-favicon-72.png">
                    <!-- <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/ico/apple-touch-icon-57-precomposed.png"> -->
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/ico/starhealth-favicon-57.png">
                                   <!-- <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.png"> -->
                                   <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/starhealth-favicon-32.png">
  </head>

  <body data-spy="scroll">
	  
  <div class="container">
<header id="topbar">
	      <div class="container-fluid">
		  <div class="region region-top-navigation">
	    <div id="block-menu-menu-radiomenu" class="block block-menu block-odd">

	    
	  <div class="content">
	    <ul><li class="first leaf classic-105 mid-1819"><a href="http://www.ustream.tv/channel/classic105-kenya?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">Classic 105</a></li>
	<li class="leaf east-fm mid-1822"><a href="http://www.ustream.tv/channel/east-fm?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">East fm</a></li>
	<li class="leaf kiss-100 mid-1818"><a href="http://www.ustream.tv/channel/kiss100-kenya?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">Kiss 100</a></li>
	<li class="leaf radio-jambo mid-1820"><a href="http://www.ustream.tv/channel/radiojambo-fm?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">Radio Jambo</a></li>
	<li class="last leaf xfm mid-1821"><a href="http://www.ustream.tv/channel/xfm-kenya?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">XFM</a></li>
	</ul>  </div>
	</div>
	  </div>
	      </div>
	    </header>
      <div class="brand_header">
          <div class="row">
              <div class="span4">
                <a class="brand" href="http://health.the-star.co.ke/"><img src="<?php echo base_url(); ?>assets/img/logo.png"></a>
              </div>
              <div class="span4" style="float:right;width:280px !important;">
              
<div class="date-section">
<?php date_default_timezone_set("Africa/Nairobi"); echo date('l, M j<\sup>S</\sup> Y');?>
</div>
<div class="input-append">
<input type="text" placeholder="Type to search..." class="search" id="main_search">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('#main_search').keypress(function (e) {
                if (e.which == 13) {
                    $('#site_search_submit').click();
                    return false;    //<---- Add this line
                }
            });

            $('#site_search_submit').click(function(){

                if($('#main_search').val().length == 0){
                    alert('Please enter a search query!');
                }else{
                    window.location = "http://the-star.co.ke/search/node/" + $('#main_search').val();
                }

            });
});
</script>

<button class="btn add-on red_button" role="button" id="site_search_submit">
        			<i class="icon-search"></i>
    			</button>
</div>
                          </div>
                          
              </div>
          </div>
      </div>
  </div>
  <div class="container navbar navbar-inverse">
      <div class="navbar-inner">
          <div class="container navigation-main">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <div class="nav-collapse collapse">
                  <ul class="nav">
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/news" target="_blank">News</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/business" target="_blank">Business</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/sports" target="_blank">Sports</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/entertainment" target="_blank">Entertainment</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/opinions" target="_blank">Opinions</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/starlife" target="_blank">StarLife</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/weekend-star" target="_blank">Weekend Star</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>


  
