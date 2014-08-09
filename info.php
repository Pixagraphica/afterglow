<?php
	include("infodata.php");
	$section=$_GET["section"];
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gading Serpong Olympics 8 by SMAK PENABUR GS">
    <meta name="author" content="Pixagraphica - SMAK GS"> <!-- NathanChrs -->
    <link rel="shortcut icon" href=""> <!--TODO -->

    <title>GSO 8 [ Afterglow ] - <?php echo $pagetitles[$section]; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link href="css/resources.css" rel="stylesheet">
    <link href="css/pages.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css" id="holderjs-style"></style>
  
  <style type="text/css">
	body { background: #060606 url(img/pagebackground/<?php echo $section; ?>.jpg) no-repeat center center fixed; 	}
  </style>
 
</head>
  

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand neon-white" href="index.html">GSO 8 : AFTERGLOW</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php" 					data-color="neon-<?php echo $colors["home"]; ?>" 	data-toggle="collapse" data-target=".nav-collapse"> 		<?php echo $pagetitles["home"]; ?> </a></li>
			<li><a href="info.php?section=media" 		data-color="neon-<?php echo $colors["media"]; ?>" 	data-toggle="collapse" data-target=".nav-collapse"> 		<?php echo $pagetitles["media"]; ?> </a></li>
            <li><a href="proposal.pdf" data-toggle="collapse" data-target=".nav-collapse">Proposal</a></li>
            <li class="dropdown">
			  <a class="dropdown-toggle" type="button" id="dropdown-competition" data-toggle="dropdown">
				Competition
				<span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-competition">
				<li><a href="info.php?section=basketball" 	data-color="neon-<?php echo $colors["basketball"]; ?>"	data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["basketball"]; ?> </a></li>
				<li><a href="info.php?section=futsal"		data-color="neon-<?php echo $colors["futsal"]; ?>"		data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["futsal"]; ?> </a></li>
				<li><a href="info.php?section=paskibra"		data-color="neon-<?php echo $colors["paskibra"]; ?>"	data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["paskibra"]; ?> </a></li>
				<li><a href="info.php?section=badminton" 	data-color="neon-<?php echo $colors["badminton"]; ?>"	data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["badminton"]; ?> </a></li>
				<li><a href="info.php?section=bangfest" 	data-color="neon-<?php echo $colors["bangfest"]; ?>"	data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["bangfest"]; ?> </a></li>
				<li><a href="info.php?section=pmr" 			data-color="neon-<?php echo $colors["pmr"]; ?>"			data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["pmr"]; ?> </a></li>
				<li><a href="info.php?section=movie" 		data-color="neon-<?php echo $colors["movie"]; ?>"		data-toggle="collapse" data-target=".nav-collapse">	<?php echo $pagetitles["movie"]; ?> </a></li>
				<li><a href="info.php?section=graffiti" 	data-color="neon-<?php echo $colors["graffiti"]; ?>"	data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["graffiti"]; ?> </a></li>
				<li><a href="info.php?section=dance" 		data-color="neon-<?php echo $colors["dance"]; ?>"		data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["dance"]; ?> </a></li>
				<li><a href="info.php?section=photography" 	data-color="neon-<?php echo $colors["photography"]; ?>"	data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["photography"]; ?> </a></li>	
			  </ul>
			</li>
            <li><a href="info.php?section=contact" 		data-color="neon-<?php echo $colors["media"]; ?>"  			data-toggle="collapse" data-target=".nav-collapse"> <?php echo $pagetitles["media"]; ?> </a></li>
          </ul>
        </div>
      </div>
    </div>
	

    <div class="container-fluid">
      <div class="row">
        <div class="sidebar">
			<ul id="sidebar" class="nav nav-sidebar neon-white">	
				<li><a href="index.php" 					data-color="neon-<?php echo $colors["home"]; ?>"> 		<?php echo $pagetitles["home"]; ?> </a></li>
				<li><a href="info.php?section=media" 		data-color="neon-<?php echo $colors["media"]; ?>"> 		<?php echo $pagetitles["media"]; ?> </a></li>
				<li><a href="info.php?section=basketball" 	data-color="neon-<?php echo $colors["basketball"]; ?>"> <?php echo $pagetitles["basketball"]; ?> </a></li>
				<li><a href="info.php?section=futsal"		data-color="neon-<?php echo $colors["futsal"]; ?>"> 	<?php echo $pagetitles["futsal"]; ?> </a></li>
				<li><a href="info.php?section=paskibra"		data-color="neon-<?php echo $colors["paskibra"]; ?>"> 	<?php echo $pagetitles["paskibra"]; ?> </a></li>
				<li><a href="info.php?section=badminton" 	data-color="neon-<?php echo $colors["badminton"]; ?>"> 	<?php echo $pagetitles["badminton"]; ?> </a></li>
				<li><a href="info.php?section=bangfest" 	data-color="neon-<?php echo $colors["bangfest"]; ?>"> 	<?php echo $pagetitles["bangfest"]; ?> </a></li>
				<li><a href="info.php?section=pmr" 			data-color="neon-<?php echo $colors["pmr"]; ?>"> 		<?php echo $pagetitles["pmr"]; ?> </a></li>
				<li><a href="info.php?section=movie" 		data-color="neon-<?php echo $colors["movie"]; ?>"> 		<?php echo $pagetitles["movie"]; ?> </a></li>
				<li><a href="info.php?section=graffiti" 	data-color="neon-<?php echo $colors["graffiti"]; ?>"> 	<?php echo $pagetitles["graffiti"]; ?> </a></li>
				<li><a href="info.php?section=dance" 		data-color="neon-<?php echo $colors["dance"]; ?>"> 		<?php echo $pagetitles["dance"]; ?> </a></li>
				<li><a href="info.php?section=photography" 	data-color="neon-<?php echo $colors["photography"]; ?>"><?php echo $pagetitles["photography"]; ?> </a></li>	
			</ul>
			<div id="sidebar-glow" class="glow-neon-<?php echo $colors[$section]; ?>"></div>
        </div>
		
		
        <div id="main-content" class="main" data-color="neon-<?php echo $colors[$section]; ?>">
			
			<div class="page-title neon-<?php echo $colors[$section]; ?>"> <?php echo $pagetitles[$section]; ?> </div>
			
			<?php include("info/" . $section . ".php"); ?>
			
        </div>
      </div>
    </div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/sidebar.js"></script>
	<script src="js/TweenMax.min.js"></script>
	
	<script>
	$("#sidebar > li > a").hover(
       function(){ $(this).addClass(this.getAttribute('data-color')) },
       function(){ $(this).removeClass(this.getAttribute('data-color')) }
	);
	initGlow();
	</script>
  

</body></html>
