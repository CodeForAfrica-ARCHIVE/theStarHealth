<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<title>Welcome | StarHealth</title>
		<meta name="description" content="">
		<meta name="author" content="Nick Hargreaves">
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- CSS
		================================================== -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>theme/bootstrap/css/bootstrap.min.css">
		<!-- web font  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">
		<!-- plugin css  -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/js-plugin/animation-framework/animate.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/js-plugin/magnific-popup/magnific-popup.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>theme/js-plugin/isotope/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/js-plugin/flexslider/flexslider.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/js-plugin/pageSlide/jquery.pageslide.css" />
		<!-- Owl carousel-->
		<link rel="stylesheet" href="<?php echo base_url();?>theme/js-plugin/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>theme/js-plugin/owl.carousel/owl-carousel/owl.theme.css">
		<!-- appear-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/js-plugin/appear/nekoAnim.css">
		<!-- icon fonts -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>theme/font-icons/custom-icons/css/custom-icons.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>theme/font-icons/custom-icons/css/custom-icons-ie7.css">
		<!-- Custom css -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>theme/css/layout.css">
		<link type="text/css" id="colors" rel="stylesheet" href="<?php echo base_url();?>theme/css/orange.css">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<script src="<?php echo base_url();?>theme/js/modernizr-2.6.1.min.js"></script>
		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="<?php echo base_url();?>theme/images/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo base_url();?>theme/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>theme/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>theme/images/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>theme/images/apple-touch-icon-144x144.png">
	</head>
	<body data-spy="scroll" data-target="#scrollTarget" data-offset="150" class="activateAppearAnimation">


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
         <p>
			    	<div class="loading" style="text-align:center" id="loading">
			    		<img src="<?php echo base_url();?>assets/img/indicator.gif">
					</div>			
					<div id="mybox">
             
        			</div>    	
			    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
	<style>
			.styleSwitcher{
				display:none;
			}
		</style>
		<!-- Primary Page Layout 
		================================================== -->
		<!-- globalWrapper -->
		<div id="globalWrapper" class="localscroll">
			<!-- header -->
			<header id="mainHeader" class="navbar-fixed-top" role="banner">
				<div class="container">
					<nav class="navbar navbar-default scrollMenu" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" alt="StarHealth" style="height:70px"/></a> </div>
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="scrollTarget">
								<ul class="nav navbar-nav pull-right">
									<li class="active"><a href="#home"><i class="icon-home-outline"></i>Home</a> </li>
									<!--<li><a href="#apps"><i class="icon-comment"></i>Apps</a> </li>-->
									<li><a href="#feature"><i class="icon-star"></i>Feature</a> </li>
									<li><a href="#news"><i class="icon-popup-1"></i>News</a> </li>
									<li><a href="#about"><i class="icon-comment"></i>About</a> </li>
									<li><a href="#links"><i class="icon-thumbs-up"></i>Links</a> </li>
									<li><a href="#helpdesk"><i class="icon-users"></i>Help Desk</a> </li>
								</ul>
							</div>

						</nav>
					</div>
				</header>
				<!-- header -->
				<!-- content -->
				
				<section class="slice" id="home">
					<div class="container imgHover">
							<article class="col-sm-4" data-nekoanim="fadeInLeftBig" data-nekodelay="100">

							<section class="newsText color4">
								<div class='section-content'>
										<div>
		<i class="icon-user-md icon-4x"></i>
		<h2 style="color:#ffd57a">Dodgy Doctors</h2>
		<div class="description">Check to see if your doctor is registered, their certified area of practice <br/>and whether they are free from malpractice</div>
		 <div class="search_menu input-append">
		 	<?php
			session_start();
			?>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.autocomplete.css">
			<script type="text/javascript" src="http://health.the-star.co.ke/beta/assets/ajax-autocomplete/jquery.js"></script>
			<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>
		 	<script type="text/javascript">
			var jq = $.noConflict();
			jq().ready(function() {
				jq("#course").autocomplete("<?php echo base_url();?>/index.php/dodgy/data", {
					width: 260,
					matchContains: true,
					//mustMatch: true,
					//minChars: 0,
					//multiple: true,
					//highlight: false,
					//multipleSeparator: ",",
					selectFirst: false
				});
			});
			</script>

			<input type="text" placeholder="Start typing doctor's name" class="search form-control" name="dodgydoc" id="course" />
			
			<script>
			function get_XmlHttp() {
	 
				  var xmlHttp = null;
			
				  if(window.XMLHttpRequest) {	
					xmlHttp = new XMLHttpRequest();
				  }
				  else if(window.ActiveXObject) {
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
			
				return xmlHttp;
				}
				
				function ajaxrequest(file) {
				  var request =  get_XmlHttp();
				  document.getElementById("mybox").innerHTML = "";
				  document.getElementById("loading").style.display = 'block';
				  var the_data = 'name='+document.getElementById("course").value;
				  request.open("POST", file, true);
					
				  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				  request.send(the_data);
				  
				  request.onreadystatechange = function() {
				  if (request.readyState == 4) {
				      document.getElementById("mybox").innerHTML = request.responseText;
					  document.getElementById("loading").style.display='none';
				    }
				  }
				
				}
				function specialists_request(file){
					var request = get_XmlHttp();
					document.getElementById("mybox").innerHTML = "";
					var county = document.getElementById("county_s").selectedOptions[0].text;
					var name = document.getElementById("specialist").value;
					document.getElementById("loading").style.display = 'block';
					var the_data = 'name='+name+'&county='+county;
					request.open("POST", file, true);
						
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.send(the_data);
					  
					request.onreadystatechange = function() {
					if (request.readyState == 4) {
					      document.getElementById("mybox").innerHTML = request.responseText;
						  document.getElementById("loading").style.display='none';
					    }
					  }
				}
				function nhif(file){
					var request = get_XmlHttp();
					document.getElementById("mybox").innerHTML = "";
					document.getElementById("loading").style.display = 'block';
					
					var max = document.getElementById("max").value;
					var min = document.getElementById("min").value;
					var county = document.getElementById("town").selectedOptions[0].text;
					
					var the_data = "max="+max+"&min="+min+"&town="+county;
					
					request.open("POST", file, true);
						
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.send(the_data);
					  
					request.onreadystatechange = function() {
					if (request.readyState == 4) {
					      document.getElementById("mybox").innerHTML = request.responseText;
						  document.getElementById("loading").style.display='none';
					    }
					  }
				}
				function filter_location(facility){
					var request = get_XmlHttp();
					var file = "<?php echo base_url();?>index.php/facilities/filter_county";
					var county = document.getElementById('county').selectedOptions[0].text;
										
					document.getElementById("mybox").innerHTML = "";
					document.getElementById("loading").style.display = 'block';
					
					var the_data = "name="+facility+"&county="+county;
					//var the_data = "name=1&county=2";
					request.open("POST", file, true);
						
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.send(the_data);
					  
					request.onreadystatechange = function() {
					if (request.readyState == 4) {
					      document.getElementById("mybox").innerHTML = request.responseText;
						  document.getElementById("loading").style.display='none';
					    }
					  }
				}
	
				function filter_town(amount){
					var request = get_XmlHttp();
					var file = "<?php echo base_url();?>index.php/nhif/filter_town";
					var county = document.getElementById('town').selectedOptions[0].text;
										
					document.getElementById("mybox").innerHTML = "";
					document.getElementById("loading").style.display = 'block';
					
					var the_data = "amount="+amount+"&town="+county;
					//var the_data = "name=1&county=2";
					request.open("POST", file, true);
						
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.send(the_data);
					  
					request.onreadystatechange = function() {
					if (request.readyState == 4) {
					      document.getElementById("mybox").innerHTML = request.responseText;
						  document.getElementById("loading").style.display='none';
					    }
					  }
				}
				</script>
				
			
          	</div>
          
			
		</div>	
		</div>
		<button class='btn add-on' href="#myModal" role="button" class="btn" data-toggle="modal" onclick="ajaxrequest('<?php echo base_url();?>index.php/dodgy/search')">
        			<i class="icon-search"></i>
    			</button>


			<div id="myModal" style="text-align:justify !important;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel"></h3>
			  </div>
			  <div class="modal-body">
			    <p>
			    	<div class="loading" style="text-align:center" id="loading">
			    		<img src="<?php echo base_url();?>assets/img/indicator.gif">
					</div>			
					<div id="mybox">
             
        			</div>    	
			    </p>
			  </div>
			  <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			 
			  </div>
			</div>		</section>

							</article>

							<article class="col-sm-4" data-nekoanim="fadeInUp" data-nekodelay="200">
								<section class="newsText color4">
									<div class='section-content'>
									<h2 style="color:#ffd57a">Am I Covered</h2>
											<div class="description">Find out which hospitals your NHIF card will cover</div>
											<input type="text" placeholder="Minimum rate" class="rate form-control" id="min">
											<input type="text" placeholder="Maximum rate" class="rate form-control" id="max">
											<select id="town" class="form-control">
											<option>Select town</option>
											<?php 
											foreach($towns as $town){
												print "<option>".$town['Town']."</option>";	
											}
											?>
											</select>
											</div>
											<button class='btn add-on' href="#myModal" role="button" class="btn" data-toggle="modal" onclick="nhif('<?php echo base_url();?>index.php/nhif')">
											<i class="icon-search"></i>
											</button>	
								</section>
							</article>


							<article class="col-sm-4" data-nekoanim="fadeInRightBig" data-nekodelay="300">

								<section class="newsText color4">
									<div class='section-content'>
											<i class="icon-location-arrow icon-4x"></i>
							<h2 style="color:#ffd57a">Nearest Specialist</h2>
							<div class="description">Find the nearest specialist doctor or health facility</div>
							 <div class="search_menu">
							 	
<select id="specialist" class="form-control">
								<option>Select specialty</option>
								<?php 
								foreach($specialties as $sp){
									print "<option>".$sp['full']."</option>";	
								}
								?>
								</select>
								<select id="county_s" class="form-control">
								<option>Select county</option>
								<?php 
								foreach($counties as $county){
									print "<option>".$county['county']."</option>";	
								}
								?>
								</select>
					          	
					          	</div>
					          	</div>
										<button class='btn add-on' href="#myModal" role="button" class="btn" data-toggle="modal" onclick="specialists_request('<?php echo base_url();?>index.php/facilities/search')">
					        				<i class="icon-search"></i>
					    				</button>								
								</section>
								
							</article>


						</div>
					</div>
				</section>
				<!-- news -->
				<!-- services -->

				<section class="slice" id="feature">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Feature Story</h1>
								<h2 class="subTitle"><?php print $featured[1]['title'];?></h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4" data-nekoanim="fadeIn" data-nekodelay="300">
								<h2>Backstory</h2>
								<h5>Overview</h5>
								<?php
									//print "<img src='".base_url()."assets/thumbs/".$news[0]['sofar_thumbnail']."' width='100%'>";
									print $overview;
								?>
								<h5>The story so far</h5>
								<?php
 print "<table class='table table-striped' data-provides='rowlink'>";
									 foreach($sofar as $item){
									 	print "<tr><td><a href='".$item['link']."'>".$item['title']."</a></td></tr>";
									 }
									 print "</table>";
									function first_paragraph($string) {
				
										$string = explode(".", $string);
										//then combine parts
										if(sizeof($string)>1){
											$newstring = $string[0].'. '.$string[1].'.';
										}else{
											$newstring = $string[0];
										}
									   return $newstring;
									}
									//$description = first_paragraph($news[0]['content']);
				                	/*print "<a href='".base_url()."index.php/article?id=".$news[0]['id']."'>".$news[0]['title']."</a><br/>";
									//print $description;
									 * */
									 /*
									 print "<table class='table table-striped' data-provides='rowlink'>";
									 foreach($sofar as $item){
									 	print "<tr><td><a href='".base_url()."index.php/article?id=".$item['id']."'>".$item['title']."</a></td></tr>";
									 }
									 print "</table>";*/
								  ?>
							</div>
							<div class="col-sm-8" data-nekoanim="fadeInRightBig" data-nekodelay="200">
								<?php print '<div style="text-align:center;padding:10px;background-color:#efefef"><img src="'.$featured[0]['thumb'].'" alt="" height="300px"></div>'; ?>
							</div>
						</div>
					</div>
				</section>
				
				<section class="helpdesk slice color1" id="helpdesk">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1 class="noSubtitle">Help Desk</h1>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="pricingBloc" data-nekoanim="fadeIn" data-nekodelay="100">
									<h2>Helplines</h2>
									<p class="sign">
										<?php
											//if(count($helplines)>0){
									
												foreach($helplines as $helpline){
												print $helpline['h_name']."<br />";
												print "
												<i class='icon-phone icon-2x' style='margin-right:5px'></i>
												<a href='tel:".$helpline['h_number']."'>".$helpline['h_number']."</a>
												<br /><br />";
											}
											if(count($helplines)<1){
												print "No pages listed";
											}
											//}
										?>
									</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="pricingBloc" data-nekoanim="fadeIn" data-nekodelay="400">
									<h2>Support Groups</h2>
									<p class="sign">
										<?php
											//if(count($helplines)>0){
									
												foreach($supportgroups as $supportgroup){
												print $supportgroup['sg_name']."<br />";
												print "
												<i class='icon-phone icon-2x' style='margin-right:5px'></i>
												<a href='tel:".$supportgroup['sg_number']."'>".$supportgroup['sg_number']."</a>
												<br /><br />";
											}
											if(count($supportgroups)<1){
												print "No pages listed";
											}
											//}
										?>
									</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="pricingBloc" data-nekoanim="fadeIn" data-nekodelay="200">
									<h2>Social Media</h2>
									<p class="sign">
										<?php
											//if(count($helplines)>0){
									
											foreach($socialmedias as $socialmedia){
												
												print "
												<i class='icon-link icon-2x' style='margin-right:5px'></i>
													<a href='".$socialmedia['sm_link']."' target='_blank'>".$socialmedia['sm_name']."</a>
												<br /><br />";
											}
											if(count($socialmedias)<1){
												print "No pages listed";
											}
											//}
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="slice" id="news" data-nekoanim="fadeInUp" data-nekodelay="100">
					<div class="container clearfix">
						<div class="row">
							<div class="col-sm-12">
								<h1>News</h1>
								<h2 class="subTitle">Latest health articles</h2>
							</div>
							<nav id="filter" class="col-md-12 text-center">
								<ul>
									<li><a href="" class="current btn btn-sm" data-filter="*">All</a></li>
									<li><a href=""  class="btn btn-sm" data-filter=".major" >Major</a></li>
									<li><a href=""  class="btn btn-sm" data-filter=".features">Features</a></li>
									<li ><a href="" class="btn btn-sm" data-filter=".opinion">Opinion</a></li>
									<li ><a href="" class="btn btn-sm" data-filter=".news">News</a></li>

								</ul>
							</nav>

							<div class="portfolio-items  isotopeWrapper clearfix imgHover" id="3">
								<?php
								foreach($all as $item){
								?>
								<article style='min-height:300px !important;' class="col-sm-4 isotopeItem news <?php print strtolower(str_replace(',', ' ', $item['tags']));?>">
									<section class="imgWrapper" style="display:none;">
										<img alt="" src="<?php echo $item['thumb'];?>" class="img-responsive">
									</section>
<div class="mediaHover" style="display:none;">
										<div class="mask"></div>
										<div class="iconLinks"> 
											<a href="portfolio-project-fullwidth-image.html" title="link" class="sizer portfolioSheet">
												<i class="icon-picture iconRounded iconBig"></i>
												<span>link</span>
											</a> 
											<a href="<?php echo $item['thumb'];?>" class="image-link" title="Full width image">
												<i class="icon-search iconRounded iconBig"></i>
												<span>zoom</span>
											</a> 
										</div>
									</div>
									<section class="boxContent">
										<?php print "<h3><a href='".$item['link']."' target='_blank'>".$item['title']."</a></h3>";?>
										<p>
											<?php if($item['thumb']!=null){print "<img src='".$item['thumb']."' style='width:100px;float:left;margin-right:10px;margin-bottom:10px;'>";}?>
											<?php print $item['description'];?> <br>
											<a href="<?php print $item['link'];?>" class="moreLink portfolioSheet">&rarr; read more</a>
										</p>
									</section>
								</article>
								<?php
								}
								?>
								</div>
							</div>
						</div>
					</section>
					<section id="about" data-stellar-background-ratio="0.5" style="background-color: #444; padding-top:30px; padding-bottom:30px">
					<div class="container">
						<div class="row">
							
							<div class="col-lg-7 col-sm-6">
								<div class="flexslider" id="flexHome">
									<ul class="slides">
										<li>
											<h1>ckan repository:</h1>
											<h2>This will serve as the back end of the app housing all the datasets.</h2>
										</li>
										<li>
											<h1>Data visualisation</h1>
											<h2>unorthodox visualisations of health related data to easily understand the latest and largest health industry issues</h2>
										</li>
										<li>
											<h1>Feature stories</h1>
											<h2>The data analysed from the datasets within the repositoryis also used by journalists to provide content for feature stories</h2>
										</li>
									</ul>
								</div> 
							</div>
							<div class="col-lg-5 col-sm-6 hidden-xs" style='color:#fff'>
								<h2>About StarHealth</h2>
								<p>
									
												The Star Newspaper has the capacity to generate a lot of content based on already existing data from already published stories and featuring these analyses in stories in their articles. Through analytically assessing the potential of their data, this information can be used to build applications for mass consumption. There is a need for data mining of the existing database of stories. These stories are packed with information and can be organised into relevant useful data. This dashboard within the star is an app that will work for the journalists as much as it serves the general public.
								</p>
							</div>
						</div>
					</div>
				</section>
				<section class="slice color1" id="links"  data-nekoanim="fadeInUp" data-nekodelay="100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Links</h1>
								<h2 class="subTitle">Some useful links</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="row boxFeature"  data-nekoanim="fadeInUp" data-nekodelay="100">
									<div class="col-xs-3">
			<a href="https://play.google.com/store/apps/details?id=dk.i2m.mobile.starreports" target="_blank"><img src="<?php echo base_url()?>assets/img/android-icon.png" width="70px"></a>
									</div>
									<div class="col-xs-9">
										<h2>App Store</h2>
										<p>Download the Star's mobile Apps, eBooks, and other tools.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row boxFeature"  data-nekoanim="fadeInUp" data-nekodelay="200">
									<div class="col-xs-3">
									<a href="http://github.com/CodeForAfrica"><img src="<?php echo base_url(); ?>assets/img/GitHub-Mark-32px.png" id="cfa_icon"></a>
									</div>
									<div class="col-xs-9">
										<h2>Open Source</h2>
										<p>The code & data for this page are open source and available for re-use.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="row boxFeature" data-nekoanim="fadeInUp" data-nekodelay="300">
									<div class="col-xs-3">
									<a href="http://code4kenya.org" target="_blank"><img style="height: 50px" src="<?php echo base_url();?>assets/img/c4k_logo.png" id="c4k_partner"></a>
									</div>
									<div class="col-xs-9">
										<h2>CodeForKenya</h2>
										<p>The data driven journalism + tools in StarHealth section were kickstarted by Code4Kenya</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row boxFeature" data-nekoanim="fadeInUp" data-nekodelay="400">
									<div class="col-xs-3">
									<a href="http://the-star.co.ke" target="_blank"><img style="width: 70px" src="<?php echo base_url();?>assets/img/star-logo.png" id="c4k_partner"></a>
									</div>
									<div class="col-xs-9">
										<h2>The Star</h2>
										<p>Content on this website is powered by The-Star</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


					<!-- content -->
					<!-- footer -->
					<footer>
						<section id="mainFooter">
							<div class="container" id="footer">
								<div class="row">
								
								</div>
							</section>
						</footer>
						<section  id="footerRights">
							<div class="container">
								<div class="row">
									<div class="col-sm-6">
										<p>Copyright © 2014 <a href="http://health.the-star.co.ke" target="blank">StarHealth</a> / All rights reserved.</p>
									</div>
									<div class="col-sm-6">
										<ul class="socialNetwork pull-right">
											<li><a href="#" class="tips" title="follow us on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
											<li><a href="#" class="tips" title="follow us on Twitter" target="_blank"><i class="icon-twitter-bird iconRounded"></i></a></li>
											<li><a href="#" class="tips" title="follow us on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
											<!--
											<li><a href="#" class="tips" title="follow us on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
											<li><a href="#" class="tips" title="follow us on Dribble"><i class="icon-dribbble iconRounded"></i></a></li>
											-->
										</ul>     
									</div>
								</div>
							</div>
						</section>
						<!-- End footer -->
					</div>
					<!-- global wrapper -->
		<!-- End Document 
		================================================== -->
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/respond/respond.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/jquery/1.8.3/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap-modal.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>

		<!-- third party plugins  -->
		<script type="text/javascript" src="<?php echo base_url();?>theme/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/easing/jquery.easing.1.3.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/flexslider/jquery.flexslider-min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/isotope/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/parallax/js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/parallax/js/jquery.localscroll-1.2.7-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/parallax/js/jquery.stellar.min.js"></script>
		<!-- appear -->
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/appear/jquery.appear.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/pageSlide/jquery.pageslide-custom.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/jquery.sharrre-1.3.4/jquery.sharrre-1.3.4.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>theme/js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js"></script>


		<!-- Custom  -->
		<script type="text/javascript" src="<?php echo base_url();?>theme/js/custom.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44795600-11', 'auto');
  ga('send', 'pageview');

</script>		
	</body>
	</html>

