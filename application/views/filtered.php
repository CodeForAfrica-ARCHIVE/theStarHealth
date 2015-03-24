	<div class="row-header"><h4><?php print "$title";?></h4></div>
			<h6><?php if($title=="Other Health News"){print "A round-up of the all the latest health news from theStar";}?><i class="icon-arrow-down" style="margin-left: 10px"></i></h6>
			<br />
			<?php
			
			$items=0;
			  	foreach($filtered_feed as $item){


			  		print "<h4><a href='".$item['link']."' target=''>".$item['title']."</a></h4>";
				if($item['thumb']!=null){
						print "<img src='".$item['thumb']."' style='width:100px;float:left; margin:10px'><br />";
					}
					print "<div style='text-align:justify'>".$item['description']."</div><br />";				


					print '<div class="article-meta">Posted '.$item['timestamp'].' | '; print ucwords(strtolower($item['author'])); 
//print ' | Posted under '.$item['tags'];
					print '</div>';
					print "<hr />";

					$items++;
					

			  	}
				?>
