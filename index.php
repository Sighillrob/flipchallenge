<!DOCTYPE html>
<html lang="en">

<head>

<!--fancy pants for Font Awesome - ROB -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!--fancy pants for google font to implement Awesome - ROB -->
<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="#2017FlipChallenge created By Gary Vaynerchuck - This site is for the tabulation of the global total and not endorsed by Gary Vaynercheck">
    <meta name="author" content="Robert Bingham">

    <!-- Facebook and Twitter integration -->
        <meta property="og:title" content="#2017FlipChallenge"/>
        <meta property="og:image" content="http://one1media.co/img/large/logo-white@2x.png"/>
        <meta property="og:url" content="http://one1media.co"/>
        <meta property="og:site_name" content="One1Media"/>
        <meta property="og:description" content="A leading social media management company that helps businesses grow online. We help increase leads and sales for businesses through social media marketing"/>
        <meta name="twitter:title" content="One1Media: Social Media Management Company" />
        <meta name="twitter:image" content="http://one1media.co/img/large/logo-white@2x.png" />
        <meta name="twitter:url" content="@one1media" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:creator" content="@colorado_it" />

    <title>#2017FlipChallenge</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <h2>#2017FlipChallenge</h2>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
<div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    <h3>#2017FlipChallenge Global Total: $<?php 
                    include './db.php';
                    $sql = "select sum(profit) from flipdata";
                    $res = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($res);
//                    print_r($row);
                    echo $row['sum(profit)'];
                    ?></h3>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <br>
                <iframe width="100%" height="505" src="https://www.youtube.com/embed/lv_8StGEegc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <br>
                <h4> 
                <p>Add your success to the global total</p>
                <form action="./flip.php" method="post"/>
                <p>Name:                 <input type="text" name="instagram" /></p>
                <p>Paid:                 <input type="text" name="paid" /></p>
                <p>Sold:                 <input type="text" name="sold" /></p>
                <p>Profit:               <input type="text" name="profit" /></p>
                <input type="submit" <a class="btn btn-default"></a>
            </form></h4>
                </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h4>Leaderboard</h4>
                <p>Coming Soon</p>
            </div>

        </div>
        <!-- /.row -->

        <hr>


<div class="container">
<div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   <h2>#2017FlipChallenge Global Total: $<?php 
                    include './db.php';
                    $sql = "select sum(profit) from flipdata";
                    $res = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($res);
//                    print_r($row);
                    echo $row['sum(profit)'];
                    ?></h2>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">

            <div class="col-md-4">
                <h2>Who Built This</h2>
                <p>My name is Rob, I'm a Cyber Security Cloud Engineer and budding marketer of <a href="http://One1Media.co">One1Media.co</a>. As a huge fan of Gary I threw this together because I thought it'd be cool to track the overall progress.  Its not a perfect solution but its fun and gives everyone an idea of the Total that has been generated globally for the #2017FlipChallenge.
                Feedback is Welcome hit me up on <a href="https://instagram.com/cybersecurityvegas">Instagram</a>, If you're a Web Developer and want to collab together to improve this hit me up.</p>
                
                <p>Contact to tell me if this sucks</p>
                <i class="fa fa-address-card" aria-hidden="false"></i>
                <ul class="footer-nav">
                            <li><a href="https://twitter.com/one1media1">Twitter</a> <i class="fa fa-twitter-square"></i></li>
                            <li><a href="https://www.instagram.com/one1Media/">Instagram</a> <i class="fa fa-instagram"></i></li>
                            <li><a href="https://www.facebook.com/One1media-729819417172993/">Facebook</a> <i class="fa fa-facebook-square"></i></li>
                            <li><a href="mailto:info@one1media.co">Email</a> <i class="fa fa-envelope"></i></li>
                        </ul>

            </div>
            
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h3><i class="fa fa-twitter-square"></i> Twitter:</h3>
                <h2><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/hashtag/2017FlipChallenge" data-widget-id="817169569064230913">#2017FlipChallenge Tweets</a></h2>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>

            <div class="col-md-4">
                <h2><i class="fa fa-facebook-square"></i> Facebook Group:</h2>
                <h3>
                <a href="https://www.facebook.com/groups/2017flipchallenge/">#2017 FlipChallenge Facebook Group</a>
                </h3>
                <p>Thanks to<a href="https://twitter.com/pierre_gerbaud"> @pierre_gerbaud</a> for pointing out the Facebook Group</p>
                </div>


            <!-- /.col-md-4 -->
<!--      <div class="col-md-4">
                <h2>Leader Board - coming soon</h2>
                <p>Who's made the most so far that submited info</p>
                <?php 
                    include './db.php';
                    $sql = "select sum(instagram) from flipdata";
                    $res = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($res);
//                    print_r($row);
                    echo $row['sum(instgram)'];
                    ?>

            </div>
-->
        </div>
        <!-- /.row -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- One1media.co -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6298102720404433"
     data-ad-slot="3695102706"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Made By <a href="http://one1media.co">One1Media</a></p>
                    <p>#2017FlipChallenge created By Gary Vaynerchuck - This site is for the tabulation of the global total and not endorsed by Gary Vaynercheck, but i bet hed think it's cool!</p>
                </div>
            <div class="col-md-12">
                    </div>

            </div>


        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
