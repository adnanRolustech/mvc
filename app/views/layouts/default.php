<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>NEW MVC</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo CSS_URL; ?>bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo CSS_URL; ?>clean-blog.min.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body><!-- Navigation -->
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo BASE_URL; ?>">NEW MVC</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo BASE_URL; ?>/student/dashboard">Students</a>                           
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>/teacher/dashboard">Tachers</a>                           
                        </li>                                                                           
                        <li>
                            <a href="<?php echo BASE_URL; ?>/course/dashboard">Courses</a>
                        </li>                         
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <header class="intro-header" style="background-image: url('<?php echo IMAGE_URL; ?>home-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="page-heading">
                            <h1>NEW MVC</h1>
                            <hr class="small">
                            <span class="subheading">This is what I do.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">        
                    <script type="text/javascript">
                        setTimeout(function () {
                            $('#msg-flash').fadeOut('fast');
                        }, 4000); // <-- time in milliseconds
                    </script>
                    
                    <!--Fetching page content here-->
                    <?php $this->fetch(); ?>
                    
                </div>
            </div>
        </div>
        <!-- Footer -->        
        <hr>        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <ul class="list-inline text-center">
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted">Copyright &copy; Test MVC 2016</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery -->
        <script src="<?php echo JS_URL; ?>jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo JS_URL; ?>bootstrap.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo JS_URL; ?>clean-blog.min.js"></script>
    </body>
</html>
