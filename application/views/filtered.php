	<div class="row-header"><h3><?php print "$title";?></h3></div>
			<h6><?php if($title=="Other Health News"){print "A round-up of the all the latest health news from theStar";}?><i class="icon-arrow-down" style="margin-left: 10px"></i></h6>
			<br />
			<?php
			
			$items=0;
			  	foreach($filtered_feed as $item){
			  		if($items<6){

					
			  		print "<h4>".$item['title']."</h4>";
					print "<div style='text-align:justify'>".$item['description']."</div><br />";				


					print '<div class="article-meta">Posted '.$item['timestamp'].' | '; print ucwords(strtolower($item['author'])); 
print ' | Posted under '.implode(', ', $item['tags']);
					print '</div>';
					print "<hr />";

					$items++;
					
					}
			  	}
				?>
