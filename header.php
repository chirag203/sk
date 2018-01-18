<?php include 'admin/pages/config.php';?>
<!DOCTYPE html> 
<html dir="ltr" lang="en-US">

<head>
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="author" content="Atul Pandya, Pankaj Gorana" />
	
    
    <!-- ============================================
        Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="css/retina.css" />

	<link rel="stylesheet" href="css/tipsy.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    
    
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
	
	
    <!-- ============================================
        External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
    
    
    <!-- ============================================
        Document Title
    ============================================= -->
	<title>Lokbharti Gramvidyapith</title>
    

</head>

<body class="stretched">


    <div id="wrapper" class="clearfix">
	
         <div id="header" class="header3">
                    
            <div class="container clearfix">
            
                
                <div id="logo">
                <?php $rrr=mysql_fetch_array(mysql_query("select * from `lok_header`")); ?>
                    <a href="<?php echo b_url(); ?>" class="standard-logo"><img src="<?php echo $rrr["logo_url"]; ?>" alt="Lokbharti" title="Lokbharti" /></a>
                    <a href="<?php echo b_url(); ?>" class="retina-logo"><img src="<?php echo $rrr["logo_url"]; ?>" alt="Lokbharti" title="Lokbharti" width="204" height="120" /></a>
                
                </div>
                
                
                <div id="top-search">
                
                    <form id="top-search-form" action="search-results.html" method="get">
                    
                        <input type="text" id="top-search-input" name="top-search" value="" placeholder="Type &amp; Hit Enter to Search" />
                    
                    </form>
                
                </div>
            
            
            </div>
            
            
            <div id="primary-menu">
            
            
                <div class="container clearfix">
                
                
                    <div class="rs-menu"><i class="fa fa-align-justify"></i></div>
                    
<?php include 'menu.php';?>
                              
                </div>
                
                
            </div>
        
        
        </div>
        