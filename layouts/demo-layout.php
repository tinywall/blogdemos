<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="<?=isset($config['demo_author'])?$config['demo_author']:"Tinywall Infomedia";?>">
    <link rel="shortcut icon" href="ico/favicon.png">
	<title><?=isset($config['demo_title'])?$config['demo_title']." | Tinywall Infomedia":"Tinywall Infomedia";?></title>

	<!-- Bootstrap core CSS -->
    <link href="../static/lib/bootstrap-3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../static/css/navbar-fixed-top.css" rel="stylesheet">
    <link href="../static/css/sticky-footer.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../static/lib/html5shiv.js"></script>
      <script src="../static/lib/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery library -->
	<script src="../static/lib/jquery-1.10.2.min.js"></script>
	<!-- Tinywall demo css -->
	<link rel="stylesheet" type="text/css" href="../static/css/style.css">
	</head>
	<body>

		<div id="wrap">
		    <!-- Fixed navbar -->
		    <div class="navbar navbar-default navbar-fixed-top">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="http://www.tinywall.info">Tinywall Infomedia</a>
		        </div>
		        <div class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li class="active"><a href="#">Demos</a></li>
		            <li><a href="#contact">Tutorials</a></li>
		          </ul>
		          <ul class="nav navbar-nav navbar-right">
		            <li><a href="#">Share</a></li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Follow us <b class="caret"></b></a>
		              <ul class="dropdown-menu">
		                <li><a href="#">RSS</a></li>
		                <li><a href="#">Twitter</a></li>
		                <li><a href="#">Google+</a></li>
		                <li><a href="#">Facebook</a></li>
		                <li class="divider"></li>
		                <li class="dropdown-header">Code</li>
		                <li><a href="#">Github</a></li>
		              </ul>
		            </li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </div>
		    <div class="container">
		    	<div class="tw-main">
			    	<h1 class='tw-title'><?=isset($config['demo_title'])?$config['demo_title']:"Tinywall Infomedia Live Demo";?></h1>
					<div class="row tw-inner-nav">
						<div class="col-md-9" style='margin-top:10px;'>
							<script type="text/javascript"><!--
							google_ad_client = "ca-pub-1843029637699785";
							/* TWinfo Demo below title */
							google_ad_slot = "2678644028";
							google_ad_width = 728;
							google_ad_height = 15;
							</script>
							<script type="text/javascript"
							src="//pagead2.googlesyndication.com/pagead/show_ads.js">
							</script>
						</div>
						<div class="col-md-3">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class='tw-content'>
				    			<?php if(isset($config['demo_page'])){include $config['demo_page'];}?>
				    			<div class='clear'></div>
				    			<div class='tw-action-button-bottom'>
					    			<div class="nobtn-group">
										<?php if(isset($config['tutorial_link'])){?>
									  	<a href='<?=$config['tutorial_link'];?>' class="btn btn-default btn-success"><span class="glyphicon glyphicon-list-alt"></span> Tutorial</a>
									  	<?php }?>
									  	<?php if(isset($config['download_link'])){?>
									  	<a href='<?=$config['download_link'];?>' class="btn btn-default btn-success"><span class="glyphicon glyphicon-download-alt"></span> Download code</a>
									  	<?php }?>
									</div>
								</div>
							</div>
			    		</div>
			    	</div>
			    	<div class="row">
			    		<div class="col-md-9">
			    			<script type="text/javascript"><!--
				            google_ad_client = "ca-pub-1843029637699785";
				            /* TWinfo - Demo large hoz bar */
				            google_ad_slot = "8969336071";
				            google_ad_width = 728;
				            google_ad_height = 90;
				            //-->
				            </script>
				            <script type="text/javascript"
				            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
				            </script>
			    		</div>
			    		<div class="col-md-3">
			    			<script type="text/javascript"><!--
				            google_ad_client = "ca-pub-1843029637699785";
				            /* TWinfo Demo bottom */
				            google_ad_slot = "5632110425";
				            google_ad_width = 200;
				            google_ad_height = 90;
				            //-->
				            </script>
				            <script type="text/javascript"
				            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
				            </script>
			    		</div>
			    	</div>
			    	<div class="row" style="margin-top:20px;">
			    		<div class="col-md-5">
			    			<script type="text/javascript"><!--
				            google_ad_client = "ca-pub-1843029637699785";
				            /* TWinfo - Demo Large Ad */
				            google_ad_slot = "5608844582";
				            google_ad_width = 336;
				            google_ad_height = 280;
				            //-->
				            </script>
				            <script type="text/javascript"
				            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
				            </script>
			    		</div>
			    		<div class="col-md-7">
			    			<script type="text/javascript"><!--
				            google_ad_client = "ca-pub-1843029637699785";
				            /* TWinfo Demo Medium Ad */
				            google_ad_slot = "5771711226";
				            google_ad_width = 300;
				            google_ad_height = 250;
				            //-->
				            </script>
				            <script type="text/javascript"
				            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
				            </script>
			    		</div>
			    	</div>
				</div>
			</div>
		</div>
	    <div id="footer">
	      <div class="container">
	        <p class="text-muted credit">Copyrights &copy; <a href="http://www.tinywall.info">Tinywall Infomedia</a>.</p>
	      </div>
	    </div>

		<!-- Bootstrap core JavaScript -->
	    <script src="../static/lib/bootstrap-3.0.0/js/bootstrap.min.js"></script>
	    <!-- Google Analytics -->
	    <script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-26136964-1']);
		  _gaq.push(['_setDomainName', '.tinywall.info']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
  </body>
</html>
