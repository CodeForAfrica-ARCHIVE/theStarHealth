<?php
$link = mysql_connect('localhost', 'root', '');
	mysql_select_db('health');
	echo mysql_error($link);
	
	sdf
	$sql = mysql_query("SELECT * FROM sh_bednet WHERE county='Muranga'");
	while($row=mysql_fetch_array($sql))
	{
	$county=$row['county'];
		$sql2 =mysql_query("SELECT * FROM dis1 WHERE county='$county'");
		$speechd=0;
		$hearingd=0;
		$otherd=0;
		$mentald=0;
		$physicald=0;
		$visuald=0;
		$none=0;
		while($row2=mysql_fetch_array($sql2))
		{
		$speechd=$speechd+$row2['speechd'];
		$hearingd=$hearingd+$row2['hearingd'];
		$otherd=$otherd+$row2['otherd'];
		$mentald=$mentald+$row2['mentald'];
		$physicald=$physicald+$row2['physicald'];
		$visuald=$visuald+$row2['visuald'];
		$none=$none+$row2['none'];
		//total
		//$total=$speechd+$hearingd+$otherd+$mentald+$physicald+$visuald+$none;
		//convert to percentages
		//$speechd=$speechd*100/$total;
		//$hearingd=$hearingd*100/$total;
		//$otherd=$otherd*100/$total;
		//$mentald=$mentald*100/$total;
		//$physicald=$physicald*100/$total;
		//$visuald=$visuald*100/$total;
		//$none=$none*100/$total;
		}
	mysql_query("UPDATE sh_bednet SET speechd='$speechd', hearingd='$hearingd', otherd='$otherd', mentald='$mentald', physicald='$physicald', visuald='$visuald', none='$none' WHERE county='$county'");
	}
?>