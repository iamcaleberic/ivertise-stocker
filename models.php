<?php 
session_start();

require_once 'templates/header.php'; ?>

		<link rel="stylesheet" type="text/css" href="Grid/css/default.css" />
		<link rel="stylesheet" type="text/css" href="Grid/css/component.css" />
		<link rel="stylesheet" href="mike/table.css" type="text/css"/>

		<script src="Grid/js/modernizr.custom.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style type="text/css">
select{border-radius:5px;
	border:1px solid #177856;
}
</style>
</head>
<body>

<?php
	 $page_title="Index";
	?>

     <div class="header">
      <div class="container">
        <div class="logo">
          <h1><a href="./index.php"><img src="assets/img/logo.png" alt=""></a></h1>
        </div>
        <div class="top_right" style="color:#177856!important;">
        <ul><li><a href="stock.php">Images</a></li>
			<li><a href="models.php">Models</a></li>
			<li><a href="photography.php">Photography</a></li>
			<li><a href="mua.php">MUA</a></li></ul>
          <ul>
            <li><a href="users/register.php"><i class="fa fa-user-plus"> Register</i></a></li>|
            <li class="login">
              <div id="loginContainer"><a href="#" id="loginButton"><span><i class="fa fa-user"> Login</i></span></a>
                <div id="loginBox">
                  <form id="loginForm">
                    <fieldset id="body">
                      <fieldset>
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email">
                      </fieldset>
                      <fieldset>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                      </fieldset>
                      <input type="submit" id="login" value="Sign in">
                      <label for="checkbox">
                        <input type="checkbox" id="checkbox"> <i>Remember me</i></label>
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
		<i class ="fa fa-cart-plus"></i> <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
				</a>
			</li>
		</ul>
	</div>
<!--/.nav-collapse -->
        <div class="clearfix"></div>
      </div>
    </div>

    <div class="stock_box">
      <div class="col-md-2 stock_left">
        <div class="w_sidebar">
          <section class="sky-form">
            <h4>Models</h4>
            <div class="col col-4">
              
            <div class="col col-4">
              
                <select name="gender" id="gender" class="form-control">
                									<option value="1">Any</option>
											<option value="2">Male</option>
											<option value="3">Female</option>
										</select>
             
            </div> 
          </section>
          <section class="sky-form">
           <h4>Nationality</h4>
           <div class="col col-4">
          <select name="country"  class="form-control">
											<option value="1">Any Nationality</option>
											<option value="2">Kenyan</option>
											<option value="3">East African</option>
											<option value="4">Afican</option>
											<option value="5">European</option>
											<option value="6">Other</option> 
											
										</select>
										</div>
           
            </section>
         <section class="sky-form">
            <h4> Hair Colour</h4>
            <div class="col col-4">
              <select name="country"  class="form-control">
											<option value="1">Any Colour</option>
											<option value="2">Afro-carribean</option>
											<option value="3">Red</option>
											<option value="4">Brunnete</option>
											<option value="5">Other</option>
											
											
										</select>
           
            </div>
          </section>
          <section class="sky-form">
            <h4>Age</h4>
            <div class="col col-4">
              			<select name="age" class="form-control">
											<option value="1">5 - 10</option>
											<option value="2">11 - 20</option>
											<option value="3">21 - 30</option>
											<option value="4">31 - 40</option>
											<option value="5">41 - 50</option>
											<option value="5">51 - 60</option>										
										</select>
            </div>
             <section class="sky-form">
             <h4>Height</h4>
            	<div class="col col-4">
										<select name="height"  class="form-control">
											<option value="1">30 - 40</option>
											<option value="2">41 - 50</option>
											<option value="3">51 - 60</option>
											<option value="4">61 - 70</option>
											<option value="5">71 - 80</option>
										</select>
									</div>  
									</section>
									
									   <section class="sky-form">
             <h4>Waist</h4>
            	<div class="col col-4">
										<select name="waist"  class="form-control">
											<option value="1">30 - 40</option>
											<option value="2">41 - 50</option>
											<option value="3">51 - 60</option>
											<option value="4">61 - 70</option>
											<option value="5">71 - 80</option>
										</select>
				</div>  
									</section>
									
									
									
									
									
          </div>
        </div>
      </div>


<div class="main">
			<ul id="og-grid" class="og-grid">
						<?php
							/* Attempt MySQL server connection. Assuming you are running MySQL
							server with default setting (user 'root' with no password) */
							$link = mysql_connect("localhost", "mjedevel_kev", "Token2016");
							
							mysql_select_db( "mjedevel_ia", $link);
							// Check connection
							if($link === false){
								die("ERROR: Could not connect. " . mysql_connect_error());
								}
                //declaring variable
                $input = $_POST["search_text"];
						 // Attempt select query execution
						  $sql = "SELECT * FROM images WHERE keywords LIKE '%$input%' or title LIKE '%$input%' ";

							if($result = mysql_query($sql,$link)){
										if(mysql_num_rows($result) > 0){
											while($row = mysql_fetch_array($result)){
												$file_path_thumb = 'assets/images/thumbs/';
												$file_path_small = 'assets/images/small/';
												$file_path_medium = 'assets/images/medium/';
												$file_path_large= 'assets/images/original/';

												$start =  $row['url'];
												$title = $row['title'];
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

												$filesize = round(filesize($src_water) * .0009765625)."kb";
												$size = round(filesize($src_water) * .0009765625)."kb";
												$size_medium = round(filesize($src_medium) * .0009765625)."kb";
												$size_large = round(filesize($src_large) * .0009765625* .0009765625)."mb";


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
  							 													<input type='radio' name='gender' value='male' checked> small<br>
  																				<input type='radio' name='gender' value='female'> medium<br>
  																				<input type='radio' name='gender' value='other'> large
              												</form>";
										  $download ="<a id='download' href='templates/add_to_cart.php?id={$id}&name={$title}'>Add To Cart</a>";




											?>
											<li>
												<a href="" data-largesrc="<?php echo $src_water ?>" data-title="<?php echo $title ?>"
														data-price="<?php echo $price ?>" data-price_medium="<?php echo $price_medium ?>" data-price_large="<?php echo $price_large ?>"
														 data-size="<?php echo $size ?>"  data-size_medium="<?php echo $size_medium ?>"   data-size_large="<?php echo $size_large ?>"
															data-description="<?php echo $description  ?>" data-copywrite="<?php echo $copywrite ?>"
														data-image_category="<?php echo $image_category  ?>" data-dimension_small="<?php echo $dimension_small ?>"
 													data-dimension_medium="<?php echo $dimension_medium ?>"    data-dimension_large="<?php echo $dimension_large ?>"
														 data-download="<?php echo $download ?>"
														 data><img src="<?php echo $src ?>" alt="not in folder"/>
													</a>
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
	<script src="Grid/js/grid.js"></script>
	<script>
		$(function(){
			Grid.init();
		});
	</script>
	<?php require_once 'templates/footer.php'; ?>
</body>
</html>