<?php
require_once('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="velviapersky design, www.velviapersky.com">
<title>Star Health</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <script src="js/jquery.js"></script>
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
                <a href="<?php echo $home;?>" class="brand">Star Health</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="active"><a href="#home"><i class="icon-home icon-white"><img src='icons/home.png'></i> Home</a></li>
                        <li><a href="#services"><i class="icon-white icon-briefcase"><img src='icons/apps.png'></i> Apps</a></li>
                        <li><a href="#projects"><i class="icon-white icon-calendar"><img src='icons/ico.png'></i> Data Visualizations</a></li>
                        <li><a href="#about"><i class="icon-white icon-user"><img src='icons/about.png'></i> About</a></li>
                       
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultricies adipiscing tortor, at tempor erat rhoncus nec. Nullam quis sem vitae tortor convallis dignissim at et dui. Nullam in eros nulla, porttitor placerat lorem. Nunc ornare iaculis tincidunt. Quisque vitae tempor nisi. Donec varius nulla id urna rhoncus ut mattis odio scelerisque. In hac habitasse platea dictumst. Ut congue vestibulum facilisis. Cras a suscipit velit. Donec vehicula interdum facilisis.</p>
                    <p>Aliquam et eleifend dui. Sed venenatis iaculis sapien, ut pretium lectus consequat eget. Maecenas quis massa in lorem sollicitudin venenatis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce venenatis nisi augue. In hac habitasse platea dictumst. Duis quis erat eu tellus blandit dignissim et quis ante. Praesent accumsan viverra aliquet. Suspendisse purus lacus, pellentesque sit amet pharetra et, aliquet non orci. Donec dapibus ultricies scelerisque. Vestibulum a hendrerit turpis. Phasellus tincidunt gravida fermentum. Aliquam egestas porttitor erat id porta. Nunc magna risus, imperdiet eget tempus eu, commodo ornare nisl.</p>
                    <p>Quisque porta lorem ac enim consequat laoreet. Vestibulum volutpat, risus vel scelerisque pretium, justo ligula pellentesque risus, in dapibus lacus odio sit amet magna. Sed ut fermentum dui. Ut sit amet quam magna, vel semper leo. Cras faucibus blandit dapibus. Aliquam mattis placerat lectus, sit amet rutrum tortor sagittis quis. Sed turpis erat, auctor vel posuere vitae, rutrum at massa. Proin vulputate quam quis est lacinia placerat. Integer id posuere justo. Maecenas sit amet lorem nisl, eget fermentum dui. Pellentesque feugiat hendrerit pulvinar.</p>
                    <p>Aliquam et eleifend dui. Sed venenatis iaculis sapien, ut pretium lectus consequat eget. Maecenas quis massa in lorem sollicitudin venenatis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce venenatis nisi augue. In hac habitasse platea dictumst. Duis quis erat eu tellus blandit dignissim et quis ante. Praesent accumsan viverra aliquet. Suspendisse purus lacus, pellentesque sit amet pharetra et, aliquet non orci. Donec dapibus ultricies scelerisque. Vestibulum a hendrerit turpis. Phasellus tincidunt gravida fermentum. Aliquam egestas porttitor erat id porta. Nunc magna risus, imperdiet eget tempus eu, commodo ornare nisl.</p>
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
              <div class="input-prepend">
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