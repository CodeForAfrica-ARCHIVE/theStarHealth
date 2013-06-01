<div class="container" style="margin-top: 5px; margin-bottom: 5px;">
	<div class="row-fluid">
		<div class="span3">
			<div class="sidebar_widget row-header">
				<h4>Backstory</h4>
			</div>
			<div class="sidebar_widget down">
				<h5>The story so far</h5>
				<?php
					function first_paragraph($content) {

						$pos = strpos($content, '[p]');
						return substr($content, 0, $pos);
					   
					}
					$description = first_paragraph($news[0]['content']);
                	print "<a href='".base_url()."index.php/article?id=".$news[0]['id']."'>".$news[0]['title']."</a><br/>";
					//print $description;
				  ?>
			</div>
			<div class="sidebar_widget bottom">
				<h5>Evidence Dossier</h5>
				<a href="http://data.the-star.co.ke">Data repository</a>
			</div>
		</div>
		<div class="span6">
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
                <div class="carousel-inner">
                	
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
		<div class="span3">
			<div class="sidebar_widget row-header">
				<h4>Help Desk</h4>
			</div>
			<div class="sidebar_widget down">
				<h5>Help lines</h5>
				<p>Kenya Police</p>
				<p>
					<i class="icon-phone icon-2x" style="margin-right:5px"></i> 
					<a class="helpline" href="tel:053801053">053801053</a></p>
				<p><a href="http://www.medicalboard.co.ke/">Kenya Medical Board</a></p>
				<p>
					<i class="icon-phone icon-2x" style="margin-right:5px"></i> 
					<a class="helpline" href="tel:+254 20 2724938"> +254 20 2724938</a></p>
				<p><a href="http://www.publichealth.go.ke/">Ministry of Health</a></p>
				<p>
					<i class="icon-phone icon-2x" style="margin-right:5px"></i>
					<a class="helpline" href="tel:+254 20 2717077"> +254 20 2717077</a></p>
				<p><a href="http://www.nckenya.com/">Nursing Council of Kenya</a></p>
				<p>
					<i class="icon-phone icon-2x" style="margin-right:5px"></i> 
					<a class="helpline" href="tel:+254 20 3873556">+254 20 3873556</a></p>
			</div>
		</div>
	</div>
	<div class="row-fluid" style="min-height:600px;">
		<div class="span3 sidebar_widget2">
			<div class="row-header"><h4>Major Stories</h4></div>
				<div class="stories">
					<h5>Headline</h5>
					<img src="<?php echo base_url()?>assets/img/star_reports.png" style="float:right;margin:2px">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<br />
				<div class="stories">
					<h5>Headline</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			<br />
			<div class="row-header"><h4>Feed Filters</h4></div>
			<table class="table table-striped" data-provides="rowlink">
				<tbody>
					<tr>
						<td><a href="<?php echo base_url();?>">All</a><?php if(isset($_GET['cat'])&&($_GET['cat'])!=0){} else{ print '<i class="icon-chevron-right" style="float:right"></i>';}?></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url();?>?cat=1">Latest</a><?php if(isset($_GET['cat'])&&($_GET['cat'])==1){ print '<i class="icon-chevron-right" style="float:right"></i>';}?></i></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url();?>?cat=2">Features</a><?php if(isset($_GET['cat'])&&($_GET['cat'])==2){ print '<i class="icon-chevron-right" style="float:right"></i>';}?></i></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url();?>?cat=3">Opinion</a><?php if(isset($_GET['cat'])&&($_GET['cat'])==3){ print '<i class="icon-chevron-right" style="float:right"></i>';}?></i></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url();?>?cat=4">News</a><?php if(isset($_GET['cat'])&&($_GET['cat'])==4){ print '<i class="icon-chevron-right" style="float:right"></i>';}?></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="span6 newsfeed">
			<div class="row-header"><h3>Other Health News</h3></div>
			<h6>A round-up of the all the latest health news from theStar <i class="icon-arrow-down" style="margin-left: 10px"></i></h6>
			<br />
			<?php
			
			$items=0;
			  	foreach($more_news as $item){
			  		if($items<6){
					//timeplay
					$days = floor($item['TimeSpent'] / (60 * 60 * 24)); 
					
					$remainder = $item['TimeSpent'] % (60 * 60 * 24);
					$hours = floor($remainder / (60 * 60));
					$remainder = $remainder % (60 * 60);
					$minutes = floor($remainder / 60);
					$seconds = $remainder % 60;

					if($days > 0) {
					//$oldLocale = setlocale(LC_TIME, 'pt_BR');
					$item['timestamp'] = strftime("%b %#d %Y", $item['timestamp']);
					$lapse = $item['timestamp'];
					// setlocale(LC_TIME, $oldLocale);
					}
						
					elseif($days == 0 && $hours == 0 && $minutes == 0)
					$lapse .= "few seconds ago";						
					elseif($hours)
					$lapse .=  $hours.' hours ago';
					elseif($days == 0 && $hours == 0)
					$lapse .=  $minutes.' minutes ago';
					else
					$lapse .=  "few seconds ago";
					//end timeplay

					$description = first_paragraph($item['content']);

					print "<style type='text/css'>div#share-popup".$items." {
						
						position: absolute;
						max-width: 200px;
						padding: 10px;
						background: grey;
						font-size: 12px;
					}	</style>";
					print "<script>
					$('body').click(function(){
$('div#share-popup".$items."').hide();
});
					$(function() {
					  $('a#share-trigger".$items."').hover(function() {
						$('div#share-popup".$items."').show();
						}, function() {
						$('div#share-popup".$items."').show();
					  });
					});</script>";
					
					
			  		print "<h4><a href='".base_url()."index.php/article?id=".$item['id']."'>".$item['title']."</a></h4>";
					print "<p href='".base_url()."index.php/article?id=".$item['id']."'>".$description."</p><br />";
					print '<div style="font-size:0.8em;color:#24408F;font-weight:bold">Posted '.$lapse.'&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Category: <a href="'.base_url().'index.php/archive?cat='.$item['cat_id'].'">'.$item['cat_name'].'</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a id="share-trigger'.$items.'">Share<i class="icon-share"></i></a>';
					print "<div id='share-popup".$items."' style='display:inline'>
					<script>
					$(function() {
					$('div#share-popup".$items."').hide();
					});
					</script>";
					?>
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo base_url()."index.php/article?id=".$item['id'];?>" data-via="the-star">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>			
					<?php 
					print "</div>";
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
			<a href="http://github.com/CodeForAfrica"><img src="<?php echo base_url(); ?>assets/img/GitHub-Mark-32px.png" id="github_icon"></a>
			<a href="http://github.com/ckan"><img style="height:32px;margin-left:25px" src="<?php echo base_url(); ?>assets/img/ckan.jpeg" id="ckan_icon"></a>
			<p>The code & data for this page are open source. You can re-use it by visiting the above repositories.</p>
			<br />
			<br />
			<div class="row-header"><h4>Stay in Touch</h4></div>
			<div class="social_media_icons">
				<img src="<?php echo base_url();?>assets/icons/facebook.png">
				<a href="https://twitter.com/TheStarKenya"><img src="<?php echo base_url();?>assets/icons/twitter.png"></a>
				<img src="<?php echo base_url();?>assets/icons/rss.png">
			</div>
			<!-- <a class="twitter-timeline" href="https://twitter.com/TheStarKenya" data-widget-id="336091571755827200">Tweets by @TheStarKenya</a> -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
	</div>
</div>