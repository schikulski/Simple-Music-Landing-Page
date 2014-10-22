<?php 



/* ----------------------------------------------------------

    Landingsside av Simen Schikulski - simen@joss.as
    Ingen gjennbruk uten tillatelse!


    Filnavn for bakgrunnsbilde "bg.jpg" og "cover.jpg" for cover.
    Lenker i variablene nedenfor.
    
*/


$tittel = "Fredrik William Olsen - Til stede"; // Used for title tag
$bg = "#e3495b"; // If not set, then using "bg.jpg"

$links["wimp"] = "http://wimp.no/album/35970585";
$links["spotify"] = "";
$links["itunes"] = "";
$links["platek"] = "http://www.platekompaniet.no/Musikk.aspx/CD/Fredrik_William_Olsen/Til_Stede/?id=GRCD4441";
$links["cdon"] = "http://cdon.no/musikk/olsen_fredrik_william/til_stede-29903089";
$links["grappa"] = "";




?>



 <!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $tittel; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">

        <style type="text/css">

        	body {
                <?php if ($bg): ?>
                    background: <?php echo $bg ?>;
                <?php else: ?>
        		background: url("bg.jpg") no-repeat center center fixed;
                <?php endif; ?>
        		background-size: cover;
        		padding: 20px;
        	}

        	img {
        		max-width: 100%;
        	}

        	.main-container {
        		margin: 0 auto;
        		position: relative;
        		padding: 5px 5px 25px 5px;
        		background: white;
        		max-width: 400px;
        		text-align: center;
        	}

        	.cover {
        		margin-bottom: 20px;
        	}

        	.links ul,
        	.links li {
        		margin: 0; padding: 0;
        		list-style: none;
        	}

        	.links li { display: inline;}

        	.links ul li img {
        		max-height: 50px;
        		margin: 0 5px;
        	}


        	.links .cdon img,
        	.links .grappa img {
        		max-height: 20px;
        		margin-top: 20px;
        	}

        </style>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        <div class="main-container">
            
        	<div class="cover"><img src="cover.jpg"></div>


        	<div class="links">
        		<ul>
        			<?php 

                        foreach ($links as $linkname => $linkvalue) {
                            if ($linkvalue) { // If the link have a value, print it!
                                if ($linkname === "cdon") { echo "<br>"; } // If CDON, then make a linebreak
                                echo '<li><a class="' . $linkname . '" href="' . $linkvalue . '"><img src="lib/' . $linkname .'.png"></a></li>' . "\n";
                            }
                        }

                     ?>
        		</ul>
        	</div>	



        </div> <!-- #main-container -->


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
