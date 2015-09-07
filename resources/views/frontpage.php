
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

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset("bootstrap3/css/bootstrap.css");?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo asset("bootstrap3/css/custom.css");?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo asset('bootstrap3/js/ie8-responsive-file-warning.js');?>"></script><![endif]-->
    <script src="<?php echo asset('bootstrap3/js/ie-emulation-modes-warning.js');?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        <div class="col-md-4">
            <div class="app">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
                </div>
        </div>
        <div class="col-md-4">
            <div class="app">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="app">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div>
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
