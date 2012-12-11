<div style="padding-left:10px;padding-right:10px;padding-top:10px;height:300px;">
<h4 align='center'>Is your Doctor a Registered Practitioner</h4><br>
<link rel="stylesheet" href="<?php echo $home2?>apps/jquery_autocomplete/style.css" type="text/css" media="all">
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
 
$(document).ready(function(){
	var ac_config = {
		source: "<?php echo $home2?>apps/jquery_autocomplete/data.php",
		select: function(event, ui){
		   $("#city").val(ui.item.city);
			$("#reg").val(ui.item.reg);
			$("#zip").val(ui.item.zip);
		  $("#state").val(ui.item.state);
			
			
		},
		minLength:1
	};
	$("#city").autocomplete(ac_config);
});
</script>
<form action="#" method="post">
	 <table class="table table-striped" width="100%"><tbody><tr><td>
		 <input placeholder='name' aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="ui-autocomplete-input" name="city" id="city" value="" style="width:90%" type="text"></td></tr>
		<tr><td>
		 <input placeholder='qualification' name="state" id="state" value="" disabled="disabled" style="width:90%" type="text"></td></tr>
		<tr><td>
	 	 <input placeholder='specialty' name="zip" id="zip" value="" disabled="disabled" style="width:90%" type="text"></td></tr>
		 <tr><td>
	 	 <input placeholder='registration number' name="reg" id="reg" value="" disabled="disabled" style="width:90%" type="text"></td></tr>
		 </tbody></table>
</form>
<br>


	</div>