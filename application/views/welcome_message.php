<div class="container">
	<div class="row-fluid">
		<div class="span3">
			<div class="sidebar_widget">
				<h4>Backstory</h4>
			</div>
			<div class="sidebar_widget down">
				<h5>The story so far</h5>
				<?php
				$description = substr($news[0]['content'], 0, 200).'... ';
                		print "<a href='".base_url()."index.php/article?id=".$news[0]['id']."'>".$news[0]['title']."</a><br/>";
				  ?>
			</div>
			<div class="sidebar_widget bottom">
				<h5>Evidence Dossier</h5>
				<a href="http://data.the-star.co.ke">Ckan</a>
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
                	$description = substr($news[0]['content'], 0, 200).'... ';
                		print '<div class="item active"><img src="'.base_url().'assets/thumbs/'.$news[0]['thumb'].'" alt="">
                    <div class="carousel-caption">
                      <h4><a href="'.base_url().'index.php/article?id='.$news[0]['id'].'">'.$news[0]['title'].'</a></h4>
                      <p><a href="'.base_url().'index.php/article?id='.$news[0]['id'].'">'.$description.'</a></p>
                    </div>
                  </div>';
				  	$item = 0;
						$item++;
						$total = 0;
                		foreach($news as $news_item){
	                		if($total>0){
	           			$description = substr($news_item['content'], 0, 200).'... ';
                		print '<div class="item"><img src="'.base_url().'assets/thumbs/'.$news_item['thumb'].'" alt="">
                    <div class="carousel-caption">
                      <h4>'.$news_item['title'].'</h4>
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
			<div class="sidebar_widget">
				<h4>Help Desk</h4>
			</div>
			<div class="sidebar_widget down">
				<h5>Help lines</h5>
				Kenya police - 053801053<br />
				<a href="http://www.medicalboard.co.ke/">Kenya Medical Board</a> - +254 20 2724938<br />
				<a href="http://www.publichealth.go.ke/">Ministry of Health</a> - +254-20-2717077<br />
				<a href="http://www.nckenya.com/">Nursing Council of Kenya</a> - +254 20 3873556
			</div>
			<div class="sidebar_widget bottom">
				<h5>Other Resources</h5>
			</div>
		</div>
	</div>
	<div class="row-fluid" style="height:600px;">
		<div class="span3 sidebar_widget2">
			<a href="http://code4kenya.org" target="_blank"><img src="<?php echo base_url();?>assets/img/c4k_logo.png" id="c4k_partner"></a>
			<br />
			<br />
			The data driven journalism + tools in StarHealth section were kickstarted by Code4Kenya
			<hr />
			Feed Filters
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
			<h3>Story Feed</h3>
			<?php
			$items=0;
			  	foreach($more_news as $item){
			  		if($items<6){
			  		$description = substr($item['content'], 0, 100).'... ';
			  		print "<strong><a href='".base_url()."index.php/article?id=".$item['id']."'>".$item['title']."</a></strong><br />";
					print "<a href='".base_url()."index.php/article?id=".$item['id']."'>".$description."</a><br />";
					$items++;
					}
			  	}
				?>
		</div>
		<div class="span3 sidebar_widget2">
			<h4>The Star App Store</h4>
			<a href="https://play.google.com/store/apps/details?id=dk.i2m.mobile.starreports" target="_blank"><img src="<?php echo base_url()?>assets/img/star_reports.png" width="30px"></a>
			<h4>Stay in Touch</h4>
			<hr />
			<div class="social_media_icons">
				<img src="<?php echo base_url();?>assets/icons/facebook.png">
				<img src="<?php echo base_url();?>assets/icons/twitter.png">
				<img src="<?php echo base_url();?>assets/icons/rss.png">
			</div>
			<hr />
			<a class="twitter-timeline" href="https://twitter.com/TheStarKenya" data-widget-id="336091571755827200">Tweets by @TheStarKenya</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
	</div>
</div>