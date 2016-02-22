<?php 
session_start();

require_once 'templates/header.php'; ?>

		<link rel="stylesheet" type="text/css" href="Grid/css/default.css" />
		<link rel="stylesheet" type="text/css" href="Grid/css/component.css" />
		<link rel="stylesheet" href="mike/table.css" type="text/css"/>

		<script src="Grid/js/modernizr.custom.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style type="text/css">
div.body{
	padding-right:200px;
	padding-left:200px;
	font-weight:400;
	padding-top:50px;
	font-size:20px;
	padding-bottom:200px;
}
button.en{
	border-radius:5px;
	border:1px solid #177856;
	padding:5px;
	margin-top:30px;

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
            <li><a href="users/register.php"><i class="fa fa-user-plus">Register</i></a></li>|
            <li class="login">
              <div id="loginContainer"><a href="#" id="loginButton"><i class="fa fa-user"> Login</i><span></span></a>
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
      
      
<div class="body"> <strong><center>Photography</center></strong><br>
 Photography is one of the most powerful tools for persuasion that the human race has devised. But not all pictures are equally effective.

While copywriters may spend hours producing an eye-catching headline and copy that explains the benefits of a product, it’s the image that first attracts the viewer. It’s also the last thing the viewer usually remembers after turning the page.

No one can guarantee you a great image for your next project, but you can vastly improve your chances by letting us match your needs with a photographer’s strengths.

We will put you in a contact with a photographer who understands what you need and can bring experience and creativity to bear on solving your problems. 
<a href="support.php"><button class ="en">Enquire</button></a>
</div>

<?php require_once 'templates/footer.php'; ?>
</body>
</html>