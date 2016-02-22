<?php
session_start();

 require_once 'templates/header.php'; ?>

    <link rel="stylesheet" type="text/css" href="Grid/css/default.css" />
    <link rel="stylesheet" type="text/css" href="Grid/css/component.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<style type="text/css">

#submit{
  margin-left:-5px;
  border-radius:px;
  padding:5px;
  margin-left:-9px;
  width:50px;
  height:50px;
}
img.logo{border:0px;}
img{border:0.2px solid black;}
#register{
  border-radius:5px;
  color:black;
  border:1px solid #177856;
  margin-top:25px;
  padding:5px;
  

}
}
#login{
  border-radius:5px;
  color:black;
  border:1px solid #177856;
  margin-top:25px;



}
ul.nav-tabs{padding-left:400px !important;}
i#no{font-size:13px;}
#tag{ 
  width:80%;
  padding:11px;

    
    
  }
div.search{width:60%;}
.tab-content{padding-left:120px;}
</style>
</head>
<body>
  <?php
   $page_title="Index";
  ?>
  <div class="header">
    <div class="container">
      <div class="logo">
        <h1><a href="#"><img class="logo" src="assets/img/logo.png" alt=""></a></h1>
      </div>
      
      <div class="top_right" style="color:#177856!important;">
      <ul><li><a href="images.php">Images</a></li>
      <li><a href="models.php">Models</a></li>
      <li><a href="photography.php">Photographers</a></li>
      <li><a href="mua.php">MUA</a></li></ul>
        <ul>  <li><i id ="no"class="fa fa-phone">+254705825655</i></li>
          <li><a href="register.php"><i class="fa fa-user-plus"></i> Sign  Up</a></li>|
          <li class="login">
          <div id="loginContainer"><a href="users/login.php" id="loginButton"><span><i class="fa fa-user"></i> Log  in</span></a>
              <div id="loginBox">
                <form id="loginForm" method="post">
                  <fieldset id="body">
                  
                    <fieldset>
                    <i class="fa fa-user">Log in</i>
                      <label for="usernmae">Email Address</label>
                      <input type="text" name="username" id="email">
                    </fieldset>
                    <fieldset>
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password">
                    </fieldset>

                    <label for="checkbox">
                      <input type="checkbox" name="remember" id="checkbox"> <i>Remember me</i></label>
                    <button type="submit"  id="register" value="Sign in">Sign in</button>
                  </fieldset>
                  <span><a href="#">Forgot your password?</a></span>
                </form>
              </div>
            </div>
          </li>
        </ul>
      </div>
  

      <div class="modify">
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">

                    <li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
                        <a href="templates/cart.php">
                            <?php
              // count products in cart
                            $cart_count=count($_SESSION['cart_items']);
                            ?>
                            <i class="fa fa-cart-plus"> </i> <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                        </a>
                  </li>
                </ul>
              </div><!--/.nav-collapse -->
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="banner">
    <div class="container">
      <div class="span_1_of_1">
          <div class="search">
            <ul class="nav1">
                <li id="search">
                                            <li id="options">
            <a href="#">All Images</a>
            <ul class="subnav">
              <li><a href="#">Photography</a></li>
              <li><a href="#">Models</a></li>
              <li><a href="#">Services</a></li>
            </ul>
          </li>
            <form action="search.php" method="post">

              <div class="ui-widget">
              <input placeholder="Help!" type="text" id="tag" name="search_text" required="required" > <button id="submit" type="submit" class=" button btn-primary" ><i class="fa fa-search"></i></button></input>

              </div>

            </form>
          </li>


                </ul>
              </div>

      </div>
    </div>
    

    <h3 id="h3">African Commercial Photography through Stock Photography and Assignment Photography. We also provide Models and Makeup artist services for your advertising needs.</h3>
  </div>
  <section class="category" >
      <div class="container">
      <div class="row">
      <div>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All</a></li>
         <li role="presentation"><a href="#images" aria-controls="photo" role="tab" data-toggle="tab">Stock</a></li>
        <li role="presentation"><a href="#photo" aria-controls="photo" role="tab" data-toggle="tab">Photography</a></li>
        <li role="presentation"><a href="#models" aria-controls="models" role="tab" data-toggle="tab">Models</a></li>
    <li role="presentation"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">MUA</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="home">
        
        
