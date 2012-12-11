<script type="text/javascript">
<!--
// create the XMLHttpRequest object, according browser
function get_XmlHttp() {
  // create the variable that will contain the instance of the XMLHttpRequest object (initially with null value)
  var xmlHttp = null;

  if(window.XMLHttpRequest) {		// for Forefox, IE7+, Opera, Safari, ...
    xmlHttp = new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {	// for Internet Explorer 5 or 6
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  return xmlHttp;
}

// sends data to a php file, via POST, and displays the received answer
function ajaxrequest(php_file, tagID, formstuff, loading) {
  var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance
  document.getElementById("loading").style.display = 'block';
  document.getElementById("formstuff").style.display = 'none';
  document.getElementById("context").style.display = 'block';
  document.getElementById(tagID).innerHTML = '';
  // create pairs index=value with data that must be sent to server
  var  the_data = 'county='+document.getElementById('county').value+'&facility='+document.getElementById('facility').value;

  request.open("POST", php_file, true);			// set the request

  // adds  a header to tell the PHP script to recognize the data as is sent via POST
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(the_data);		// calls the send() method with datas as parameter

  // Check request status
  // If the response is received completely, will be transferred to the HTML tag with tagID
  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      document.getElementById(tagID).innerHTML = request.responseText;
	  document.getElementById(formstuff).style.display='none';
	  document.getElementById(loading).style.display='none';
    }
  }
}
--></script>
<div style="padding-left:10px;padding-right:10px;padding-top:10px;height:300px;">
<h4>What services are provided in my county</h4>

<div id="loading" align='center'>
<img src='img/loader2.gif'>
</div>
<script type="text/javascript">document.getElementById("loading").style.display = 'none';</script>
<div id="context"></div>
<br>
<div id='formstuff'>
<table class="table table-striped" style="width:100%">
<tbody><tr><td>
<select style="width:90%" name="county" id='county'>
<option>Select County</option>
<option value="Baringo">Baringo</option><option value="Bomet">Bomet</option><option value="Bungoma">Bungoma</option><option value="Busia">Busia</option><option value="Elgeyo/Marakwet">Elgeyo/Marakwet</option><option value="Embu">Embu</option><option value="Garissa">Garissa</option><option value="Homa Bay">Homa Bay</option><option value="Isiolo">Isiolo</option><option value="Kajiado">Kajiado</option><option value="Kakamega">Kakamega</option><option value="Kericho">Kericho</option><option value="Kiambu">Kiambu</option><option value="Kilifi">Kilifi</option><option value="Kirinyaga">Kirinyaga</option><option value="Kisii">Kisii</option><option value="Kisumu">Kisumu</option><option value="Kitui">Kitui</option><option value="Kwale">Kwale</option><option value="Laikipia">Laikipia</option><option value="Lamu">Lamu</option><option value="Machakos">Machakos</option><option value="Makueni">Makueni</option><option value="Mandera">Mandera</option><option value="Marsabit">Marsabit</option><option value="Meru">Meru</option><option value="Migori">Migori</option><option value="Mombasa">Mombasa</option><option value="Muranga">Muranga</option><option value="Nairobi">Nairobi</option><option value="Nakuru">Nakuru</option><option value="Nandi">Nandi</option><option value="Narok">Narok</option><option value="Nyamira">Nyamira</option><option value="Nyandarua">Nyandarua</option><option value="Nyeri">Nyeri</option><option value="Samburu">Samburu</option><option value="Siaya">Siaya</option><option value="Taita Taveta">Taita Taveta</option><option value="Tana River">Tana River</option><option value="Tharaka Nithi">Tharaka Nithi</option><option value="Trans Nzoia">Trans Nzoia</option><option value="Turkana">Turkana</option><option value="Uasin Gishu">Uasin Gishu</option><option value="Vihiga">Vihiga</option><option value="Wajir">Wajir</option><option value="West Pokot">West Pokot</option><option value="Kenya average">Kenya average</option>
</select>
</td>
</tr>
<tr>
<td><select style="width:90%" name="facility" id='facility'><option>Select facility</option>
<?php
$sql = mysql_query("SELECT * FROM abbr");
while($row=mysql_fetch_array($sql))
{
	echo "<option value='".$row['abbr']."'>".$row['full']."</option>";
}
?>
</select></td>
</tr>
<tr>
<td><input class="btn btn-primary" value="find" name="registered_facilities" type="submit" onclick="ajaxrequest('apps/find_facilities.php', 'context', 'formstuff', 'loading')"></td>
</tr>
</tbody></table>
<br>
</div>

</div>