<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<script type="text/javascript" src="<?=base_url('js/jquery-2.0.1.min.js')?>"></script>
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-114x114.png">

   <script type="text/javascript" src="<?=base_url('js/bootstrap.min.js')?>"></script>
	<link rel="stylesheet" href="<?=base_url('css/bootstrap-responsive.min.css')?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>" type="text/css" media="screen" />
   <link rel="stylesheet" href="<?=base_url('css/tollan.css')?>" type="text/css" media="screen" />

    <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-transition.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-alert.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-modal.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-dropdown.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-scrollspy.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tab.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tooltip.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-popover.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-button.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-collapse.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-carousel.js"></script>
  <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-typeahead.js"></script>
	
	
	<!--<script src="http://code.jquery.com/jquery.min.js"></script>-->

</head>
<body>
<div class="container">

<div class="row">
  <div id="myCarousel" class="carousel slide">
  	<?=$images?>
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">WebApp</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>                    
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>    
           <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div>
</div>


             <!--   <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?=base_url('img/20985074-2.jpg')?>" alt="medio">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?=base_url('img/21474323-2.png')?>" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?=base_url('img/35090149-2.jpg')?>" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                <div class="item">
                    <img src="<?=base_url('img/35833326-2.png')?>" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div> -->



    
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
      <h1>Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
      <div class="span4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
      </div>
      <div class="span4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
      <div class="span4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
      </div>
    </div>
    <hr>
    <footer>
      <p>&copy; Company 2012</p>
    </footer>

  </div> <!-- /container -->

  <script type="text/javascript">

  $(document).ready(function() {
    $(".collapse").collapse()
    $('#myCarousel').carousel('cycle'); 
          $('#myCarousel').carousel({  
                interval: 2000 // in milliseconds  
          })  
  });
  </script>

  <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  
</body>
</html>