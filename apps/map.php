   <?php
   require_once('../config.php');
   ?>
   <link href="../css/bootstrap.min.css" rel="stylesheet">

<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
   <script type="text/javascript" src="../js/jquery.js"></script>
   <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="../apps/clusters/gmap3.min.js"></script> 
    <script type="text/javascript">
	var macDoList = [
<?php

	if(isset($_GET['county']))
	{
	$county=$_GET['county'];
	$sql=mysql_query("SELECT * FROM sh_facilities WHERE Geolocation!='' AND District='$county'");
	}
	else
	{
	$sql=mysql_query("SELECT * FROM sh_facilities WHERE Geolocation!=''");
	}
	$markers=array();
	while($row=mysql_fetch_array($sql))
	{
	$gps=$row['Geolocation'];
	$gps=explode(', ', $gps);
	$lat = str_replace('(', '', $gps[0]);
	$lon = str_replace(')', '', $gps[1]);
	$name=mysql_real_escape_string($row['name']);
	$location = mysql_real_escape_string($row['LOCATION']);
	$sublocation = mysql_real_escape_string($row['Sub-Location']);
	//$details = $name.'Location:'.$location.'Sub-location:'.$sublocation;
	//$name = preg_replace("/[^A-Za-z0-9 ]/", "", $name );
	$markers[]= "{lat:".$lat.",lng:".$lon.",data:{drive:false,zip:".$row['id'].",city:'".$name."'}}";
	}
	
	echo implode(', ', $markers);
  ?>

];
	</script> 
    <style>
      #container{
        position:relative;
        height:300px;
		
      }
      #googleMap{
       
        width: 100%;
        height: 300px;
      }
      .black{
	  color: #000;
		
	  }
      /* cluster */
      .cluster{
      	color: #fff;
		background-color:#000;
      	text-align:center;
      	font-family: Verdana;
      	font-size:12px;
   
      	text-shadow: 0 0 2px #000;
        -moz-text-shadow: 0 0 2px #000;
        -webkit-text-shadow: 0 0 2px #000;
      }
      .cluster-1{
        background: url(../apps/clusters/images/m1.png) no-repeat;
        line-height:50px;
      	width: 50px;
      	height: 50px;
      }
      .cluster-2{
        background: url(../apps/clusters/images/m2.png) no-repeat;
        line-height:60px;
      	width: 60px;
      	height: 60px;
      }
      .cluster-3{
        background: url(../apps/clusters/images/m3.png) no-repeat;
        line-height:70px;
      	width: 70px;
      	height: 70px;
      }
      
      /* infobulle */
      .infobulle{
        overflow: hidden; 
        cursor: default; 
        clear: both; 
        position: relative; 
        height: 34px; 
        padding: 0pt; 
        background-color: #fff;
      
        border: 1px solid #2C2C2C;
      }
      .infobulle .bg{
        font-size:1px;
        height:16px;
        border:0px;
        width:100%;
        padding: 0px;
        margin:0px;
        background-color: #fff;
      }
      .infobulle .text{
        color:#000;
        font-family: Verdana;
        font-size:11px;
        font-weight:bold;
        line-height:25px;
        padding:4px 20px;
        text-shadow:0 -1px 0 #000000;
       
        margin-top: -17px;
      }
      .infobulle.drive .text{
        background: url(../apps/clusters/images/drive.png) no-repeat 2px center;
        padding:4px 20px 4px 36px;
      }
      .arrow{
        position: absolute; 
        left: 45px; 
        height: 0pt; 
        width: 0pt; 
        margin-left: 0pt; 
        border-width: 10px 10px 0pt 0pt; 
        border-color: #2C2C2C transparent transparent; 
        border-style: solid;
      }
      
    </style>
    
    <script type="text/javascript">
    
      $(function(){
      
        $('#googleMap').gmap3(
          {action: 'init',
            options:{
			<?php
			if(isset($_GET['county']))
		{
		$gpsa=mysql_query("SELECT * FROM sh_facilities WHERE Geolocation!='' AND District='$county'");
		
	$gpsb=mysql_fetch_array($gpsa);
	$gps=$gpsb['Geolocation'];

	$gps=explode(', ', $gps);
	$lat = str_replace('(', '', $gps[0]);
	$lon = str_replace(')', '', $gps[1]);
	echo "center:[".$lat.",".$lon."],
	zoom: 9,";
	
		}
	else
		{ 
	echo "center:[0.452,36.75],
	zoom: 7,";
		}
		?>
              
              mapTypeId: google.maps.MapTypeId.TERRAIN
            }
          },
          {action: 'addMarkers',
            radius:100,
            markers: macDoList,
            clusters:{
              // This style will be used for clusters with more than 0 markers
              0: {
                content: '<div class="cluster cluster-1"><span class="black">CLUSTER_COUNT</span></div>',
                width: 53,
                height: 52
              },
              // This style will be used for clusters with more than 20 markers
              20: {
                content: '<div class="cluster cluster-2"><span class="black">CLUSTER_COUNT</span></div>',
                width: 56,
                height: 55
              },
              // This style will be used for clusters with more than 50 markers
              50: {
                content: '<div class="cluster cluster-3"><span class="black">CLUSTER_COUNT</span></div>',
                width: 66,
                height: 65
              }
            },
            marker: {
              options: {
                icon: new google.maps.MarkerImage('http://maps.gstatic.com/mapfiles/icon_green.png')
              },
              events:{  
                mouseover: function(marker, event, data){
                  $(this).gmap3(
                    { action:'clear', name:'overlay'},
                    { action:'addOverlay',
                      latLng: marker.getPosition(),
                      content:  '<div class="infobulle'+(data.drive ? ' drive' : '')+'">' +
                                  '<div class="bg"></div>' +
                                  '<div class="text">' + data.city + ' (' + data.zip + ')</div>' +
                                '</div>' +
                                '<div class="arrow"></div>',
                      offset: {
                        x:-46,
                        y:-73
                      }
                    }
                  );
                },
                mouseout: function(){
                  $(this).gmap3({action:'clear', name:'overlay'});
                }
              }
            }
          }
        );
      });
    </script>  
	<h3>Distribution of health facilities countrywide</h3>
	 <div id="googleMap"></div><br>
