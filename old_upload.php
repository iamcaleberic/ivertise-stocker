<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Ivertise | Upload</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    input.form-control{border:1px solid #177856;
    		border-radius:5px;
    		
    
    }
    textarea.form-control{border:1px solid #177856;
    		border-radius:5px;
    		
    
    }
    </style>
  </head>

  <body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div id="login-page">
	  	<div class="container">
              <form class="form-login" action="uploaded.php" method="post" enctype="multipart/form-data">
		                      <h2 class="form-login-heading">Upload Image</h2>
                  <div class="login-wrap">

                      <input type="text" name="title"  class="form-control" placeholder="Image Title" required/>

                              <br>
                      <input type="number" name="price"  class="form-control" placeholder="Image Price" required>
                              <br>
                      <input type="text" name="author"  class="form-control" placeholder="Author" required>
                              <br>
                      <label for="sel1">licence</label>
                      <select name="category" class="form-control" id="sel1">
                              <option>Editorial</option>
                               <option>Rights Managed</option>
                               <option>Royalty Free</option>
                      </select>
                              <br>
                  

                      release form<input type="file" name="release"  class="form-control" placeholder="release Form" autofocus required>
		                          <br>

                      select image<input type="file" name="image_file" class="form-control" placeholder="Image Location" autofocus required>
                              <br>

                      <label for="comment">Description</label>
                      <textarea class="form-control" rows="4" name="description"></textarea>
                              <br>
                               <label for="keyword">Keywords</label>
                      <textarea class="form-control" rows="2" placeholder="eg..people,2016" name="keywords"></textarea>
                  </div>
                              <br>
                      <button  class="btn btn-theme btn-block" name="submit" href="index.html" type="submit"><i class="fa fa-lock"></i> Upload</button>
		                          <hr>
                </div>
		      </form>

	  	</div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("", {speed: 200});
    </script>


  </body>
</html>