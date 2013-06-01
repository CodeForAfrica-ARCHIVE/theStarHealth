
<div class="container">
	<div class="row-fluid">
		<div class="span12 newsfeed">
			<h2><?php echo $story['title']?></h2>
			<img src="<?php echo base_url().'assets/thumbs/'.$story['thumb']?>" style="float:left;height:150px;margin-right:10px;margin:bottom:10px">
			<p> <?php echo $story['content'] ?></p>
		</div>
	</div>
</div>