<form>
	 <select value='county' style='width:100%' name="URL" onchange="window.location.href= '?county='+this.form.URL.options[this.form.URL.selectedIndex].value">
	 <option>Select County</option>
	 <option value="Nairobi">Nairobi</option>
<option value="Mombasa">Mombasa</option>
<option value="Kisumu">Kisumu</option>
<option value="Nakuru">Nakuru</option>
<option value="Kwale">Kwale</option>
<option value="Kilifi">Kilifi</option>
<option value="Tana River">Tana River</option>
<option value="Lamu">Lamu</option>
<option value="Taita Taveta">Taita/Taveta</option>
<option value="Garissa">Garissa</option>

<option value="Wajir">Wajir</option>
<option value="Mandera">Mandera</option>
<option value="Marsabit">Marsabit</option>
<option value="Isiolo">Isiolo</option>
<option value="Meru">Meru</option>
<option value="Tharaka Nithi">Tharaka-Nithi</option>
<option value="Embu">Embu</option>
<option value="Kitui">Kitui</option>
<option value="Machakos">Machakos</option>

<option value="Makueni">Makueni</option>
<option value="Nyandarua">Nyandarua</option>
<option value="Nyeri">Nyeri</option>
<option value="Kirinyaga">Kirinyaga</option>
<option value="Murang'a">Muranga</option>
<option value="Kiambu">Kiambu</option>
<option value="Turkana">Turkana</option>
<option value="West Pokot">West Pokot</option>
<option value="Samburu">Samburu</option>

<option value="Trans Nzoia">Trans Nzoia</option>
<option value="Uasin Gishu">Uasin Gishu</option>
<option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
<option value="Nandi">Nandi</option>
<option value="Baringo">Baringo</option>
<option value="Laikipia">Laikipia</option>

<option value="Narok">Narok</option>
<option value="Kajiado">Kajiado</option>

<option value="Kericho">Kericho</option>
<option value="Bomet">Bomet</option>
<option value="Kakamega">Kakamega</option>
<option value="Vihiga">Vihiga</option>
<option value="Bungoma">Bungoma</option>
<option value="Busia">Busia</option>
<option value="Siaya">Siaya</option>

<option value="Homa Bay">Homa Bay</option>

<option value="Migori">Migori</option>
<option value="Nyamira">Nyamira</option>
	 </select>
	 </form>