<div class="main">
      <ul id="og-grid" class="og-grid">
            <?php
              $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");

              mysql_select_db( "mjedevel_ia", $link);

              // Check connection
              if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                }





             // Attempt select query execution
              $sql = "SELECT * FROM images";
              if($result = mysql_query($sql)){
                    if(mysql_num_rows($result) > 0){
                      while($row = mysql_fetch_array($result)){

                        $file_path_thumb = 'users/assets/images/thumbs/';
                        $file_path_small = 'users/assets/images/small/';
                        $file_path_medium = 'users/assets/images/medium/';
                        $file_path_large= 'users/assets/images/original/';

                        $start =  $row['url'];
                        $title = $row['title'];
                        $id  = $row['id'];
                         $genre = $row['genre'];

                        $ref = $genre.".php";
                        $price = '$'.' '.$row['price'];
                        $price_medium = '$'.' '.$row['price'];
                        $price_large = '$'.' '.$row['price'];

                        $copywrite = $row['author'];
                        $description = $row['description'];

                        $src_water=$file_path_small.$start;
                        $src_medium=$file_path_medium.$start;
                        $src_large=$file_path_large.$start;
                        $src = $file_path_thumb.$start;

                        $test = getimagesize($file_path_thumb.$start);
                        $test_medium = getimagesize($file_path_medium.$start);
                        $test_large = getimagesize($file_path_large.$start);

                        $filesize = round(filesize($src_water) * .0009765625)."KB";
                        $size = round(filesize($src_water) * .0009765625)."KB";
                        $size_medium = round(filesize($src_medium) * .0009765625)."KB";
                        $size_large = round(filesize($src_large) * .0009765625* .0009765625)."MB";


                        $width = $test[0];
                        $height = $test[1];
                        $width_medium = $test_medium[0];
                        $height_medium = $test_medium[1];
                        $width_large = $test_large[0];
                        $height_large = $test_large[1];



                        $dimension_small = $width."x".$height."px". " "."(72dpi)";
                        $dimension_medium = $width_medium."x".$height_medium.""."px"."  "."(150dpi)";
                        $dimension_large = $width_large."x".$height_large.""."px". " "."(300dpi)";

                   $image_category = "<form>
                                          <input type='radio' name='size' value='small'> Small<br>
                                          <input type='radio' name='size' value='medium' checked> Medium<br>
                                          <input type='radio' name='size' value='large'> Large
                                      </form>";
                        $download ="<a id='download' href='templates/add_to_cart.php?id={$id}&name={$title}'>Add To Cart</a>";


  $_SESSION['regName'] = "michael";


                      ?>
                      <li>
    <a href="<?php echo $ref ?>"><img src="<?php echo $src ?>" alt="not in folder"/></a>
</form>
                        </li>
<?php

                      }
                      // Close result set
                      mysql_free_result($result);
                    } else{
                  }
                } else{
            }
            // Close connection
            mysql_close($link);
          ?>
      </ul>
  </div>

        </div>
  <div role="tabpanel" class="tab-pane" id="images">
