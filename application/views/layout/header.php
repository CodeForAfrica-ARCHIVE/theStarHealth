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
  <div class="container zone_user">
    <div class="date_zone"><?php date_default_timezone_set("Africa/Nairobi"); echo date('l, M j<\sup>S</\sup> Y');?></div>
    <div class="follow_us">Follow us
        <a href="http://www.facebook.com/thestarkenya" title="Facebook" target="_blank"><img src="<?php echo base_url(); ?>assets/img/facebook.png" style="height:15px;"></a>
        <a href="http://www.twitter.com/thestarkenya" title="Twitter" target="_blank"><img src="<?php echo base_url(); ?>assets/img/twitter.png" style="height:15px;"></a>
        <a href="/rss.xml" title="RSS"><img src="<?php echo base_url(); ?>assets/img/rss.png" style="height:15px;"></a>

    </div>
  </div>

  <div class="container">
      <div class="brand_header">
          <div class="row">
              <div class="span4">
                <a class="brand" href="http://health.the-star.co.ke/"><img src="<?php echo base_url(); ?>assets/img/logo.png"></a>
              </div>
              <div class="span5" style="float:right;width:380px !important;margin-top: 15px;">
              <form class="navbar-search" action="http://www.the-star.co.ke/" method="post" id="search-block-form" accept-charset="UTF-8" target="_self"><div><div class="container-inline">
                          <input title="Enter the terms you wish to search for." class="custom-search-box form-text" placeholder="" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128">
                          <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit"></div>
                          <input class="custom-search-selector custom-search-types" type="hidden" name="custom_search_types" value="o-google_cse">
                          <input type="hidden" name="form_build_id" value="form-odAZzR_CXSGeKQqwh1NfAdXxS5TNZLD1IEK_x9zCvfQ">
                          <input type="hidden" name="form_id" value="search_block_form">
              </form>
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
                          <a href="http://www.the-star.co.ke/" target="_blank">Main Site</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/national-news" target="_blank">National</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/local-news" target="_blank">Local</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/business" target="_blank">Business</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/opinions" target="_blank">Opinions</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/sports" target="_blank">Sports</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/lifestyle" target="_blank">Lifestyle</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/society" target="_blank">Society</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/word" target="_blank">Word Is</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/weekend" target="_blank">Weekend</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/public-editor" target="_blank">Public Ed</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/sections/debate" target="_blank">Debate</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/twitter-feeds" target="_blank">Star Live</a>
                      </li>
                      <li class="">
                          <a href="http://www.the-star.co.ke/skycam" target="_blank">SkyCAM</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>


  