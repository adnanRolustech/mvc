<!DOCTYPE HTML>
<html>
    <head>
        <title>0hh error</title>
        <meta name="keywords" content="Error" />
        <link href="<?php echo CSS_URL; ?>style.css" rel="stylesheet" type="text/css"  media="all" />
    </head>
    <body>        
        <div class="wrap">
            <div class="header">
                <div class="logo">
                    <h1><a href="javascript:void(0)">Ohh Error</a></h1>
                </div>
            </div>
            <div class="content">
                <!--<img src="<?php echo IMAGE_URL; ?>error-img.png" title="error" />-->
                <p><span><label>O</label>hh.....</span>
                    <?php
                        $errorMessage = !empty ($errorMessage) ? $errorMessage : 'You Requested the page that is no longer There.' ;
                        echo $errorMessage;
                    ?>
                </p>
                <a href="<?php echo BASE_URL; ?>">Back To Home</a>
                <div class="copy-right">
                    <p>All rights Reserved</p>
                </div>
            </div>
        </div>
    </body>
</html>