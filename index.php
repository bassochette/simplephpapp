<!DOCTYPE html>
<html>
  <head>
    <title>Opswork, Demo</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>


     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">Opswork</a>  
        </div>
      </div>
    </div>
    <div class="container" id="meh">
    <h1>Libre en fêtes 2014</h1>
   
    <H2>Un site ultra trop bien pour la démo Opswork</H2>
    <h2><?php echo gethostname(); ?></h2>
    <P>
    <?php
      $message=shell_exec("free -m | grep Swap | awk 'BEGIN END {print <span class=\"label label-info\">$1</span> <span class="badge badge-info">$2</span>$}'");
      print_r($message);
    ?> 
    <P> 
  </div>
  </body>
</html>