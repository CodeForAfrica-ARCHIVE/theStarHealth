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
function ajaxrequest2(php_file, tagID, formstuff, loading) {
  var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance
  document.getElementById("loading2").style.display = 'block';
  document.getElementById("formstuff2").style.display = 'none';
    document.getElementById("context2").style.display = 'block';
  document.getElementById(tagID).innerHTML = '';
  // create pairs index=value with data that must be sent to server
  var  the_data = 'town='+document.getElementById('town').value+'&min='+document.getElementById('min').value+'&max='+document.getElementById('max').value;
//var min = document.getElementById('min');
//min.options[min.options.0].setAttribute("selected", "selected");
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
<h4>What does my NHIF card cover in my hospital</h4>
<div id="loading2" align='center'>
<img src='img/loader2.gif'>
</div>
<script type="text/javascript">document.getElementById("loading2").style.display = 'none';</script>
<div id="context2"></div>
<br>
<div id='formstuff2'>

	<select style="width:100%" name="town" id='town'>
	<option>Select town</option>
	<option value="NAIROBI">NAIROBI</option><option value="KAWANGWARE">KAWANGWARE</option><option value="KISERIAN">KISERIAN</option><option value="RIRUTA">RIRUTA</option><option value="00606- NAIROBI">00606- NAIROBI</option><option value="KIAMBU">KIAMBU</option><option value="RUARAKA">RUARAKA</option><option value="0010 NAIROBI">0010 NAIROBI</option><option value="DANDORA">DANDORA</option><option value="NAIROBI-00515">NAIROBI-00515</option><option value="BURUBURU">BURUBURU</option><option value="NAIROBI -00100">NAIROBI -00100</option><option value="BURBURU">BURBURU</option><option value="00518-NAIROBI">00518-NAIROBI</option><option value="NAIROBI -00622">NAIROBI -00622</option><option value="503">503</option><option value="00202 - RONGAI">00202 - RONGAI</option><option value="MAGADI">MAGADI</option><option value="RONGAI">RONGAI</option><option value="ONGATA RONGAI">ONGATA RONGAI</option><option value="0051- ONGATA RONGAI">0051- ONGATA RONGAI</option><option value="NGONG">NGONG</option><option value="KIJABE">KIJABE</option><option value="KIKUYU">KIKUYU</option><option value="LIMURU">LIMURU</option><option value="00217 LIMURU">00217 LIMURU</option><option value="00221 LIMURU">00221 LIMURU</option><option value="LUMURU">LUMURU</option><option value="00606 LIMURU">00606 LIMURU</option><option value="TIGONI">TIGONI</option><option value="GITHUNGURI">GITHUNGURI</option><option value="NYAHURURU">NYAHURURU</option><option value="NYERI">NYERI</option><option value="KARATINA">KARATINA</option><option value="KANGEMA">KANGEMA</option><option value="KIRIAINI">KIRIAINI</option><option value="NANYUKI">NANYUKI</option><option value="MURANGA">MURANGA</option><option value="MWEIGA">MWEIGA</option><option value="OL" kalou'="">OL'KALOU</option><option value="OTHAYA">OTHAYA</option><option value="KIWAMBA">KIWAMBA</option><option value="THIKA">THIKA</option><option value="GATUNDU">GATUNDU</option><option value="RUIRU">RUIRU</option><option value="SAGANA">SAGANA</option><option value="MARAGUA">MARAGUA</option><option value="MARALAL">MARALAL</option><option value="WAMBA VIA MARALAL">WAMBA VIA MARALAL</option><option value="ISIOLO">ISIOLO</option><option value="TIMAU">TIMAU</option><option value="MOMBASA">MOMBASA</option><option value="KALOLENI">KALOLENI</option><option value="RABAI">RABAI</option><option value="MTWAPA">MTWAPA</option><option value="KWALE">KWALE</option><option value="WUNDANYI">WUNDANYI</option><option value="TAVETA">TAVETA</option><option value="VOI">VOI</option><option value="MWATATE">MWATATE</option><option value="DIANI BEACH">DIANI BEACH</option><option value="KINANGO">KINANGO</option><option value="LIKONI">LIKONI</option><option value="MSAMBWENI">MSAMBWENI</option><option value="DIANI-MOMBASA">DIANI-MOMBASA</option><option value="UKUNDA">UKUNDA</option><option value="MALINDI">MALINDI</option><option value="HOLA">HOLA</option><option value="KILIFI">KILIFI</option><option value="KIPINI">KIPINI</option><option value="LAMU">LAMU</option><option value="MPEKETONI">MPEKETONI</option><option value="TARASAA">TARASAA</option><option value="EMBU">EMBU</option><option value="KERUGOYA">KERUGOYA</option><option value="WANGURU">WANGURU</option><option value="RUNYENJE" s'="">RUNYENJE'S</option><option value="ISHIARA">ISHIARA</option><option value="KERUGUYA">KERUGUYA</option><option value="SIAKAGO">SIAKAGO</option><option value="RUNYENJES">RUNYENJES</option>	</select>

<select style="width:100%" name="min" id='min'>
<option>Select minimum NHIF rate</option>
<option value="0">0</option>
<option value="500">500</option>
<option value="1000">1000</option>
<option value="1500">1500</option>
<option value="2000">2000</option>
<option value="2500">2500</option>
<option value="3000">3000</option>
<option value="9000">Full</option>
</select>

<select style="width:100%" name="max" id='max'>
<option>Select maximum NHIF rate</option>
<option value="0">0</option>
<option value="500">500</option>
<option value="1000">1000</option>
<option value="1500">1500</option>
<option value="2000">2000</option>
<option value="2500">2500</option>
<option value="3000">3000</option>
<option value="9000">Full</option>
</select>
<br>
<input value="submit" class="btn btn-primary" name="nhif" type="submit" onclick="ajaxrequest2('apps/find_nhif.php', 'context2', 'formstuff2', 'loading2')">
</div>
<div style='font-size:0.8em'>*complete dataset pending. Results based on sample dataset.</div> </div>