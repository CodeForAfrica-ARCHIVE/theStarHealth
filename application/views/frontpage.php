<div class="container" style="margin-top: 5px; margin-bottom: 5px;">
	<div class="row-fluid">
		<div class="span3">
			<div class="sidebar_widget row-header">
				<h4>Backstory</h4>
			</div>
			<div class="sidebar_widget down backstory" style="font-size:0.8em">
				<h5>Overview</h5>
				<?php
					print "<img src='".base_url()."assets/thumbs/".$news[0]['sofar_thumbnail']."' width='100%'>";
					print $news[0]['overview'];
				?>
				<h5>The story so far</h5>
				<?php
					function first_paragraph($content) {

						$pos = strpos($content, '[p]');
						return substr($content, 0, $pos);
					   
					}
					//$description = first_paragraph($news[0]['content']);
                	/*print "<a href='".base_url()."index.php/article?id=".$news[0]['id']."'>".$news[0]['title']."</a><br/>";
					//print $description;
					 * */
					 print "<table class='table table-striped' data-provides='rowlink'>";
					 foreach($sofar as $item){
					 	print "<tr><td><a href='".base_url()."index.php/article?id=".$item['id']."'>".$item['title']."</a></td></tr>";
					 }
					 print "</table>";
				  ?>
			</div>
			<br />
			<div class="sidebar_widget bottom evidence">
				<h5>Evidence Dossier</h5>
				<a href="http://data.the-star.co.ke">Data repository</a>
			</div>
		</div>
		<div class="span9">
			<div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                	<?php
                		$item = 0;
						print '<li data-target="#myCarousel" data-slide-to="'.$item.'" class="active"></li>';
						$item++;
						$total = 0;
                		foreach($news as $news_label){
	                		if($total>0){
	            			print '<li data-target="#myCarousel" data-slide-to="'.$item.'" class=""></li>';
							$item++;
							}
							$total++;
                		}
                	?>
                </ol>
                <div class="carousel-inner" align="center" style="background-color:#000">
                	
                	<?php
                	$description = substr($news[0]['content'], 0, 120).'... ';
                		print '<div class="item active"><img src="'.base_url().'assets/thumbs/'.$news[0]['thumb'].'" alt="">
				                    <div class="carousel-caption">
				                      <h6><a href="'.base_url().'index.php/article?id='.$news[0]['id'].'">'.$news[0]['title'].'</a></h6>
				                      <p><a href="'.base_url().'index.php/article?id='.$news[0]['id'].'">'.$description.'</a></p>
				                    </div>
				                </div>';
				  	$item = 0;
						$item++;
						$total = 0;
                		foreach($news as $news_item){
	                		if($total>0){
	           			$description = substr($news_item['content'], 0, 120).'... ';
                		print '<div class="item"><img src="'.base_url().'assets/thumbs/'.$news_item['thumb'].'" alt="">
				                    <div class="carousel-caption">
				                      <h6>'.$news_item['title'].'</h6>
				                      <p>'.$description.'</p>
				                    </div>
		                	 	</div>';
	                		$item++;
							
							}
						$total++;
                		}
                	?>
                  
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
              </div>
		</div>
		<div class="span9">
			<div class="sidebar_widget row-header">
				<h4>Help Desk</h4>
			</div>
			<div class="sidebar_widget down helpline">
				<?php
					
				//if(count($helplines)>0){
					print "<div class='span4'><h5>Help lines</h5>";
					foreach($helplines as $helpline){
					print "<h6>".$helpline['h_name']."</h6>";
					print "<p>
					<i class='icon-phone icon-2x' style='margin-right:5px'></i>
					<a href='tel:".$helpline['h_number']."'>".$helpline['h_number']."</a>
					</p>";
				}
				if(count($helplines)<1){
					print "No pages listed";
				}
				print "</div>";
				//}
				//if(count($supportgroups)>0){
					print "<div class='span4'><h5>Support Groups</h5>";
					foreach($supportgroups as $supportgroup){
					print "<h6>".$supportgroup['sg_name']."</h6>";
					print "<p>
					<i class='icon-phone icon-2x' style='margin-right:5px'></i>
					<a href='tel:".$supportgroup['sg_number']."'>".$supportgroup['sg_number']."</a>
					</p>";
				}
				if(count($supportgroups)<1){
					print "No groups listed";
				}
				print "</div>";
				//}
				//if(count($socialmedias)>0){
					print "<div class='span4'><h5>Social Media</h5>";
				foreach($socialmedias as $socialmedia){
					print "<p>
					<i class='icon-phone icon-2x' style='margin-right:5px'></i>
					<a href='".$socialmedias['sm_link']."'>".$socialmedias['sm_name']."</a>
					</p>";
				}
				if(count($socialmedias)<1){
					print "No pages listed";
				}
				print "</div>";
				//}
				?>
			
			</div>
		</div>
	</div>
	<div class="row-fluid" style="min-height:600px;">
		<div class="span3 sidebar_widget2">
			<div class="row-header"><h4>Major Stories</h4></div>
			<style type="text/css">
				.accordion-inner a{
					color:#000;
				}
			</style>
			<?php
			$i = 0;
			if(sizeof($featured)>0){
			$first_one = $featured[0];
			print '<div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#'.$i.'">
                    	'.$first_one['title'].'<i class="icon-chevron-sign-down"></i>
                    </a>
                  </div>
                  <div id="'.$i.'" class="accordion-body in collapse" style="height: auto;">
                    <div class="accordion-inner">
				<p>'.$first_one['description'].'<br />'. $first_one['more_link'].'</p>
                    </div>
                  </div>
                </div>
              </div>';
			  $total=0;
			foreach($featured as $featured_item){
	            if(($total>1)&&($total<6)){
			$i++;
	           	print '<div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#'.$i.'">
                      '.$featured_item['title'].'<i class="icon-chevron-sign-down"></i>
                    </a>
                  </div>
                  <div id="'.$i.'" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
			<p>'.$featured_item['description'].'<br />'. $first_one['more_link'].'</p>
                    </div>
                  </div>
                </div>
              </div>';
			  
			  }
			  $total++;
			  }
}
			  ?>

		  	<br /><br />
			<div class="row-header"><h4>Feed Filters</h4></div>
			<script>        
					                  
                function filter_feed(section) {
                	document.getElementById("filtered").innerHTML = "";
                	document.getElementById("chev0").style.display='none';
                	document.getElementById("chev1").style.display='none';
					document.getElementById("chev2").style.display='none';
					document.getElementById("chev3").style.display='none';
										document.getElementById("chev"+section).style.display='block';
                   var file = "<?php echo base_url();?>index.php/frontpage_controller/filter_feed";
				
				  var request =  get_XmlHttp();
				  document.getElementById("filtered").innerHTML = "";
				 
				  var the_data = 'section='+section;
				  request.open("POST", file, true);
					
				  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				  request.send(the_data);
				  document.getElementById("filtered").innerHTML = "<div style='text-align:center'><img src='<?php echo base_url();?>assets/img/preloader.gif'></div>";	
				  request.onreadystatechange = function() {
					
				  if (request.readyState == 4) {
				      document.getElementById("filtered").innerHTML = request.responseText;
				    }
				  }
                }
             
        </script>
			<table class="table table-striped feed-filters">
				<tbody>
					<tr>
						<td><a onclick="filter_feed(0);">Latest</a><i class="icon-chevron-right" id="chev0"></i></td>
					</tr>
					<tr>
						<td><a onclick="filter_feed(1);">Features</a><i class="icon-chevron-right" id="chev1"></i></td>
					</tr>
					<tr>
						<td><a onclick="filter_feed(2);">Opinion</a><i class="icon-chevron-right" id="chev2"></i></td>
					</tr>
					<tr>
						<td><a onclick="filter_feed(3);">News</a><i class="icon-chevron-right" id="chev3"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<script>
		document.getElementById("chev1").style.display='none';
		document.getElementById("chev2").style.display='none';
		document.getElementById("chev3").style.display='none';		
		</script>
		<div class="span6 newsfeed" id="filtered">
			<div class="row-header"><h3>Other Health News</h3></div>
			<h6>A round-up of the all the latest health news from theStar <i class="icon-arrow-down" style="margin-left: 10px"></i></h6>
			<br />
			<?php
			
			$items=0;
			  	foreach($more_news as $item){
			  		if($items<6){

					
			  		print "<h4>".$item['link']."</h4>";
					print "<div style='text-align:justify'>".$item['description']."</div><br />";				


						print '<div class="article-meta">Posted '.$item['timestamp'].' | '; print ucwords(strtolower($item['author'])); 
print ' | Posted under '.implode(', ', $item['tags']); 
					print '</div>';
					print "<hr />";

					$items++;
					
					}
			  	}
				?>
		</div>
		<div class="span3 sidebar_widget2">
			<div class="row-header"><h4>App Store</h4></div>
			<p>Download the Star's mobile Apps, eBooks, and other tools.</p>
			<a href="https://play.google.com/store/apps/details?id=dk.i2m.mobile.starreports" target="_blank"><img src="<?php echo base_url()?>assets/img/android-icon.png"></a>
			<hr />
			<a href="http://code4kenya.org" target="_blank"><img style="height: 80px" src="<?php echo base_url();?>assets/img/c4k_logo.png" id="c4k_partner"></a>
			<br />
			The data driven journalism + tools in StarHealth section were kickstarted by Code4Kenya
			<hr />
			<a href="http://github.com/CodeForAfrica"><img src="<?php echo base_url(); ?>assets/img/GitHub-Mark-32px.png" id="cfa_icon"></a>
			<a href="http://data.the-star.co.ke"><img style="height:32px;margin-left:25px" src="<?php echo base_url(); ?>assets/img/github.png" id="ckan_icon"></a>
			<p>The code & data for this page are open source. You can re-use it by visiting the above repositories.</p>
			<br />
			<br />
			<div class="row-header"><h4>Stay in Touch</h4></div>
			<div class="social_media_icons">
				<img src="<?php echo base_url();?>assets/img/facebook.png" style="height:32px;width:32px">
				<a href="https://twitter.com/TheStarKenya"><img src="<?php echo base_url();?>assets/img/twitter.png" style="height:32px;width:32px"></a>
				<img src="<?php echo base_url();?>assets/img/rss.png" style="height:32px;width:32px">
			</div>
			<!-- <a class="twitter-timeline" href="https://twitter.com/TheStarKenya" data-widget-id="336091571755827200">Tweets by @TheStarKenya</a> -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
	</div>
</div>