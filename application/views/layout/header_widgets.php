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
			<script>
					function get_XmlHttp() {
	 
				  var xmlHttp = null;
			
				  if(window.XMLHttpRequest) {	
					xmlHttp = new XMLHttpRequest();
				  }
				  else if(window.ActiveXObject) {
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
			
				return xmlHttp;
				}
				
				function ajaxrequest(file) {
				  var request =  get_XmlHttp();
				  document.getElementById("mybox").innerHTML = "";
				  document.getElementById("loading").style.display = 'block';
				  var the_data = 'name='+document.getElementById("course").value;
				  request.open("POST", file, true);
					
				  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				  request.send(the_data);
				  
				  request.onreadystatechange = function() {
				  if (request.readyState == 4) {
				      document.getElementById("mybox").innerHTML = request.responseText;
					  document.getElementById("loading").style.display='none';
				    }
				  }
				
				}
				function specialists_request(file){
					var request = get_XmlHttp();
					document.getElementById("mybox").innerHTML = "";
					document.getElementById("loading").style.display = 'block';
					var the_data = 'name='+document.getElementById("specialist").value;
					request.open("POST", file, true);
						
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.send(the_data);
					  
					request.onreadystatechange = function() {
					if (request.readyState == 4) {
					      document.getElementById("mybox").innerHTML = request.responseText;
						  document.getElementById("loading").style.display='none';
					    }
					  }
				}
				function nhif(file){
					var request = get_XmlHttp();
					document.getElementById("mybox").innerHTML = "";
					document.getElementById("loading").style.display = 'block';
					var the_data = 'amount='+document.getElementById("nhif").value;
					request.open("POST", file, true);
						
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.send(the_data);
					  
					request.onreadystatechange = function() {
					if (request.readyState == 4) {
					      document.getElementById("mybox").innerHTML = request.responseText;
						  document.getElementById("loading").style.display='none';
					    }
					  }
				}
				function filter_location(facility){
					var request = get_XmlHttp();
					var file = "<?php echo base_url();?>index.php/facilities/filter_county";
					var county = document.getElementById('county').selectedOptions[0].text;
										
					document.getElementById("mybox").innerHTML = "";
					document.getElementById("loading").style.display = 'block';
					
					var the_data = "name="+facility+"&county="+county;
					//var the_data = "name=1&county=2";
					request.open("POST", file, true);
						
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.send(the_data);
					  
					request.onreadystatechange = function() {
					if (request.readyState == 4) {
					      document.getElementById("mybox").innerHTML = request.responseText;
						  document.getElementById("loading").style.display='none';
					    }
					  }
				}
				function filter_town(amount){
					var request = get_XmlHttp();
					var file = "<?php echo base_url();?>index.php/nhif/filter_town";
					var county = document.getElementById('town').selectedOptions[0].text;
										
					document.getElementById("mybox").innerHTML = "";
					document.getElementById("loading").style.display = 'block';
					
					var the_data = "amount="+amount+"&town="+county;
					//var the_data = "name=1&county=2";
					request.open("POST", file, true);
						
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.send(the_data);
					  
					request.onreadystatechange = function() {
					if (request.readyState == 4) {
					      document.getElementById("mybox").innerHTML = request.responseText;
						  document.getElementById("loading").style.display='none';
					    }
					  }
				}
				</script>
				<button class='btn add-on' href="#myModal" role="button" class="btn" data-toggle="modal" onclick="ajaxrequest('<?php echo base_url();?>index.php/dodgy/search')">
        			<i class="icon-search"></i>
    			</button>
			
          	</div>
          	
			<!-- Modal -->
			<div id="myModal" style="text-align:justify !important;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel"></h3>
			  </div>
			  <div class="modal-body">
			    <p>
			    	<div class="loading" style="text-align:center" id="loading">
			    		<img src="<?php echo base_url();?>assets/img/indicator.gif">
					</div>			
					<div id="mybox">
             
        			</div>    	
			    </p>
			  </div>
			  <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			 
			  </div>
			</div>
		</div>
		<div class="span3 header_widget">
		<h4>Am I Covered</h4>
		<div class="description">Can you afford the treatment? Check if NHIF will cover the costs</div>
		 <div class="search_menu input-append">
          	<input type="text" placeholder="search" class="search" id="nhif">
          	<button class='btn add-on' href="#myModal" role="button" class="btn" data-toggle="modal" onclick="nhif('<?php echo base_url();?>index.php/nhif')">
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
		 	<script type="text/javascript">
			$().ready(function() {
				$("#specialist").autocomplete("<?php echo base_url();?>/index.php/facilities/data", {
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
          	<input type="text" placeholder="search" class="specialist" id="specialist">
          	<button class='btn add-on' href="#myModal" role="button" class="btn" data-toggle="modal" onclick="specialists_request('<?php echo base_url();?>index.php/facilities/search')">
        				<i class="icon-search"></i>
    		</button>
          	</div>
		</div>
	</div>
</div>
