<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    
    <title>Resources</title>

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
                <header class="page-header"><h1 class="page-title">Resources</h1></header>
                <h3><a href="https://github.com/minisciencegirl/studyGroup/issues/29" target="_blank">R Study Group</a></h3>
                <p>"Study groups are fun, informal meetups of your friends and colleagues from around your local institution or town to share skills, stories and ideas on using code for research. The goal is to create a friendly, no-pressure environment where people can share their work, ask for help on a coding problem, and learn and work together with their peers."</p>       
            
                <h3><a href="http://software-carpentry.org/v4/shell/intro.html" target="_blank">Software Carpentry: BASH</a></h3>
                <p>"The Unix shell has been around longer than most of its users have been alive. It has survived so long because it’s a power tool that allows people to do complex things with just a few keystrokes. More importantly, it helps them combine existing programs in new ways and automate repetitive tasks so that they don’t have to type the same things over and over again. Use of the shell is fundamental to using a wide range of other powerful tools and computing resources (including “high-performance computing” supercomputers). These lessons will start you on a path towards using these resources effectively."</p>       
                
                <h3><a href="https://github.com/mozillascience/studyGroupLessons" target="_blank">Mozilla Science Study Group Lessons</a></h3>
                <p>"Mozilla Study Groups are a great casual way to get people from your field together to share their skills in computing and data management, in a relaxed, no-pressure environment with friends and colleagues, and to create a space where it's okay to ask any question you like. The goal should be to help everyone get some hands-on practice with a new idea or tool they can use in their every-day research, and support each other as we learn."</p>       
              </article>
            <!-- /Article -->

            <aside class="col-sm-4 sidebar sidebar-right">
                <div class="widget">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="index.php" target="_blank">Home Page</a><br><span class="small text-muted">Return to the main landing page.</span></li>
                        <li><a href="http://www.qc.cuny.edu/Pages/home.aspx" target="_blank">Queens College</a><br><span class="small text-muted">View our college's main website.</span></li>
                        <li><a href="http://www.cs.qc.edu/" target="_blank">Queens College CS Dept.</a><br><span class="small text-muted">View our computer science department's website.</span></li>
                    </ul>
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