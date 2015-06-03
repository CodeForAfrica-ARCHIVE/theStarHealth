<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?> | StarHealth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo asset("css/bootstrap.css");?>" rel="stylesheet">
    <link href="<?php echo asset("css/bootstrap-responsive.css");?>" rel="stylesheet">
    <link href="<?php echo asset("css/docs.css");?>" rel="stylesheet">
    <link href="<?php echo asset("js/google-code-prettify/prettify.css");?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo asset("css/main.css");?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600' rel='stylesheet' type='text/css'>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src='<?php echo asset("js/html5shiv.js");?>'></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo asset('');?>/ico/apple-touch-icon-144-precomposed.png"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo asset('');?>/ico/starhealth-favicon-144.png">
    <!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo asset('');?>/ico/apple-touch-icon-114-precomposed.png"> -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo asset('');?>/ico/starhealth-favicon-114.png">
    <!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo asset('');?>/ico/apple-touch-icon-72-precomposed.png"> -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo asset('');?>/ico/starhealth-favicon-72.png">
    <!-- <link rel="apple-touch-icon-precomposed" href="<?php echo asset('');?>/ico/apple-touch-icon-57-precomposed.png"> -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo asset('');?>/ico/starhealth-favicon-57.png">
    <!-- <link rel="shortcut icon" href="<?php echo asset('');?>/ico/favicon.png"> -->
    <link rel="shortcut icon" href="<?php echo asset(''); ?>/ico/starhealth-favicon-32.png">
</head>

<body data-spy="scroll">

<div class="container">
    <header id="topbar">
        <div class="container-fluid">
            <div class="region region-top-navigation">
                <div id="block-menu-menu-radiomenu" class="block block-menu block-odd">


                    <div class="content">
                        <ul><li class="first leaf classic-105 mid-1819"><a href="http://www.ustream.tv/channel/classic105-kenya?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">Classic 105</a></li>
                            <li class="leaf east-fm mid-1822"><a href="http://www.ustream.tv/channel/east-fm?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">East fm</a></li>
                            <li class="leaf kiss-100 mid-1818"><a href="http://www.ustream.tv/channel/kiss100-kenya?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">Kiss 100</a></li>
                            <li class="leaf radio-jambo mid-1820"><a href="http://www.ustream.tv/channel/radiojambo-fm?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">Radio Jambo</a></li>
                            <li class="last leaf xfm mid-1821"><a href="http://www.ustream.tv/channel/xfm-kenya?utm_campaign=JPER&amp;utm_medium=FlashPlayer&amp;utm_source=embed" title="" target="_blank">XFM</a></li>
                        </ul>  </div>
                </div>
            </div>
        </div>
    </header>
    <div class="brand_header">
        <div class="row">
            <div class="span6">
                <a class="brand" href="http://starhealth.the-star.co.ke/"><img src="<?php echo asset("img/logo.png");?>"> <img src="<?php echo asset("img/health.png");?>"></a>
            </div>
            <div class="span4" style="float:right;width:280px !important;">

                <div class="date-section">
                    <?php date_default_timezone_set("Africa/Nairobi"); echo date('l, M j<\sup>S</\sup> Y');?>
                </div>
                <div class="input-append">
                    <input type="text" placeholder="Type to search..." class="search" id="main_search">
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $('#main_search').keypress(function (e) {
                                if (e.which == 13) {
                                    $('#site_search_submit').click();
                                    return false;    //<---- Add this line
                                }
                            });

                            $('#site_search_submit').click(function(){

                                if($('#main_search').val().length == 0){
                                    alert('Please enter a search query!');
                                }else{
                                    window.location = "http://the-star.co.ke/search/node/" + $('#main_search').val();
                                }

                            });
                        });
                    </script>

                    <button class="btn add-on red_button" role="button" id="site_search_submit">
                        <i class="icon-search"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<div class="container navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container navigation-main">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/news" target="_blank">News</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/business" target="_blank">Business</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/sports" target="_blank">Sports</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/entertainment" target="_blank">Entertainment</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/opinions" target="_blank">Opinions</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/starlife" target="_blank">StarLife</a>
                    </li>
                    <li class="">
                        <a href="http://starhealth.the-star.co.ke">StarHealth</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/weekend-star" target="_blank">Weekend Star</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--apps-->
