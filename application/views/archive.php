<div class="container">
	<div class="row-fluid">
           	  <div class="newsfeed">
			<?php
				function first_paragraph($content) {

						$pos = strpos($content, '[p]');
						return substr($content, 0, $pos);
					   
					}
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
					print "<div style='text-align:justify;'><a href='".base_url()."index.php/article?id=".$item['id']."'>".$description."</a></div><br />";
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
            </div>
</div>