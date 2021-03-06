<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    
    <title>Flushing Food Map</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Fixed navbar -->
    <?php include("./navbar.php"); ?>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Resources</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                <header class="page-header"><h1 class="page-title">Flushing Food Map</h1></header>
				<p>
					An important part of the economy of Flushing is restaurants. Flushing was primarily settled by Taiwanese and other Mandarin speaking Chinese immigrants. The Queens College Tech Incubator, with help from the Flushing Chamber of Commerce, is compiling a map of the restaurants of these various cuisines.
				</p>
				<p>
				    <a href="http://www.seriouseats.com/2014/10/where-to-eat-chinese-best-restaurants-flushing-queens-chinatown-nyc.html" target="_blank">How to Eat Flushing: A One-Day Food Tour of NYC's Greatest Chinatown</a>
                </p>
                <p>
	                <a href="//www.thrillist.com/eat/new-york/queens/the-definitive-eating-guide-to-flushing-queens-thrillist-new-york" target="_blank">The Definitive Eating Guide To Flushing, Queens</a>
				</p>
            </article>
            <!-- /Article -->

            <aside class="col-sm-4 sidebar sidebar-right">
                <div class="widget">
                    <quick-links></quick-links>
                </div>
            </aside>
            
        </div>
    </div>  <!-- /container -->
    

    <!-- footer -->
    <?php include("./footer.php"); ?>
        
    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>