<div class="container container-outline header_widgets">
<div class="row-fluid">
<div class="span4 header_widget">
    <i class="icon-user-md icon-2x"></i>
    <h4>Dodgy Doctors</h4>
    <div class="description">Check to see if your doctor is registered, their certified area of practice and whether they are free from malpractice</div>
    <div class="search_menu input-append" style="margin-top:45px;">
        <?php
        session_start();
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo asset("css/jquery.autocomplete.css");?>">
        <script type="text/javascript" src="<?php echo asset("ajax-autocomplete/jquery.js");?>"></script>

        <script type='text/javascript' src="<?php echo asset("js/jquery.autocomplete.js");?>"></script>
        <script type="text/javascript">
            $().ready(function() {
                $("#doctorName").autocomplete("getDoctors", {
                    width: 260,
                    matchContains: true,
                    //mustMatch: true,
                    //minChars: 0,
                    //multiple: true,
                    //highlight: false,
                    //multipleSeparator: ",",
                    selectFirst: false
                });
                $("#grabDetails").click(function(){
                    var name = $("#doctorName").val();

                    $("#dname").html("<h4>Results for: " + name + "</h4>");

                    $("#mybox").html("");

                    $("#loading").show();

                    $.ajax({url:"singleDoctor?q=" + name,success:function(result){
                        $("#doctorName").val("");

                        $("#mybox").html(result);

                        $("#loading").hide();
                    }});
                });
                $("#grabNHIFDetails").click(function(){
                    var min = $("#min").val();
                    var max = $("#max").val();
                    var town = $("#town").val();
                    var ctown = town;

                    if(town == "Select town"){
                        ctown = "all towns";
                    }

                    $("#dname").html("<h4>Coverage in " + ctown + "</h4>");

                    $("#mybox").html("");

                    $("#loading").show();

                    $.ajax({url:"nhifcoverage?min=" + min + "&max=" + max + "&town=" + town,success:function(result){

                        $("#mybox").html(result);

                        $("#loading").hide();
                    }});
                });
                $("#grabSpecialists").click(function(){
                    var specialty = $("#specialist").val();
                    var county = $("#county_s").val();

                    var ccounty = county;
                    var cspecialty = specialty;

                    if(county == "Select county"){
                        ccounty = "all counties";
                    }

                    if(specialty == "Select specialty"){
                        cspecialty = "All specialties"
                    }


                    $("#dname").html("<h4>"+cspecialty+" in " + ccounty + "</h4>");

                    $("#mybox").html("");

                    $("#loading").show();

                    $.ajax({url:"specialty?specialty=" + specialty + "&county=" + county,success:function(result){

                        $("#mybox").html(result);

                        $("#loading").hide();
                    }});
                });
                $(".filter_feed").click(function(){

                    var tag = $(this).attr("data-tag");

                    $("#filtered").html("");

                    $.ajax({url:"filter_feed?tag=" + tag,success:function(result){

                        $("#filtered").html(result);

                        $("#loading").hide();
                    }});

                });

                $("#whatsMyContribution").click(function(){
                    $("#myContribution").html("");
                });

                $("#calculate").click(function(){

                    var income = $("#income").val();

                    if(income == ""){
                        $("#myContribution").html("You did not enter your income!");
                    }else{
                        if(!jQuery.isNumeric(income)){
                            $("#myContribution").html("Only numbers allowed!");
                        }else{
                            //do the calculations
                            var result;

                            if(income<6000){
                                result = "150";
                            }else if(income<8000){
                                result = "300";
                            }else if(income<12000){
                                result = "400";
                            }else if(income<15000){
                                result = "500";
                            }else if(income<20000){
                                result = "600";
                            }else if(income<25000){
                                result = "750";
                            }else if(income<30000){
                                result = "850";
                            }else if(income<35000){
                                result = "900";
                            }else if(income<40000){
                                result = "950";
                            }else if(income<45000){
                                result = "1000";
                            }else if(income<50000){
                                result = "1100";
                            }else if(income<60000){
                                result = "1200";
                            }else if(income<70000){
                                result = "1300";
                            }else if(income<80000){
                                result = "1400";
                            }else if(income<90000){
                                result = "1500";
                            }else if(income<100000){
                                result = "1600";
                            }else{
                                result = "1700";
                            }

                            $("#myContribution").html(result + " KSH per month");
                        }
                    }

                    $("#income").val("")

                });

                jQuery(".near_me").click(initiate_geolocation);
            });
            function initiate_geolocation() {
                $("#hospital_location").css("background", "white url('ajax-autocomplete/indicator.gif') right center no-repeat");
                navigator.geolocation.getCurrentPosition(handle_geolocation_query);
            }

            function handle_geolocation_query(position){
                //Get cordinates on complete
                var autoCords = position.coords.latitude + ',' + position.coords.longitude;

                //make ajax request to reverse geocode coordinates
                $.ajax({url:"reverse_geocode?q=" + autoCords,success:function(result){

                    $("#hospital_location").val(result);

                    //$("#loading_hospitals").hide();
                    $("#hospital_location").css("background", "none");

                }});
            }
        </script>
        <input type="text" placeholder="Start typing doctor's name" class="search" name="course" id="doctorName" />
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

            function specialists_request(file){
                var request = get_XmlHttp();
                document.getElementById("mybox").innerHTML = "";
                var county = document.getElementById("county_s").selectedOptions[0].text;
                var name = document.getElementById("specialist").value;
                document.getElementById("loading").style.display = 'block';
                var the_data = 'name='+name+'&county='+county;
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
                var file = "facilities/filter_county";
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
                var file = "nhif/filter_town";
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
        <button class='btn add-on red_button' href="#myModal" role="button" class="btn" data-toggle="modal" id="grabDetails">
            <i class="icon-search"></i>
        </button>

    </div>

    <!-- Modal -->
    <div id="myModal" style="text-align:justify !important;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="dname"></h3>
        </div>
        <div class="modal-body">
            <p>
            <div class="loading" style="text-align:center" id="loading">
                <img src="<?php echo asset("img/indicator.gif");?>">
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
<div class="span4 header_widget">
    <i class="icon-credit-card icon-2x"></i>
    <h4>Am I Covered</h4>
    <div class="description">Find out which hospitals your NHIF card will cover</div>
    <!--<div class="search_menu input-append">
          	<input type="text" placeholder="Enter NHIF payment" class="search" id="nhif">
          	<button class='btn add-on' href="#myModal" role="button" class="btn" data-toggle="modal" onclick="nhif('nhif')">
        		<i class="icon-search"></i>
    		</button>
          	</div> -->
    <!--
    <input type="text" placeholder="Minimum rate" class="rate" id="min">
    <input type="text" placeholder="Maximum rate" class="rate" id="max">
    -->
    <input type="text" id="hospital_location" placeholder="Eg. Kisumu, Kariobangi" />
    <span class="near_me" style="cursor: pointer; padding:3px;"><i class="icon-location-arrow"></i> <span id="get_location_text" style=""></span></span>

    <br />
    <select id="hospital">
        <option>All hospital types</option>
        <option value="A">Category A: Government Hospitals</option>
        <option value="B">Category B: Private and Mission Hospitals</option>
        <option value="C">Category C: Private Hospitals</option>
    </select>
    <a href="#nhifInfoModal" data-toggle="modal"><i class="icon-question-sign"></i></a>
    <!-- Modal -->
    <div id="nhifInfoModal" style="text-align:justify !important;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4>NHIF has divided the accredited hospitals in to 3 categories:</h4>
        </div>
        <div class="modal-body">
            <p>
            <ul>
                <li><b>Category A - Government Hospitals.</b> Members enjoy full and comprehensive for maternity and medical diseases including surgery. Therefore, if you are a member, you do not pay anything to be admitted.</li>
                <li><b>Category B - Private and Mission.</b> Members get a full comprehensive cover but if surgery is required, the member pays for that.</li>
                <li><b>Category C – Private</b>. NHIF only pays for specified daily benefits and the member pays everything else.</li>
            </ul>
            </p>
        </div>
        <div class="modal-footer">

            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    <button class='btn add-on red_button red_button_round' href="#myModal" role="button" class="btn" data-toggle="modal" id="grabNHIFDetails">
        <i class="icon-search"></i>
    </button>
    <div class="contribution"><a href="#premiumRatesModal" data-toggle="modal" id="whatsMyContribution">What's my contribution?</a></div>
    <!-- Modal -->
    <div id="premiumRatesModal" style="text-align:justify !important;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="dname">Premium Rates</h3>
        </div>
        <div class="modal-body">
            <p>
            Enter your gross income to find out how much you should pay*

            <div class="search_menu input-append">
                <input type="text" name="income" placeholder="Gross income" id="income">
                <button class='btn add-on' id="calculate">
                    <i class="icon-search"></i>
                </button>
            </div>

            <div class="myContribution" id="myContribution">

            </div>
            <div class="self_employed_notification">*Self-employed individuals have a constant rate of KSH 500</div>
            </p>
        </div>
        <div class="modal-footer">

            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
</div>
<!-- <div class="span3 header_widget">
<i class="icon-money icon-4x"></i>
<h4>What Should it Cost?</h4>
<div class="description">Check to see if you are being overcharged for your prescription medicine</div>
 <div class="search_menu input-append">
      <input type="text" placeholder="Enter name of drug" class="search">
      <button class='btn add-on' onClick="alert('Pending dataset. Come back soon!');">
        <i class="icon-search"></i>
    </button>
      </div>
</div> -->
<div class="span4 header_widget">
    <i class="icon-location-arrow icon-2x"></i>
    <h4>Nearest Specialist</h4>
    <div class="description">Find the nearest specialist doctor or health facility</div>
    <div class="search_menu">
        <select id="specialist" class="form-control specialist_select">
            <option>Select specialty</option>
            <?php
            foreach($specialties as $sp){
                print "<option>".$sp."</option>";
            }
            ?>
        </select>
        <select id="county_s">
            <option>Select county</option>
            <?php
            foreach($counties as $county){
                print "<option>".$county."</option>";
            }
            ?>
        </select>
        <button class='btn add-on red_button red_button_round' href="#myModal" role="button" class="btn" data-toggle="modal" id="grabSpecialists">
            <i class="icon-search"></i>
        </button>
    </div>
</div>
</div>
</div>
<!--main content-->

<div class="container container-outline" style="margin-top: 5px; margin-bottom: 5px;">
	<div class="row-fluid">
		<div class="span9">
            <div class="row-fluid">
                <?php
                    print '<h3 class="story_title" style="font-size:2em"><a href="'.$featured[0]['link'].'" target="_blank">'.$featured[0]['title'].'</a></h3>';
                ?>
            </div>
            <div class="row-fluid" style="margin-top: -20px;">
            <div class="span4">
                <div class="sidebar_widget down backstory">
                    <?php
                        //print "<img src='".public_path()."/thumbs/".$news[0]['sofar_thumbnail']."' width='100%'>";
                        print $overview;
                    ?>
                    <h5>The story so far</h5>
                    <?php
                        print "<ul>";
                        $i = 0;
                        foreach($sofar as $id=>$item){
                            if($i<3)
                                print '<li><a href="'.$item['link'].'" target="_blank">'.$item['title'].'</a></li>';
                            $i++;
                        }

                        print "</ul>";

                    ?>
                </div>
                <br />
                <div class="sidebar_widget bottom evidence">
                    <h5>Evidence Dossier</h5>
                    <a href="http://africaopendata.org/dataset?q=kenya+health">Data repository</a>
                </div>
            </div>
            <div class="span8">
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <?php
                        //TODO: Show multiple featured stories + accompanying back stories
                        $item = 0;
                        print '<li data-target="#myCarousel" data-slide-to="'.$item.'" class="active"></li>';
                        $item++;
                        $total = 0;
                        foreach($featured as $news_label){
                            if($total>0){
                                //print '<li data-target="#myCarousel" data-slide-to="'.$item.'" class=""></li>';
                                $item++;
                            }
                            $total++;
                        }
                        ?>
                    </ol>
                    <div class="carousel-inner" align="center" style="background-color:#000">

                        <?php
                        $thumb = str_replace("http://the-star.co.ke", "http://www.the-star.co.ke", $featured[0]['thumb']);
                        print '<div class="item active"><img src="'.$thumb.'" alt="">

				                    <div class="carousel-caption style="display:none;"">
				                      <h6><a href="'.$featured[0]['link'].'" target="_blank">'.$featured[0]['title'].'</a></h6>

				                    </div>
				                </div>';
                        $item = 0;
                        $item++;
                        $total = 0;
                        foreach($featured as $news_item){
                            if($total>0){
                                /*print '<div class="item"><img src="'.$news_item['thumb'].'" alt="">
                                            <div class="carousel-caption">
                                              <h6>'.$news_item['title'].'</h6>
                                            </div>
                                         </div>';*/
                                $item++;

                            }
                            $total++;
                        }
                        ?>

                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                </div>
                <div style="text-align: center;font-size: 0.9em">
                    <a href="http://www.the-star.co.ke/section/contact-details" target="_blank"><strong>Tell us more</strong><br/>Do you have more information? Help us improve this story by sharing your experiences/evidence.</a>
                </div>
            </div>
                </div>
		</div>

		<div class="span3" style='float:right'>

			<div class="sidebar_widget down helpline">
				<?php
				//if(count($helplines)>0){
                    print '<div class="widget_body"><div class="row-header"><h4><i class="icon-phone icon-2x" style="margin-right:5px"></i>Help Lines</h4></div>';

					foreach($helplines as $k=>$v){
                        print "<p><a href='tel:".$v."'>".$k." (".$v.")</a></p>";
				    }

                    if(count($helplines)<1){
                        print "No pages listed";
                    }
				    print "</div>";
				//}
				//if(count($supportgroups)>0){
                print '<div class="widget_body"><div class="row-header"><h4><i class="icon-anchor icon-2x" style="margin-right:5px"></i>Support Groups</h4></div>';

                foreach($supportgroups as $k=>$v){
					    print "<p><a href='tel:".$v."'>".$k." (".$v.")</a></p>";
				    }
				if(count($supportgroups)<1){
					print "No groups listed";
				}
				print "</div>";
				//}
				//if(count($socialmedias)>0){
                print '<div class="widget_body"><div class="row-header"><h4><i class="icon-user icon-2x" style="margin-right:5px"></i>Social Media</h4></div>';

                foreach($socialmedias as $k=>$v){
					print "<p>
					<a href='".$v."'>".$k."</a>
					</p>";
				}
				if(count($socialmedias)<1){
					print "No pages listed";
				}
				print "</div>";
				//}
				?>

			</div>
		</div>
	</div>

    <div class="row-fluid" style="min-height:600px;">
		<div class="span3 sidebar_widget2">
			<div class="row-header"><h4>Major Stories</h4></div>
			<style type="text/css">
				.accordion-inner a{
					color:#000;
				}
			</style>
			<?php
			$i = 0;
			if(sizeof($major)>0){
			$first_one = $major[0];
			print '<div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#'.$i.'">
                    	'.$first_one['title'].'<i class="icon-chevron-sign-down"></i>
                    </a>
                  </div>
                  <div id="'.$i.'" class="accordion-body in collapse" style="height: auto;">
                    <div class="accordion-inner">
				<p>';
				if($first_one['thumb']!=null){
                    $thumb = str_replace("http://the-star.co.ke", "http://www.the-star.co.ke", $first_one['thumb']);

                    print "<img src='".$thumb."' width='100%'><br />";
				}
				print $first_one['description'].'<br /><a href="'.$first_one['link'].'" target="_blank">More</a></p>
                    </div>
                  </div>
                </div>
              </div>';
			  $total=0;
			foreach($major as $featured_item){
	            if(($total>1)&&($total<6)){
			$i++;
	           	print '<div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#'.$i.'">
                      '.$featured_item['title'].'<i class="icon-chevron-sign-down"></i>
                    </a>
                  </div>
                  <div id="'.$i.'" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
			    <p>';
				if($featured_item['thumb']!=null){
                    $thumb = str_replace("http://the-star.co.ke", "http://www.the-star.co.ke", $featured_item['thumb']);

                    print "<img src='".$thumb."' width='100%'><br />";
				}
				print $featured_item['description'].'<br /><a href="'.$featured_item['link'].'" target="_blank">More</a></p>
                    </div>
                  </div>
                </div>
              </div>';

			  }
			     $total++;
			  }
            }
			  ?>

		  	<br /><br />
			<div class="row-header"><h4>Feed Filters</h4></div>
			<script>
                function filter_feed(section) {
                	document.getElementById("filtered").innerHTML = "";
                    /*
                	document.getElementById("chev0").style.display='none';
					document.getElementById("chev"+section_id).style.display='block';*/
                   var file = "<?php echo asset('');?>/filter_feed";

				  var request =  get_XmlHttp();
				  document.getElementById("filtered").innerHTML = "";

				  var the_data = 'section='+section;

				  request.open("POST", file, true);

				  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				  request.send(the_data);
				  document.getElementById("filtered").innerHTML = "<div style='text-align:center'><img src='<?php echo asset('');?>img/preloader.gif'></div>";
				  request.onreadystatechange = function() {

				  if (request.readyState == 4) {
				      document.getElementById("filtered").innerHTML = request.responseText;
				    }
				  }
                }
        </script>
			<table class="table table-striped feed-filters">
				<tbody>
					<tr>
						<td><a  class='filter_feed' data-tag='All'>All</a></td>
					</tr>
                    <?php
                        $i = 0;
                        foreach($tags as $k=>$v){

                            if($i<10){

                                print "<tr><td><a class='filter_feed' data-tag='".$k."'>".$k." (".$v.")</td></tr>";

                                $i++;
                            }

                        }
                    ?>
				</tbody>
			</table>
		</div>
		<div class="span6 newsfeed" id="filtered">
			<div class="row-header"><h4>Other Health News</h4></div>
			<h6>A round-up of the all the latest health news from theStar <i class="icon-arrow-down" style="margin-left: 10px"></i></h6>
			<br />
			<?php

                $items=0;

			  	foreach($more_news as $item){
			  		if($items<40){
                    $thumb = str_replace("http://the-star.co.ke", "http://www.the-star.co.ke", $item['thumb']);

			  		print "<h4><a href='".$item['link']."' target='_blank'>".$item['title']."</a></h4>";
					if($item['thumb']!=null){
						print "<img src='".$thumb."' style='width:100px;float:left; margin:10px'><br />";
					}
					print "<div>".$item['description']."</div><br />";

                    print '<div class="article-meta">Posted '.$item['timestamp'].' | '; print ucwords(strtolower($item['author']));

					print '</div>';
					print "<hr />";

					$items++;

					}
			  	}
				?>
            <div class="pagination" style="text-align: center">
                <?php
                print $more_news->render();
                ?>
            </div>
		</div>
		<div class="span3 sidebar_widget2">
			<div class="row-header"><h4>App Store</h4></div>
			<p>Download the Star's mobile Apps, eBooks, and other tools.</p>
			<a href="https://play.google.com/store/apps/details?id=org.codeforafrica.starreports" target="_blank"><img src="<?php echo asset('');?>img/android-icon.png"></a>
			<hr />
			<a href="http://code4kenya.org" target="_blank"><img style="height: 80px" src="<?php echo asset('');?>img/c4k_logo.png" id="c4k_partner"></a>
			<br />
			The data driven journalism + tools in StarHealth section were kickstarted by Code4Kenya
			<hr />
			<a href="http://github.com/CodeForAfrica"><img src="<?php echo asset(''); ?>img/GitHub-Mark-32px.png" id="cfa_icon"></a>
			<a href="http://africaopendata.org/dataset?q=kenya+health"><img style="height:32px;margin-left:25px" src="<?php echo asset(''); ?>img/data.png"></a>
			<p>The code & data for this page are open source. You can re-use it by visiting the above repositories.</p>
			<br />
			<br />
			<div class="row-header"><h4>Stay in Touch</h4></div>
			<div class="social_media_icons">
				<a href="https://www.facebook.com/thestarkenya" target="_blank"><img src="<?php echo asset('');?>img/facebook.png" style="height:32px;width:32px"></a>
				<a href="https://twitter.com/TheStarKenya" target="_blank"><img src="<?php echo asset('');?>img/twitter.png" style="height:32px;width:32px"></a>
				<a href="http://www.the-star.co.ke/rss.xml" target="_blank"><img src="<?php echo asset('');?>img/rss.png" style="height:32px;width:32px"></a>
			</div>
			<!-- <a class="twitter-timeline" href="https://twitter.com/TheStarKenya" data-widget-id="336091571755827200">Tweets by @TheStarKenya</a> -->
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
	</div>

<footer class="site-footer clearrfix row-fluid" role="contentinfo">

<div class="footer-wrapper clearfix">
<div class="row-fluid" id="footer">

<div class="col-md-12">
    <div class="row-fluid">

        <div class="col-md-2"><!-- Bottom Menu -->
            <div class="bcolumn">
                <div class="region region-footer-1">
                    <div id="block-block-6" class="block block-block block-even">


                        <div class="content">
                            OUR NETWORK
                            <ul class="list-unstyled"><li><a href="http://www.the-star.co.ke/sections/news#overlay-context=">News</a></li>
                                <li><a href="http://www.the-star.co.ke/sections/regional-news#overlay-context=">Politics</a></li>
                                <li><a href="http://www.the-star.co.ke/sections/business#overlay-context=">Business</a></li>
                                <li><a href="http://www.the-star.co.ke/sections/entertainment#overlay-context=">Entertainment</a></li>
                                <li><a href="http://www.the-star.co.ke/sections/opinions#overlay-context=">Opinions</a></li>
                                <li><a href="http://www.the-star.co.ke/sections/starlife#overlay-context=">Starlife</a></li>
                                <li><a href="http://www.the-star.co.ke/sections/weekend-star#overlay-context=">Weekend</a></li>
                            </ul>  </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bottom Menu -->

        <div class="col-md-2 hide-mobile"><!-- Bottom Menu -->
            <div class="bcolumn">
                <div class="region region-footer-2">
                    <div id="block-block-7" class="block block-block hide-mobile block-odd">


                        <div class="content">
                            PARTNER SITES
                            <ul class="list-unstyled"><li><a href="https://classic105.com/">CLASSIC FM</a></li>
                                <li><a href="http://www.kissfm.co.ke/">KISS 100 FM</a></li>
                                <li><a href="https://mpasho.co.ke/">MPASHO</a></li>
                                <li><a href="#">X FM</a></li>
                                <li><a href="#">RADIO JAMBO</a></li>
                                <li><a href="http://eastfm.com/">EAST FM</a></li>
                            </ul>  </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bottom Menu -->

        <div class="col-md-2 hide-mobile"><!-- Bottom Menu -->
            <div class="bcolumn">
                <div class="region region-footer-3">
                    <div id="block-block-8" class="block block-block hide-mobile block-even">


                        <div class="content">
                            ONLINE SERVICES<ul class="list-unstyled"><li><a href="#">Advertise Online</a></li><li><a href="http://www.thestarepaper.co.ke/">Subscribe to Newsletter</a></li><li><a href="https://play.google.com/store/apps/details?id=ke.co.thestar.android.news&amp;hl=en">Mobile</a></li><li><a href="http://www.the-star.co.ke/the-star-feed.xml" target="_blank">RSS Feeds</a></li></ul>  </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bottom Menu -->

        <div class="col-md-2 hide-mobile"><!-- Bottom Menu -->
            <div class="bcolumn">
                <div class="region region-footer-4">
                    <div id="block-block-9" class="block block-block hide-mobile block-odd">


                        <div class="content">
                            PRINT SERVICES
                            <ul class="list-unstyled"><li><a href="#">Advertise in print</a></li>
                                <li><a href="#">Subscription Services</a></li>
                                <li><a href="http://member.thestarepaper.co.ke/signup">e-paper</a></li>
                            </ul>  </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bottom Menu -->

        <div class="col-md-2 hide-mobile"><!-- Bottom Menu -->
            <div class="bcolumn">
                <div class="region region-footer-5">
                    <div id="block-block-10" class="block block-block hide-mobile block-even">


                        <div class="content">
                            SOCIAL NETWORK
                            <ul class="list-unstyled"><li><a href="https://www.facebook.com/thestarkenya">Facebook Page</a></li>
                                <li><a href="https://twitter.com/TheStarKenya?lang=en">Twitter</a></li>
                                <li><a href="https://plus.google.com/u/0/102746437663153160461/posts">Google +</a></li>
                                <li><a href="http://instagram.com/thestarkenya">Instagram Page</a></li>
                            </ul>  </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bottom Menu -->

        <div class="col-md-2 hide-mobile"><!-- Bottom Menu -->
            <div class="bcolumn">
                <div class="region region-footer-6">
                    <div id="block-block-11" class="block block-block hide-mobile block-odd">


                        <div class="content">
                            CONTACT US
                            <ul class="list-unstyled"><li><a href="http://www.the-star.co.ke/section/contact-details">Contact Details</a></li>

                            </ul>
                            OTHER
                            <ul class="list-unstyled"><li><a href="http://www.the-star.co.ke/section/sitemap">Sitemap</a></li>
                                <li><a href="http://www.the-star.co.ke/section/website-comment-policy">Website Comment Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Ethics - Policy</a></li>
                                <li><a href="#">Register of interests</a></li>
                            </ul>  </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bottom Menu -->

    </div>
</div>

<div class="col-md-12 text-center" id="copyright"><!-- copyright -->


    <div class="credit">
        <a href="http://code4kenya.org" target="_blank"><span class="credit-text">Built by </span>
            <img src="<?php echo asset('');?>img/c4k_logo.png"></a>
    </div>

    <div class="region region-footer-bottom">
        <div id="block-block-5" class="block block-block block-even">


            <div class="content">
                © The Star. All Rights Reserved

                Use of this site constitutes acceptance of our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>.  </div>
        </div>
        <div id="block-block-43" class="block block-block block-odd">


            <div class="content">
                <script>
                    (function(f,b){
                        var c;
                        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
                        f._hjSettings={hjid:23751, hjsv:3};
                        c=b.createElement("script");c.async=1;
                        c.src="//static.hotjar.com/c/hotjar-23751.js?sv=3";
                        b.getElementsByTagName("head")[0].appendChild(c);
                    })(window,document);
                </script>
            </div>
        </div>
        <div id="block-block-44" class="block block-block block-even">


            <div class="content">
                <!--StarReports Analytics-->
                <script>
                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-44795600-11', 'auto');
                    ga('send', 'pageview');

                </script>
                <!--The Star Analytics-->
                <script>
                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-21433057-1', 'auto');
                    ga('send', 'pageview');

                </script>
            </div>
        </div>
        <div id="block-block-49" class="block block-block block-odd">


            <div class="content">
                <script>
                    window.fbAsyncInit = function() {
                        FB.init({
                            appId      : '582026265221270',
                            xfbml      : true,
                            version    : 'v2.3'
                        });
                    };

                    (function(d, s, id){
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) {return;}
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>  </div>
        </div>
    </div>
    <!-- /copyright -->
</div>
</div><!-- footer-wrapper-->
</div>
</footer>
</div>
<!-- Le javascript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script src="<?php echo asset('');?>js/jquery.js"></script>
<script>
    var jq191 = $.noConflict();
</script>

<script src="<?php echo asset('');?>js/bootstrap-transition.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-alert.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-rowlink.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-modal.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-dropdown.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-scrollspy.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-tab.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-tooltip.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-popover.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-button.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-collapse.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-carousel.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-typeahead.js"></script>
<script src="<?php echo asset('');?>js/bootstrap-affix.js"></script>

<script src="<?php echo asset('');?>js/holder/holder.js"></script>
<script src="<?php echo asset('');?>js/google-code-prettify/prettify.js"></script>

<script src="<?php echo asset('');?>js/application.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-33350783-4', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
