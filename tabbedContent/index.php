	<script type='text/javascript' src='<?php echo $home?>js/jquery.js'></script>
		
		<link href='<?php echo $home?>tabbedContent/css/tabbedContent.css' rel='stylesheet' type='text/css' />
		<script src="<?php echo $home?>tabbedContent/js/tabbedContent.js" type="text/javascript"></script>
	<style type='text/css'>
	ul li{
	list-style:none;
	}
	</style>
	<div class='tabbed_content'>
					<div class='tabs'>
						<div class='moving_bg'>
							&nbsp;
						</div>
						<span class='tab_item'>
							Health News						</span>
						<span class='tab_item'>
							Headlines						</span>
						<span class='tab_item'>
							County News						</span>
						
					</div>
					
					<div class='slide_content'>						
						<div class='tabslider'>
							<ul>
								<table style='width:100%;margin-top:-30px;border:5px;' class='zebra-striped'>
								<tbody>
								<style type='text/css'>
								td{
								padding:5px;
								
								}
								.modal{
								color:#000;
								}
								</style>
								<?php
								//show news in headline category
								$sql = mysql_query("SELECT * FROM news WHERE health='1' ORDER BY id Desc LIMIT 4");
								while($row = mysql_fetch_array($sql))
								{
								echo "<li><tr>
								
									<td><a href=\"#myModal".$row['id']."\" role=\"button\" data-toggle=\"modal\"><img src='images/".$row['thumb']."' width='60px' style='border:2px solid #fff'></a></td><td><a href=\"#myModal".$row['id']."\" role=\"button\" data-toggle=\"modal\">".$row['title']."</a>
								</td></tr>
								</li>";
								echo '<div id="myModal'.$row['id'].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel">'.$row['title'].'</h3>
  </div>
  <div class="modal-body">
    <p><img src="images/'.$row['thumb'].'" width="160px" style="border:2px solid #fff;float:left">'.$row['content'].'</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    
  </div>
</div>';
								}
								
								
								?>
								</tbody>
								</table>
							</ul>
							<ul>
								<table style='width:100%;margin-top:-30px;' class='zebra-stripped'>
							
								<?php
								//show news in headline category
								$sql = mysql_query("SELECT * FROM news WHERE latest='1' ORDER BY id Desc LIMIT 4");
								while($row = mysql_fetch_array($sql))
								{
									echo "<li><tr>
								
									<td><a href=\"#myModal".$row['id']."\" role=\"button\" data-toggle=\"modal\"><img src='images/".$row['thumb']."' width='60px' style='border:2px solid #fff'></a></td><td><a href=\"#myModal".$row['id']."\" role=\"button\" data-toggle=\"modal\">".$row['title']."</a>
								</td></tr>
								</li>";
								echo '<div id="myModal'.$row['id'].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel">'.$row['title'].'</h3>
  </div>
  <div class="modal-body">
    <p><img src="images/'.$row['thumb'].'" width="160px" style="border:2px solid #fff;float:left">'.$row['content'].'</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
   
  </div>
</div>';
								}
								
								?>
								
								</table>
							</ul>
							<ul>
								<table style='width:100%;margin-top:0px;' class='zebra-stripped'>
							
								<?php
								//show news in headline category
								$sql = mysql_query("SELECT * FROM news WHERE county='1' ORDER BY id Desc LIMIT 4");
								while($row = mysql_fetch_array($sql))
								{
									echo "<li><tr>
								
									<td><a href=\"#myModal".$row['id']."\" role=\"button\" data-toggle=\"modal\"><img src='images/".$row['thumb']."' width='60px' style='border:2px solid #fff'></a></td><td><a href=\"#myModal".$row['id']."\" role=\"button\" data-toggle=\"modal\">".$row['title']."</a>
								</td></tr>
								</li>";
								echo '<div id="myModal'.$row['id'].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel">'.$row['title'].'</h3>
  </div>
  <div class="modal-body">
    <p><img src="images/'.$row['thumb'].'" width="160px" style="border:2px solid #fff;float:left">'.$row['content'].'</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
   
  </div>
</div>';
								}
								
								
								?>
								</table>
							</ul>
							
						</div>
						<br style='clear: both' />
					</div>
				</div>
			