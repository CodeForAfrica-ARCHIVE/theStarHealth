<div class="container" style="margin-top:30px;">
	<div class="row-fluid">
		<div class="span3 header_widget">
		<h4>Dodgy Doctors</h4>
		<div class="description">Check to see if your doctor is registered and free from malpratice</div>
		 <div class="search_menu input-append">
		 	 	<?php
			session_start();
			?>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.autocomplete.css">
			<script type="text/javascript" src="<?php echo base_url();?>assets/ajax-autocomplete/jquery.js"></script>
		
			<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>
		 	<script type="text/javascript">
			$().ready(function() {
				$("#course").autocomplete("<?php echo base_url();?>/index.php/dodgy/data", {
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
					
					<input type="text" placeholder="search" class="search" name="course" id="course" />
					<button class='btn add-on' href="#myModal" role="button" class="btn" data-toggle="modal">
        				<i class="icon-search"></i>
    				</button>
			
          	</div>
          	
			<!-- Modal -->
			<div id="myModal" style="text-align:justify !important;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel">Modal header</h3>
			  </div>
			  <div class="modal-body">
			    <p>One fine body…</p>
			  </div>
			  <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			    <button class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		</div>
		<div class="span3 header_widget">
		<h4>Am I Covered</h4>
		<div class="description">Can you afford the treatment? Check if NHIF will cover the costs</div>
		 <div class="search_menu input-append">
          	<input type="text" placeholder="search" class="search">
          	<button class='btn add-on'>
        		<i class="icon-search"></i>
    		</button>
          	</div>
		</div>
		<div class="span3 header_widget">
		<h4>What Should it Cost?</h4>
		<div class="description">Check to see if you are being overcharged for your prescription medicine</div>
		 <div class="search_menu input-append">
          	<input type="text" placeholder="search" class="search">
          	<button class='btn add-on'>
        		<i class="icon-search"></i>
    		</button>
          	</div>
		</div>
		<div class="span3 header_widget">
		<h4>Nearest Specialist</h4>
		<div class="description">Find the nearest specialist doctor or health facility</div>
		 <div class="search_menu input-append">
          	<input type="text" placeholder="search" class="search">
          	<button class='btn add-on'>
        		<i class="icon-search"></i>
    		</button>
          	</div>
		</div>
	</div>
</div>
