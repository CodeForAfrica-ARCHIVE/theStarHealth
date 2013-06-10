	<div class="row-header"><h3><?php print "$title";?></h3></div>
			<h6><i class="icon-arrow-down" style="margin-left: 10px"></i></h6>
			<br />
			<?php
					function first_paragraph($content) {

						$pos = strpos($content, '[p]');
						return substr($content, 0, $pos);
					   
					}
			$items=0;
			  	foreach($filtered_feed as $item){
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
						margin-left: 5px;
						padding-top: 10px;
						padding-left: 5px;
						padding-right:5px;
						padding-bottom: 5px;
						background: #fefefe;
						border: 1px #d1d1d1 solid;
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
						$('div#share-popup".$items."').hide();
					  });
					});</script>";
					
			  		print "<h4><a href='".base_url()."index.php/article?id=".$item['id']."'>".$item['title']."</a></h4>";
					print "<p href='".base_url()."index.php/article?id=".$item['id']."'>".$description."</p><br />";
					print '<div class="article-meta">Posted '.$lapse.'&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Category: <a href="'.base_url().'index.php/archive?cat='.$item['cat_id'].'">'.$item['cat_name'].'</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a id="share-trigger'.$items.'">Share<i class="icon-share-alt" style="margin-left: 5px"></i></a>';
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