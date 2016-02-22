<?php
  /*
  *Author: Kevin Barasa
  *Phone : +254724778017
  *Email : kevin.barasa001@gmail.com
  */
  require_once 'core/init.php';
  //$user = DB::getInstance()->query("SELECT username FROM users WHERE username =?", array("Kevin"));
  //$user = DB::getInstance()->get('users', array('username','=','Kevin'));
  $user = DB::getInstance()->query("SELECT * FROM users");
  if (!$user->count()) {
      echo "No User(s)!";
  }
  // else{
  //     //echo $user->first()->username;
  //     foreach ($user->results() as $user) {
  //         echo $user->username, '<br>', $user->email,'<br>',  $user->name,'<br><br>';
  //     }
  // }
  
  // if (Session::exists('success')) {
  //     echo "<p>";
  //     echo Session::flash('success');
  //     echo "</p>";
  // }
  if (Session::exists('home')) {
      echo "<p>";
      echo Session::flash('home');
      echo "</p>";
  }
  $user = new User;
  if ($user->isLoggedIn()) { 
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="CloudCore Technologies">
    <meta name="keyword" content="Stock photography">
    <title>Ivertise Africa | Connecting brands with artists</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.1/dist/flickity.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="ivert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
      $( document ).ready(function() {
      $("#upload").click(function(){
          $("#dynamic").load("load/uploadc.php");
      });
      });
    </script>
  </head>
  <body>
    <section id="container" >
      <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg" style="padding-top:5px;" >
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.php" class="logo"><b><img src="logo.png"></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
          <!--  notification start -->
          <ul class="nav top-menu">
            <!-- settings start -->
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">0</span>
              </a>
              <ul class="dropdown-menu extended inbox">
                <div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green">You have 0 new messages</p>
                </li>
                <li>
                  <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="https://farm7.staticflickr.com/6163/6195546981_200e87ddaf_b.jpg"></span>
                  <span class="subject">
                  <span class="from">Admin</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi, welcome to Ivertisie Africa!
                  </span>
                  </a>
                </li>
                <li>
                  <a href="#">See all messages</a>
                </li>
              </ul>
            </li>
            <!-- inbox dropdown end -->
          </ul>
          <!--  notification end -->
        </div>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="#" id="upload"> <i class="fa fa-upload"></i> Upload Photos</a></li>
            <li><a class="logout" href="logout.php"><i class="fa fa-sign-out"></i> Sign-out </a></li>
          </ul>
        </div>
      </header>
      <!--header end-->
      <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
      <?php include_once 'includes/aside.php'; ?>
    </section>
    <!--/wrapper -->
    </section><!-- /MAIN CONTENT -->
    <section id="main-content">
      <section class="wrapper site-min-height"  id="dynamic">
        <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
        <h1>Stock Images Dashboard</h1>
        <div class="container">
          <div class="row user-menu-container square">
            <!--Users deatails shall be put here-->
          </div>
        </div>
        <div class="row mt gallery js-flickity" data-flickity-options='{ "wrapAround": true ,"imagesLoaded": true,  "pageDots": false, "autoPlay": true}'>
          <?php
            $img = DB::getInstance()->query("SELECT * FROM images WHERE author = '$email' AND genre='stock' ");
            if (!$img->count()) {
            echo "No photos uploaded by you. You need some help doing so?";
            }else{
            //echo $img->first()->username;
            foreach ($img->results() as $item) {
            echo '<div class="gallery-cell col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
            <div class="project">
                <div class="photo-wrapper">
                    <div class="photo">
                      <a class="fancybox" href="assets/images/medium/',$item->url,'"><img class="img-responsive" src="assets/images/medium/',$item->url,'" alt="Your Image has an error loading. Delete & upload new copy"></a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            </div>
            </div>';
            }
            }
            ?>
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        Copyright IvertiseAfrica 2016. 
        <a href="blank.html#" class="go-top">
        <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://npmcdn.com/flickity@1.1/dist/flickity.pkgd.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    <!--script for this page-->
    <script>
      //custom select box
      
      $(function(){
          $('select.styled').customSelect();
      });
      $(document).ready(function() {
      var $btnSets = $('#responsive'),
      $btnLinks = $btnSets.find('a');
      
      $btnLinks.click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.user-menu>div.user-menu-content").removeClass("active");
        $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
      });
      });
      
      $( document ).ready(function() {
      $("[rel='tooltip']").tooltip();
      
      $('.view').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
      );
      });
    </script>
</html>
<?php } else{
  Redirect::to('../');
  } ?>