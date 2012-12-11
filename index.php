<?php
require_once('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<title>Star Health</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <script src="js/jquery.js"></script>
    <script type="text/javascript">
<!--
// create the XMLHttpRequest object, according browser
function get_XmlHttp() {
  // create the variable that will contain the instance of the XMLHttpRequest object (initially with null value)
  var xmlHttp = null;

  if(window.XMLHttpRequest) {		// for Forefox, IE7+, Opera, Safari, ...
    xmlHttp = new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {	// for Internet Explorer 5 or 6
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  return xmlHttp;
}

// sends data to a php file, via POST, and displays the received answer
function ajaxrequest_more(php_file) {
  var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance
 document.getElementById("loading").style.display = 'none';
  document.getElementById("formstuff").style.display = 'block';
  document.getElementById("context").style.display = 'none';
  
  // create pairs index=value with data that must be sent to server
  var  the_data = 'county=a';

  request.open("POST", php_file, true);			// set the request

  // adds  a header to tell the PHP script to recognize the data as is sent via POST
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(the_data);		// calls the send() method with datas as parameter

  // Check request status
  // If the response is received completely, will be transferred to the HTML tag with tagID
  request.onreadystatechange = function() {
    if (request.readyState == 4) {
     // document.getElementById(tagID).innerHTML = request.responseText;
	 // document.getElementById(formstuff).style.display='none';
	 // document.getElementById(loading).style.display='none';
    }
  }
}

// sends data to a php file, via POST, and displays the received answer
function ajaxrequest_more2(php_file) {
  var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance
 document.getElementById("loading2").style.display = 'none';
  document.getElementById("formstuff2").style.display = 'block';
  document.getElementById("context2").style.display = 'none';

  // create pairs index=value with data that must be sent to server
  var  the_data = 'county=a';

  request.open("POST", php_file, true);			// set the request

  // adds  a header to tell the PHP script to recognize the data as is sent via POST
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(the_data);		// calls the send() method with datas as parameter

  // Check request status
  // If the response is received completely, will be transferred to the HTML tag with tagID
  request.onreadystatechange = function() {
    if (request.readyState == 4) {
     // document.getElementById(tagID).innerHTML = request.responseText;
	 // document.getElementById(formstuff).style.display='none';
	 // document.getElementById(loading).style.display='none';
    }
  }
}
--></script>
</head>

<body id="home" data-spy="scroll">
<!-- set fix background for ie8 and below-->
<!--[if lt IE 9]>
<img class="bg" src="img/bg_1.jpg" >
<![endif]-->
    <header>
    	<nav class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                 <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a href="<?php echo $home;?>" class="brand"><img src="img/starhealth_logo.png" height="60px"></a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="active"><a href="#home"><i class="icon-home icon-white"><img src='<?php echo $home?>images/home.png'></i> Home</a></li>
                        <li><a href="#services"><i class="icon-white icon-briefcase"><img src='<?php echo $home?>images/apps.png'></i> Apps</a></li>
                        <li><a href="#projects"><i class="icon-white icon-calendar"><img src='<?php echo $home?>images/ico.png'></i> Data Visualizations</a></li>
                        <li><a href="#about"><i class="icon-white icon-user"><img src='<?php echo $home?>images/about.png'></i> About</a></li>
                       
                    </ul>
                 </div>
            </div>
        </div>
    </nav>
    </header>
    <div class="container">

    	<section class="header">
        	<div class="white_box">
            	<div class="row">
                	<div class="span5">
                    	<div class="text">
						
                          <?php
						  include_once('tabbedContent/index.php');
						  ?>
						   </div>
                    </div>
                       <div class="span7" style='padding-top:10px;padding-bottom:10px;padding-right:0px;'>
					<div class='h_iframe' style='width:95%;height:410px;background-color:#fff;padding:10px;padding-bottom:0px;'>
<style type='text/css'>
.h_iframe        {position:relative;}
					.h_iframe .ratio {display:block;width:100%;height:410px;}
.h_iframe iframe {position:absolute;top:0;left:0;width:100%; height:410px;}
</style>
					<iframe src='apps/map.php' id='childFrame' scrolling='no' frameborder='0'></iframe>
						</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="services row">
		
        	<div class="span4">
            	<div class="white_box">
<?php include_once('apps/registered_practitioner.php');?>                	
					</div>
            </div>
            <div class="span4">
            	<div class="white_box">
<?php include_once('apps/facilities.php');?>                    	
					</div>
            </div>
            <div class="span4">
            	<div class="white_box">
<?php include_once('apps/nhif.php');?>   
				</div>
            </div>
        </section>
        <section id="projects" class="projects">
        	<div class="row">
			<div class='span12'>
			<h2>Visualizations</h2>
			<div class='white_box'>
			<?php
					include_once('apps/disabilities.php');
					disability();
					?>
			</div>
			<br>
			
			</div>
              	<div class="span12">
                    <div class='white_box'>
			<?php
					include_once('apps/bednet.php');
					bednet();
					?>
			</div>
					<div style='height:50px'></div>
                  
                 </div><!--eof span6-->
            	
            </div><!--eof row-->
        </section>
    </div>
    <div id="about" class="bg_about">
        <section class="about container">
        	<div class="row">
           	  <div class="span12">
               	<h2>About Star Health</h2>
                  <p style='font-size:1.1em;color:#fff;line-height:150%'>The Star Newspaper has the capacity to generate a lot of content based on already existing data from already published stories and featuring these analyses in stories in their articles. Through analytically assessing the potential of their data, this information can be  used to build applications for mass consumption. There is a need for data mining of the existing database of stories. These stories are packed with information and can be organised into relevant useful data. This dashboard within the star is an app that will work for the journalists as much as it serves the general public. The dashboard contains three components;
<style type='text/css'>
ol#features li{
padding-bottom:10px;
}
</style>
<ol style='font-size:1.1em;color:#dccfcf;' class='features'><li>ckan repository: this will serve as the back end of the app housing all the datasets.</li>
<li>Data visualisation: unorthodox visualisations of health related data to easily understand the latest and largest health industry issues.</li>
<li>Feature stories: The data analysed from the datasets within the repositoryis also used by journalists to provide content for feature stories</li></ol></p>
                </div>
            </div>
        </section>
    </div>
    <footer class="container_footer">
    	<div class="container">
          <div class="row">
            <div class="span6">
              <h3>health@star.co.ke</h3>
              <address>
              	http://www.the-star.co.ke
</address>
              <p>All rights reserved. 2012 (c) Star Media</p>
            </div>
            <div class="span6">
              <div class="input-prepend" style='display:none;'>
                <h3>Newsletter</h3>
                <p>Stay updated subscibe to our newsletter.</p>
                <form class=" form-inline">
                  <span class="add-on"><i class="icon-envelope"></i></span>
                  <input type="text" class="input-small span2" placeholder="Email">
                  <button type="submit" class="btn"><i class="icon-check"></i>Subscribe</button>
                </form>
              
              </div>
            </div>
          </div>
    	</div>
    </footer>
  
	
    <script src="js/bootstrap.min.js"></script>
   
    <script src="js/jquery.easing.1.3.js"></script>
    <script>
	$(function(){
		 $('.tooltips').tooltip();
		  $('.navbar .nav li a').bind('click',function(event){
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500,'easeInOutExpo');
			event.preventDefault();
		  });
	});
	</script>
</body>
</html>