<div class="main">
      <ul id="og-grid" class="og-grid">
            <?php
              $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");

              mysql_select_db( "mjedevel_ia", $link);

              // Check connection
              if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                }





             // Attempt select query execution
              $sql = "SELECT * FROM images WHERE `genre` = 'stock'";
              if($result = mysql_query($sql)){
                    if(mysql_num_rows($result) > 0){
                      while($row = mysql_fetch_array($result)){

                        $file_path_thumb = 'users/assets/images/thumbs/';
                        $file_path_small = 'users/assets/images/small/';
                        $file_path_medium = 'users/assets/images/medium/';
                        $file_path_large= 'users/assets/images/original/';

                        $start =  $row['url'];
                        $title = $row['title'];
                        $id  = $row['id'];
                         $genre = $row['genre'];

                        $ref = $genre.".php";
                        $price = '$'.' '.$row['price'];
                        $price_medium = '$'.' '.$row['price'];
                        $price_large = '$'.' '.$row['price'];

                        $copywrite = $row['author'];
                        $description = $row['description'];

                        $src_water=$file_path_small.$start;
                        $src_medium=$file_path_medium.$start;
                        $src_large=$file_path_large.$start;
                        $src = $file_path_thumb.$start;

                        $test = getimagesize($file_path_thumb.$start);
                        $test_medium = getimagesize($file_path_medium.$start);
                        $test_large = getimagesize($file_path_large.$start);

                        $filesize = round(filesize($src_water) * .0009765625)."KB";
                        $size = round(filesize($src_water) * .0009765625)."KB";
                        $size_medium = round(filesize($src_medium) * .0009765625)."KB";
                        $size_large = round(filesize($src_large) * .0009765625* .0009765625)."MB";


                        $width = $test[0];
                        $height = $test[1];
                        $width_medium = $test_medium[0];
                        $height_medium = $test_medium[1];
                        $width_large = $test_large[0];
                        $height_large = $test_large[1];



                        $dimension_small = $width."x".$height."px". " "."(72dpi)";
                        $dimension_medium = $width_medium."x".$height_medium.""."px"."  "."(150dpi)";
                        $dimension_large = $width_large."x".$height_large.""."px". " "."(300dpi)";

                   $image_category = "<form>
                                          <input type='radio' name='size' value='small'> Small<br>
                                          <input type='radio' name='size' value='medium' checked> Medium<br>
                                          <input type='radio' name='size' value='large'> Large
                                      </form>";
                        $download ="<a id='download' href='templates/add_to_cart.php?id={$id}&name={$title}'>Add To Cart</a>";


  $_SESSION['regName'] = "michael";


                      ?>
                      <li>
    <a href="<?php echo $ref ?>"><img src="<?php echo $src ?>" alt="not in folder"/></a>
</form>
                        </li>
<?php

                      }
                      // Close result set
                      mysql_free_result($result);
                    } else{
                  }
                } else{
            }
            // Close connection
            mysql_close($link);
          ?>
      </ul>
          
          </div>
          
          
          
          
        </div>
        <div role="tabpanel" class="tab-pane" id="photo">

       <ul id="og-grid" class="og-grid">
            <?php
              $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");

              mysql_select_db( "mjedevel_ia", $link);

              // Check connection
              if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                }





             // Attempt select query execution
              $sql = "SELECT * FROM images WHERE `genre` = 'photography'";
              if($result = mysql_query($sql)){
                    if(mysql_num_rows($result) > 0){
                      while($row = mysql_fetch_array($result)){

                        $file_path_thumb = 'users/assets/images/thumbs/';
                        $file_path_small = 'users/assets/images/small/';
                        $file_path_medium = 'users/assets/images/medium/';
                        $file_path_large= 'users/assets/images/original/';

                        $start =  $row['url'];
                        $title = $row['title'];
                        $id  = $row['id'];
                         $genre = $row['genre'];

                        $ref = $genre.".php";
                        $price = '$'.' '.$row['price'];
                        $price_medium = '$'.' '.$row['price'];
                        $price_large = '$'.' '.$row['price'];

                        $copywrite = $row['author'];
                        $description = $row['description'];

                        $src_water=$file_path_small.$start;
                        $src_medium=$file_path_medium.$start;
                        $src_large=$file_path_large.$start;
                        $src = $file_path_thumb.$start;

                        $test = getimagesize($file_path_thumb.$start);
                        $test_medium = getimagesize($file_path_medium.$start);
                        $test_large = getimagesize($file_path_large.$start);

                        $filesize = round(filesize($src_water) * .0009765625)."KB";
                        $size = round(filesize($src_water) * .0009765625)."KB";
                        $size_medium = round(filesize($src_medium) * .0009765625)."KB";
                        $size_large = round(filesize($src_large) * .0009765625* .0009765625)."MB";


                        $width = $test[0];
                        $height = $test[1];
                        $width_medium = $test_medium[0];
                        $height_medium = $test_medium[1];
                        $width_large = $test_large[0];
                        $height_large = $test_large[1];



                        $dimension_small = $width."x".$height."px". " "."(72dpi)";
                        $dimension_medium = $width_medium."x".$height_medium.""."px"."  "."(150dpi)";
                        $dimension_large = $width_large."x".$height_large.""."px". " "."(300dpi)";

                   $image_category = "<form>
                                          <input type='radio' name='size' value='small'> Small<br>
                                          <input type='radio' name='size' value='medium' checked> Medium<br>
                                          <input type='radio' name='size' value='large'> Large
                                      </form>";
                        $download ="<a id='download' href='templates/add_to_cart.php?id={$id}&name={$title}'>Add To Cart</a>";


  $_SESSION['regName'] = "michael";


                      ?>
                      <li>
    <a href="<?php echo $ref ?>"><img src="<?php echo $src ?>" alt="not in folder"/></a>
</form>
                        </li>
<?php

                      }
                      // Close result set
                      mysql_free_result($result);
                    } else{
                  }
                } else{
            }
            // Close connection
            mysql_close($link);
          ?>
      </ul>
          
        </div>

        <div role="tabpanel" class="tab-pane" id="models">

