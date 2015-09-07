
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

    <title>StarHealth</title>

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
</head>

<body>


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
    <div class="row brand_section">
        <div class="col-md-4 logo">
            <a class="brand" href="http://starhealth.the-star.co.ke/"><img src="<?php echo asset("img/logo.png");?>"> </a>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-3 date-search">
            <div class="date-section">
                <?php date_default_timezone_set("Africa/Nairobi"); echo date('l, M j<\sup>S</\sup> Y');?>
            </div>
            <div class="input-group">
                <input type="text" class="form-control search" placeholder="Enter text..." aria-describedby="site_search_submit">
                <span class="input-group-addon" id="site_search_submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </div>
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
        </div>
    </div>
    <nav class="navbar navbar-default">
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

                    $("#dname").html("<h4>"+specialty+" in " + hospital_location + "</h4>");

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
        <div class="col-md-4">
            <div class="app">
                <h4 class="app_title"><i class="fa fa-user-md"></i>Dodgy Doctors</h4>
                <div class="description">Check to see if your doctor is registered.<br/><small><em>Can't find a name? Send us an email <a href="mailto:starhealth@codeforafrica.org" target="_blank">starhealth@codeforafrica.org</a></em></small>
                </div>
                <div class="search_menu input-append" style="margin-top:35px;">

                    <input type="text" placeholder="Start typing doctor's name" class="search form-control" id="doctorName" />
                    <button class='btn btn-primary red_button' href="#myModal" role="button" class="btn" data-toggle="modal" id="grabDetails">
                        Submit
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
        </div>
        <div class="col-md-4">
            <div class="app">
                <h4 class="app_title"><i class="fa fa-umbrella"></i>Am I Covered</h4>
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
                <div class="input-group">
                    <input type="text" id="hospital_location" placeholder="Eg. Kisumu, Kariobangi" class="form-control" aria-describedby="get_location_text"/>
                    <span class="near_me input-group-addon" style="cursor: pointer;" id="get_location_text"><i class="fa fa-location-arrow"></i></span>
                </div>
                <input type="hidden" id="hospital_location_gps" />

                <br />
                <select id="hospital_type"  class="form-control">
                    <option value="0">All hospital types</option>
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
                <button class='btn btn-primary ' href="#myModal" role="button" class="btn" data-toggle="modal" id="grabNHIFDetails">
                    Submit
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
        </div>
        <div class="col-md-4">
            <div class="app">
                <h4 class="app_title"><i class="fa fa-hospital-o"></i>Nearest Specialist</h4>
                <div class="description">Find the nearest specialist doctor or health facility</div>
                <div class="search_menu">
                    <div class="input-group">
                        <input type="text" id="hospital_location_sp" placeholder="Eg. Kisumu, Kariobangi" class="form-control" aria-describedby="get_location_text_sp"/>
                        <span class="near_me input-group-addon" style="cursor: pointer;" id="get_location_text_sp"><i class="fa fa-location-arrow"></i></span>
                    </div>
                    <br />
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
                </div>
            </div>
        </div>
    </div>

    <!-- begin news section -->
    <div class="row news_section">

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
                    <h5>The story so far</h5>
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
                    <h5>Evidence Dossier</h5>
                    <a href="http://africaopendata.org/dataset?q=kenya+health">Data repository</a>
                </div>
                <div class="col-md-9">
                        <?php
                        $thumb = str_replace("http://the-star.co.ke", "http://www.the-star.co.ke", $featured[0]['thumb']);
                        print '<img src="'.$thumb.'" alt="" class="featured_thumb">';
                        ?>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <?php
            //if(count($helplines)>0){
            print '<div class="widget_body"><div class="row-header"><h4><i class="icon-phone icon-2x" style="margin-right:5px"></i>Help Lines</h4></div>';

            foreach($helplines as $helpline){
                print "<p><a href='tel:".$helpline['value']."'>".$helpline['title']." (".$helpline['value'].")</a></p>";
            }

            if(count($helplines)<1){
                print "No pages listed";
            }
            print "</div>";
            //}
            //if(count($supportgroups)>0){
            print '<div class="widget_body"><div class="row-header"><h4><i class="icon-anchor icon-2x" style="margin-right:5px"></i>Support Groups</h4></div>';

            foreach($supportgroups as $sg){
                print "<p><a href='tel:".$sg['value']."'>".$sg['title']." (".$sg['value'].")</a></p>";
            }
            if(count($supportgroups)<1){
                print "No groups listed";
            }
            print "</div>";
            //}
            //if(count($socialmedias)>0){
            print '<div class="widget_body"><div class="row-header"><h4><i class="icon-user icon-2x" style="margin-right:5px"></i> Links</h4></div>';

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

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo asset('bootstrap3/js/bootstrap.min.js');?>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo asset('bootstrap3/js/ie10-viewport-bug-workaround.js');?>"></script>
</body>
</html>
