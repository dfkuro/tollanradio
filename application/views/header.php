<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Bootstrap, from Twitter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="<?=base_url('css/bootstrap.css')?>" rel="stylesheet">
  <style type="text/css">
    body { padding-top: 60px; padding-bottom: 40px; }
  </style>
  <link href="<?=base_url('css/bootstrap-responsive.css')?>" rel="stylesheet">

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-114x114.png">

  <!--<script type="text/javascript" src="<?=base_url('js/bootstrap.min.js')?>"></script>
  <link rel="stylesheet" href="<?=base_url('css/bootstrap-responsive.min.css')?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>" type="text/css" media="screen" />-->
  <link rel="stylesheet" href="<?=base_url('css/tollan.css')?>" type="text/css" media="screen" />
  
  <script src="<?=base_url('js/jquery-2.0.2.min.js')?>"></script>
  <!--<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>-->
  <script src="<?=base_url('js/bootstrap-transition.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-transition.js"></script>-->
  <script src="<?=base_url('js/bootstrap-alert.js')?>"></script>
  <!--script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-alert.js"></script>-->
  <script src="<?=base_url('js/bootstrap-modal.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-modal.js"></script>-->
  <script src="<?=base_url('js/bootstrap-dropdown.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-dropdown.js"></script>-->
  <script src="<?=base_url('js/bootstrap-scrollspy.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-scrollspy.js"></script>-->
  <script src="<?=base_url('js/bootstrap-tab.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-tab.js"></script>-->
  <script src="<?=base_url('js/bootstrap-tooltip.js')?>"></script>
  <!--script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-tooltip.js"></script>-->
  <script src="<?=base_url('js/bootstrap-popover.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-popover.js"></script>-->
  <script src="<?=base_url('js/bootstrap-button.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-button.js"></script>-->
  <script src="<?=base_url('js/bootstrap-collapse.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-collapse.js"></script>-->
  <script src="<?=base_url('js/bootstrap-carousel.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-carousel.js"></script>-->
  <script src="<?=base_url('js/bootstrap-typeahead.js')?>"></script>
  <!--<script type="text/javascript" src="https://rawgithub.com/twitter/bootstrap/master/js/bootstrap-typeahead.js"></script>-->
  
  <!-- fonts -->
  <link href='http://fonts.googleapis.com/css?family=Homenaje' rel='stylesheet' type='text/css'>

  <script src="<?=base_url('js/tollanradio.js')?>"></script>
</head>
<body>
<div  class="container">

  <div id="myCarousel" class="carousel slide">
  <?=$images?>  

  <div class="navbar ">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Project name</a>
        <div class="nav-collapse">
          <ul class="nav">
            <?php $active = ($this->router->fetch_class() == 'inicio' ) ? 'active' : 'nulo' ?>
            <li class="<?=$inicio?>"><?=anchor(base_url(), "inicio")?></a></li>
            <li><a href="#programacion">Programacion</a></li>
            <li class="<?=$acerca?>"><?=anchor("acerca_de_nosotros", "Acerca de nosotros")?></li>
            <li><a href="#contacto">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>




    

    

  