<ul id="og-grid" class="og-grid">
                  <ul id="og-grid" class="og-grid">
            <?php
              $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");

              mysql_select_db( "mjedevel_ia", $link);

              // Check connection
              if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                }





             // Attempt select query execution
              $sql = "SELECT * FROM images WHERE `genre` = 'models'";
              if($result = mysql_query($sql)){
                    if(mysql_num_rows($result) > 0){
                      while($row = mysql_fetch_array($result)){

                        $file_path_thumb = 'users/assets/images/thumbs/';
                        $file_path_small = 'users/assets/images/small/';
                        $file_path_medium = 'users/assets/images/medium/';
                        $file_path_large= 'users/assets/images/original/';

                        $start =  $row['url'];
                        $title = $row['title'];
                        $id  = $row['id'];
                         $genre = $row['genre'];

                        $ref = $genre.".php";
                        $price = '$'.' '.$row['price'];
                        $price_medium = '$'.' '.$row['price'];
                        $price_large = '$'.' '.$row['price'];

                        $copywrite = $row['author'];
                        $description = $row['description'];

                        $src_water=$file_path_small.$start;
                        $src_medium=$file_path_medium.$start;
                        $src_large=$file_path_large.$start;
                        $src = $file_path_thumb.$start;

                        $test = getimagesize($file_path_thumb.$start);
                        $test_medium = getimagesize($file_path_medium.$start);
                        $test_large = getimagesize($file_path_large.$start);

                        $filesize = round(filesize($src_water) * .0009765625)."KB";
                        $size = round(filesize($src_water) * .0009765625)."KB";
                        $size_medium = round(filesize($src_medium) * .0009765625)."KB";
                        $size_large = round(filesize($src_large) * .0009765625* .0009765625)."MB";


                        $width = $test[0];
                        $height = $test[1];
                        $width_medium = $test_medium[0];
                        $height_medium = $test_medium[1];
                        $width_large = $test_large[0];
                        $height_large = $test_large[1];



                        $dimension_small = $width."x".$height."px". " "."(72dpi)";
                        $dimension_medium = $width_medium."x".$height_medium.""."px"."  "."(150dpi)";
                        $dimension_large = $width_large."x".$height_large.""."px". " "."(300dpi)";

                   $image_category = "<form>
                                          <input type='radio' name='size' value='small'> Small<br>
                                          <input type='radio' name='size' value='medium' checked> Medium<br>
                                          <input type='radio' name='size' value='large'> Large
                                      </form>";
                        $download ="<a id='download' href='templates/add_to_cart.php?id={$id}&name={$title}'>Add To Cart</a>";


  $_SESSION['regName'] = "michael";


                      ?>
                      <li>
    <a href="<?php echo $ref ?>"><img src="<?php echo $src ?>" alt="not in folder"/></a>
</form>
                        </li>
<?php

                      }
                      // Close result set
                      mysql_free_result($result);
                    } else{
                  }
                } else{
            }
            // Close connection
            mysql_close($link);
          ?>
      </ul>
      </div>

  <div role="tabpanel" class="tab-pane" id="services">

      <ul id="og-grid" class="og-grid">
            <?php
              $link = mysql_connect("localhost", "mjedevel_kev", "Token2016");

              mysql_select_db( "mjedevel_ia", $link);

              // Check connection
              if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                }





             // Attempt select query execution
              $sql = "SELECT * FROM images WHERE `genre` = 'mua'";
              if($result = mysql_query($sql)){
                    if(mysql_num_rows($result) > 0){
                      while($row = mysql_fetch_array($result)){

                        $file_path_thumb = 'users/assets/images/thumbs/';
                        $file_path_small = 'users/assets/images/small/';
                        $file_path_medium = 'users/assets/images/medium/';
                        $file_path_large= 'users/assets/images/original/';

                        $start =  $row['url'];
                        $title = $row['title'];
                        $id  = $row['id'];
                         $genre = $row['genre'];

                        $ref = $genre.".php";
                        $price = '$'.' '.$row['price'];
                        $price_medium = '$'.' '.$row['price'];
                        $price_large = '$'.' '.$row['price'];

                        $copywrite = $row['author'];
                        $description = $row['description'];

                        $src_water=$file_path_small.$start;
                        $src_medium=$file_path_medium.$start;
                        $src_large=$file_path_large.$start;
                        $src = $file_path_thumb.$start;

                        $test = getimagesize($file_path_thumb.$start);
                        $test_medium = getimagesize($file_path_medium.$start);
                        $test_large = getimagesize($file_path_large.$start);

                        $filesize = round(filesize($src_water) * .0009765625)."KB";
                        $size = round(filesize($src_water) * .0009765625)."KB";
                        $size_medium = round(filesize($src_medium) * .0009765625)."KB";
                        $size_large = round(filesize($src_large) * .0009765625* .0009765625)."MB";


                        $width = $test[0];
                        $height = $test[1];
                        $width_medium = $test_medium[0];
                        $height_medium = $test_medium[1];
                        $width_large = $test_large[0];
                        $height_large = $test_large[1];



                        $dimension_small = $width."x".$height."px". " "."(72dpi)";
                        $dimension_medium = $width_medium."x".$height_medium.""."px"."  "."(150dpi)";
                        $dimension_large = $width_large."x".$height_large.""."px". " "."(300dpi)";

                   $image_category = "<form>
                                          <input type='radio' name='size' value='small'> Small<br>
                                          <input type='radio' name='size' value='medium' checked> Medium<br>
                                          <input type='radio' name='size' value='large'> Large
                                      </form>";
                        $download ="<a id='download' href='templates/add_to_cart.php?id={$id}&name={$title}'>Add To Cart</a>";


  $_SESSION['regName'] = "michael";


                      ?>
                      <li>
    <a href="<?php echo $ref ?>"><img src="<?php echo $src ?>" alt="not in folder"/></a>
</form>
                        </li>
<?php

                      }
                      // Close result set
                      mysql_free_result($result);
                    } else{
                  }
                } else{
            }
            // Close connection
            mysql_close($link);
          ?>
      </ul>
      </div>
    </div>
    </div>
    </div>
  </div>
  
    </section>
   

    <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>


  <script src="Grid/js/grid.js"></script>
  <script>
    $(function(){
      Grid.init();
    });
  </script>

  <?php require_once 'templates/footer.php'; ?>
</body>
</html>