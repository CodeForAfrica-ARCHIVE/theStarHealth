
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>StarHealth | Kenya's Health Portal by the Star</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset("bootstrap3/css/bootstrap.css");?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo asset("bootstrap3/css/custom.css");?>" rel="stylesheet">
    <!--Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo asset('bootstrap3/js/ie8-responsive-file-warning.js');?>"></script><![endif]-->
    <script src="<?php echo asset('bootstrap3/js/ie-emulation-modes-warning.js');?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom font -->
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?php echo asset(''); ?>/ico/starhealth-favicon-32.png">
</head>

<body <?php if(isset($_GET['embed'])) print "style='background:none;'";?>>

<div class="container" <?php if(isset($_GET['embed'])) print "style='padding:3px !important'";?>>
    <header <?php if(isset($_GET['embed'])) print "style='display:none' ";?>id="topbar">
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
    <div  <?php if(isset($_GET['embed'])) print "style='display:none' ";?>class="row brand_section">
        <div class="col-md-4 logo">
            <a class="brand" href="http://health.the-star.co.ke/"><img src="<?php echo asset("img/logo.png");?>"> </a>
        </div>
        <div class="col-md-5 sms-section">
            <img src="<?php echo asset('');?>/img/sms.png">
            <h4>Send query to 22495</h4>
            Examples: 1.<span class="sms_example">Doctor James Gicheru</span>, 2.<span class="sms_example">X-Ray in Kiambu</span>, 3.<span class="sms_example">NHIF in Karatina</span>
        </div>
        <div class="col-md-3 date-search">
            <div class="date-section">
                <?php date_default_timezone_set("Africa/Nairobi"); echo date('l, M j<\sup>S</\sup> Y');?>
            </div>
            <div class="input-group">
                <input id="main_search" type="text" class="form-control search" placeholder="Enter text..." aria-describedby="site_search_submit">
                <span class="input-group-addon" id="site_search_submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </div>
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
        </div>
    </div>
    <nav  <?php if(isset($_GET['embed'])) print "style='display:none' ";?>class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="http://www.the-star.co.ke/news/latest-news_c401249">Latest News</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/news/national_c29654">Today's Paper</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/news/business_c29663">Business</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/news/sport_c29664">Sport</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/news/opinion_c29661">Opinion</a>
                    </li>
                    <li class="">
                        <a href="http://health.the-star.co.ke/">Health</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/news/lifestyle_c29662">Star Life</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/news/sasa_c147383">Weekend</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/classifieds" target="_blank">Classified</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class="row" id="apps">
        <?php
        session_start();
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo asset("css/jquery.autocomplete.css");?>">
        <script type="text/javascript" src="<?php echo asset("ajax-autocomplete/jquery.js");?>"></script>

        <script type='text/javascript' src="<?php echo asset("js/jquery.autocomplete.js");?>"></script>
        <script type="text/javascript">
            $().ready(function() {
                $("#doctorName").autocomplete("getDoctors", {
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

                //Check if hospital is registered
                $("#clinicName").autocomplete("getClinics", {
                    matchContains: true,
                    //mustMatch: true,
                    //minChars: 0,
                    //multiple: true,
                    //highlight: false,
                    //multipleSeparator: ",",
                    selectFirst: false
                });
                $("#grabClinicDetails").click(function(){
                    var name = $("#clinicName").val();

                    $("#dname").html("<h4>Results for: " + name + "</h4>");

                    $("#mybox").html("");

                    $("#loading").show();

                    $.ajax({url:"singleClinic?q=" + name,success:function(result){
                        $("#clinicName").val("");

                        $("#mybox").html(result);

                        $("#loading").hide();
                    }});
                });

                $("#grabNHIFDetails").click(function(){
                    var hospital_location_gps = $("#hospital_location_gps").val();
                    var hospital_location = $("#hospital_location").val();

                    var hospital_type = $("#hospital_type").val();

                    $("#dname").html("<h4>"+hospital_location+"</h4>");

                    $("#mybox").html("");

                    $("#loading").show();

                    $.ajax({url:"nhifcoverage?type=" + hospital_type + "&gps=" + hospital_location_gps + "&address=" + hospital_location,success:function(result){

                        $("#mybox").html(result);

                        $("#hospital_location_gps").val("");

                        $("#hospital_location").val("");

                        $("#loading").hide();
                    }});
                });
                $("#grabSpecialists").click(function(){
                    var hospital_location_gps = $("#hospital_location_gps_sp").val();
                    var hospital_location = $("#hospital_location_sp").val();

                    var specialty = $("#specialist").val();

                    if(specialty == "0"){
                        $("#dname").html("<h4>"+hospital_location + "</h4>");
                    }else{
                        if(hospital_location != "")
                            $("#dname").html("<h4>"+specialty+" in " + hospital_location + "</h4>");
                    }


                    $("#mybox").html("");

                    $("#loading").show();

                    $.ajax({url:"specialty?specialty=" + specialty + "&gps=" + hospital_location_gps + "&address=" + hospital_location,success:function(result){

                        $("#mybox").html(result);

                        $("#hospital_location_gps_sp").val("");

                        $("#hospital_location_sp").val("");

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
                $("#hospital_location_sp").css("background", "white url('ajax-autocomplete/indicator.gif') right center no-repeat");
                navigator.geolocation.getCurrentPosition(handle_geolocation_query);
            }

            function handle_geolocation_query(position){
                //Get cordinates on complete
                var autoCords = position.coords.latitude + ',' + position.coords.longitude;

                $("#hospital_location_gps").val(autoCords);
                $("#hospital_location_gps_sp").val(autoCords);

                //make ajax request to reverse geocode coordinates
                $.ajax({url:"reverse_geocode?q=" + autoCords,success:function(result){

                    $("#hospital_location").val(result);
                    $("#hospital_location_sp").val(result);

                    //$("#loading_hospitals").hide();
                    $("#hospital_location").css("background", "none");
                    $("#hospital_location_sp").css("background", "none");

                }});
            }
        </script>
        <div <?php display_app(1)?>>
            <div class="app">
                <h4 class="app_title"><i class="fa fa-user-md"></i>Dodgy Doctors</h4>
                <div class="app_top">
                    Check to see if your doctor is registered.<br/><small><em>Can't find a name? Send us an email <a href="mailto:starhealth@codeforafrica.org" target="_blank">starhealth@codeforafrica.org</a></em></small>
                </div>
                <div class="app_bottom">

                    <input type="text" placeholder="Start typing doctor's name" class="search form-control" id="doctorName" />
                    <button class='btn btn-primary red_button' href="#myModal" role="button" class="btn" data-toggle="modal" id="grabDetails">
                        Submit
                    </button>
                    <div class="contribution">
                        <a href="#embed_1_modal" data-toggle="modal">Embed</a>
                    </div>

                </div>


            </div>
        </div>
        <div <?php display_app(2)?>>
            <div class="app">
                <h4 class="app_title"><i class="fa fa-umbrella"></i>Am I Covered</h4>
                <div class="app_top">
                    Find out which hospitals your NHIF card will cover
                    <div class="input-group">
                        <input type="text" id="hospital_location" placeholder="Eg. Kisumu, Kariobangi" class="form-control" aria-describedby="get_location_text"/>
                        <span class="near_me input-group-addon" style="cursor: pointer;" id="get_location_text"><i class="fa fa-location-arrow"></i></span>
                    </div>
                    <input type="hidden" id="hospital_location_gps" />
                </div>
                <div class="app_bottom">
                    <select id="hospital_type"  class="form-control">
                        <option value="0">All hospital types</option>
                        <option value="A">Category A: Government Hospitals</option>
                        <option value="B">Category B: Private and Mission Hospitals</option>
                        <option value="C">Category C: Private Hospitals</option>
                    </select>


                    <button class='btn btn-primary ' href="#myModal" role="button" class="btn" data-toggle="modal" id="grabNHIFDetails">
                        Submit
                    </button>
                    <div class="contribution">
                        <a href="#embed_2_modal" data-toggle="modal">Embed | </a>
                        <a href="#premiumRatesModal" data-toggle="modal" id="whatsMyContribution">What's my contribution?</a><br />
                        <a href="#nhifInfoModal" data-toggle="modal">Hospital Types</a>
                    </div>
                </div>
            </div>
        </div>
        <div <?php display_app(3)?>>
            <div class="app">
                <h4 class="app_title"><i class="fa fa-map-marker"></i>Nearest Specialist</h4>
                <div class="app_top">Find the nearest specialist doctor or health facility

                    <div class="input-group">
                        <input type="text" id="hospital_location_sp" placeholder="Eg. Kisumu, Kariobangi" class="form-control" aria-describedby="get_location_text_sp"/>
                        <span class="near_me input-group-addon" style="cursor: pointer;" id="get_location_text_sp"><i class="fa fa-location-arrow"></i></span>
                    </div>
                    <br />
                    </div>
                <div class="app_bottom">
                    <select id="specialist" class="form-control specialist_select">
                        <option value="0">Select service</option>
                        <?php
                        $i = 0;
                        foreach($specialties as $sp){
                            print "<option value='".$sp_values[$i]."'>".$sp."</option>";
                            $i++;
                        }
                        ?>
                    </select>
                    <button class='btn btn-primary ' href="#myModal" role="button" class="btn" data-toggle="modal" id="grabSpecialists">
                        Submit
                    </button>
                    <div class="contribution">
                        <a href="#embed_3_modal" data-toggle="modal">Embed</a>
                    </div>
                    </div>

            </div>
        </div>
        <div <?php display_app(4)?>>
            <div class="app">
                <h4 class="app_title"><i class="fa fa-hospital-o"></i>Registered Facilities</h4>
                <div class="app_top">Check if your medical facility is registered.<br/><small><em>Can't find a name? Send us an email <a href="mailto:starhealth@codeforafrica.org" target="_blank">starhealth@codeforafrica.org</a></em></small>
                </div>
                <div class="app_bottom">

                    <input type="text" placeholder="Start typing facility's name" class="search form-control" id="clinicName" />
                    <button class='btn btn-primary red_button' href="#myModal" role="button" class="btn" data-toggle="modal" id="grabClinicDetails">
                        Submit
                    </button>
                    <div class="contribution">
                        <a href="#embed_4_modal" data-toggle="modal">Embed</a>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <?php
        //function to properly show embed
        function display_app($app_position)
        {
            if (isset($_GET['embed']) && ($_GET['embed'] == $app_position)) {
                print " class='col-md-12' style='margin-top: 10px; padding:0!important'";

            } elseif (isset($_GET['embed']) && ($_GET['embed'] != $app_position)) {
                print " style='display:none'";
            }
            else{
                print " class='col-md-3'";
            }
        }
    ?>

    <!-- begin news section -->
    <div  <?php if(isset($_GET['embed'])) print "style='display:none' ";?>class="row news_section">

        <div class="news_section_featured col-md-9">
            <div class="row">
                <?php
                print '<h3 class="story_title" style="font-size:2em"><a href="'.$featured[0]['link'].'" target="_blank">'.$featured[0]['title'].'</a></h3>';
                ?>
                <div class="backstory col-md-3">
                    <?php
                    //print "<img src='".public_path()."/thumbs/".$news[0]['sofar_thumbnail']."' width='100%'>";
                    print $overview;
                    ?>
                    <h4>The story so far</h4>
                    <?php
                    print "<ul>";
                    $i = 0;
                    foreach($sofar as $id=>$item){
                        if($i<3)
                            print '<li><i class="fa fa-chevron-circle-right"></i> <a href="'.$item['link'].'" target="_blank">'.$item['title'].'</a></li>';
                        $i++;
                    }

                    print "</ul>";

                    ?>
                    <h4>Evidence Dossier</h4>
                    <a href="http://africaopendata.org/dataset?q=kenya+health"><i class="fa fa-database"></i> Data repository</a>
                </div>
                <div class="col-md-9">
                    <div class="featured_thumb_div">
                        <?php
                        $thumb = str_replace("http://the-star.co.ke", "http://www.the-star.co.ke", $featured[0]['thumb']);
                        print '<img src="'.$thumb.'" alt="" class="featured_thumb">';
                        ?>
                        <div class="feedback">
                            <a href="http://www.the-star.co.ke/section/contact-details" target="_blank"><strong>Tell us more</strong><br/>Do you have more information? Help us improve this story by sharing your experiences/evidence.</a>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <?php
            //if(count($helplines)>0){
            print '<div class="widget_body"><div class="row-header"><h4><i class="fa fa-phone-square"></i>Help Lines</h4></div>';

            foreach($helplines as $helpline){
                print "<p><a href='tel:".$helpline['value']."'>".$helpline['title']." (".$helpline['value'].")</a></p>";
            }

            if(count($helplines)<1){
                print "No pages listed";
            }
            print "</div>";
            //}
            //if(count($supportgroups)>0){
            print '<div class="widget_body"><div class="row-header"><h4><i class="fa fa-anchor"></i>Support Groups</h4></div>';

            foreach($supportgroups as $sg){
                print "<p><a href='tel:".$sg['value']."'>".$sg['title']." (".$sg['value'].")</a></p>";
            }
            if(count($supportgroups)<1){
                print "No groups listed";
            }
            print "</div>";
            //}
            //if(count($socialmedias)>0){
            print '<div class="widget_body"><div class="row-header"><h4><i class="fa fa-external-link"></i> Links</h4></div>';

            foreach($socialmedias as $sm){
                print "<p>
					<a href='".$sm['value']."'>".$sm['title']."</a>
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

    <!-- begin feed -->
    <div  <?php if(isset($_GET['embed'])) print "style='display:none' ";?>class="row news_feed">
        <div class="col-md-3 sidebar_widget2">
            <div class="row-header"><h3>Major Stories</h3></div>
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
                  <div class="accordion-heading"><i class="fa fa-chevron-circle-down"></i>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#'.$i.'">
                    	'.$first_one['title'].'</a>
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
                  <div class="accordion-heading"><i class="fa fa-chevron-circle-down"></i>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#'.$i.'">
                      '.$featured_item['title'].'</a>
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
                foreach($tags as $tag){

                    if($i<10){

                        print "<tr><td><a class='filter_feed' data-tag='".$tag['tag']."'>".$tag['tag']." (".$tag['count'].")</td></tr>";

                        $i++;
                    }

                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 newsfeed" id="filtered">
            <a name="newsfeed"></a>
            <div class="row-header"><h3>Other Health News</h3></div>
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
        <div class="col-md-3 sidebar_widget2 links">
            <div class="row-header"><h3>Links</h3></div>
            <p>Download the Star's mobile Apps, eBooks, and other tools.</p>
            <a href="https://play.google.com/apps/testing/org.codeforafrica.citizenreporter.starreports" target="_blank"><img src="<?php echo asset('');?>img/android-icon.png"></a>
            <hr />
            <a href="http://code4kenya.org" target="_blank"><img style="height: 80px" src="<?php echo asset('');?>img/c4k_logo.png" id="c4k_partner"></a>
            <br />
            The data driven journalism + tools in StarHealth section were kickstarted by Code4Kenya
            <hr />
            <div style="text-align: center;">
            <a href="http://github.com/CodeForAfrica/HealthTools"><img src="<?php echo asset(''); ?>img/GitHub-Mark-32px.png" id="cfa_icon"></a>
            <a href="http://africaopendata.org/dataset?q=kenya+health"><img style="height:32px;margin-left:25px" src="<?php echo asset(''); ?>img/data.png"></a>
            </div>
                <p>The code & data for this page are open source. You can re-use it by visiting the above repositories.</p>
            <br />
            <br />
            <div class="row-header"><h4>Stay in Touch</h4></div>
            <div class="social_media_icons" style="text-align: center;">
                <a href="https://www.facebook.com/thestarkenya" target="_blank"><img src="<?php echo asset('');?>img/facebook.png" style="height:32px;width:32px"></a>
                <a href="https://twitter.com/TheStarKenya" target="_blank"><img src="<?php echo asset('');?>img/twitter.png" style="height:32px;width:32px"></a>
                <a href="http://www.the-star.co.ke/rss.xml" target="_blank"><img src="<?php echo asset('');?>img/rss.png" style="height:32px;width:32px"></a>
            </div>
            <!-- <a class="twitter-timeline" href="https://twitter.com/TheStarKenya" data-widget-id="336091571755827200">Tweets by @TheStarKenya</a> -->
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>

    <footer  <?php if(isset($_GET['embed'])) print "style='display:none' ";?>class="site-footer clearrfix row-fluid" role="contentinfo">

        <div class="footer-wrapper clearfix">
            <div class="row" id="footer">

                <div class="col-md-12">
                    <div class="row footer_inner">

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
                                    ga('create', 'UA-21433057-1', 'auto', {'name': 'theStar'});
                                    ga('create', 'UA-21433057-5', 'auto', {'name': 'theStarHealth'});
                                    ga('create', 'UA-33350783-4', 'auto', {'name': 'CfAFRICA'});
                                    ga('send', 'pageview');
                                    ga('theStar.send', 'pageview');
                                    ga('theStarHealth.send', 'pageview');
                                    ga('CfAFRICA.send', 'pageview');

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
</div><!-- /.container -->


<div class="the_modals">


    <!-- Modal -->
    <div id="myModal" style="text-align:justify !important;" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
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

        </div></div>
        </div>
    </div>

    <!-- Modal -->
    <div id="nhifInfoModal" style="text-align:justify !important;" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
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
    </div></div>
    </div>
    <!-- Modal -->
    <div id="premiumRatesModal" style="text-align:justify !important;" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="dname">Premium Rates</h3>
        </div>
        <div class="modal-body">
            <p>
                Enter your gross income to find out how much you should pay*


            <div class="input-group">
                <input id="income" type="text" class="form-control search" placeholder="Gross income" aria-describedby="calculate">
                <span class="input-group-addon" id="calculate"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
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
    </div>

    <!--embed modals -->
    <?php
        for($i=1; $i<4; $i++) {

            $app_name = "Dodgy Doctors";
            if($i==2){
                $app_name = "Am I Covered";
            }
            if($i==3){
                $app_name = "Nearest specialist";
            }
            ?>

            <div id="embed_<?php echo $i;?>_modal" style="text-align:justify !important;" class="modal fade" tabindex="-1"
                 role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3>Embed Code for <i><?php echo $app_name;?></i></h3>
                        </div>
                        <div class="modal-body">
                            Copy and paste the following code inside within HTML code
            <textarea class="form-control">
                <iframe src="http://health.the-star.co.ke/?embed=<?php echo $i;?>" frameborder="0" scrolling="no" height="400px"
                        width="100%"></iframe>
            </textarea>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
</div>



<script src="<?php echo asset('');?>js/jquery.js"></script>
<script>
    var jq191 = $.noConflict();
</script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo asset('bootstrap3/js/bootstrap.min.js');?>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo asset('bootstrap3/js/ie10-viewport-bug-workaround.js');?>"></script>

</body>
</html>
