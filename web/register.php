<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Mattress A Ecommerce Category Flat Bootstrap Responsive Website Template | Register :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<?php 
						session_start();
						header('Content-Type: text/html; charset=ISO-8859-1');
						?>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="#"><i class="facebok"> </i></a></li>
					<li><a href="#"><i class="twiter"> </i></a></li>
					<li><a href="#"><i class="inst"> </i></a></li>
					<li><a href="#"><i class="goog"> </i></a></li>
						<div class="clearfix"></div>	
				</ul>
			</div>
			<div class="header-left">
			
				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Buscar..." type="search"  id="search">
							
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div>
			
<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->

				<div class="ca-r">
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> </div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Carro vacio</a></p>

					</div>
				</div>
					<div class="clearfix"> </div>
			</div>
				
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<h1><a href="index.php">Mattress</a></h1>
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
				
				      <li><a class="color1" href="#">Camas</a>
				      	
			    </li>		
				<li><a class="color4" href="login.php">Login</a></li>			
				<li><a class="color4" href="register.php">Registro</a></li>		
				<li><a class="color6" href="contact.php">Contacto</a></li>	
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Registro</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class=" container">
<div class=" register">
	
	
				 <div class="col-md-6 register-top-grid register-bottom-grid">
					
					 <div>
						<form method="post" action="registro.php">
						 <span>Usuario</span>
						 <input type="text" name="usuario" required="required"> 
						  </div>
					 <div>
						<span>Password</span>
						 <input type="password" name="clave" required="required"> 
					 </div>
					 <div>
						 <input type="submit" value="Enviar">
						 </form>
					 </div>
					   
					 </div>
				     
					 <div class="clearfix"> </div>
			
			</div>
</div>
<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MAS INFORMACION</h4>
				<ul class="nav-bottom">
						<li><a href="http://www.interdominios.com/docs/politica-de-privacidad-de-datos.pdf">Politica de Privacidad</a></li>
						<li><a href="http://www.margencero.com/politica-cookies.pdf">Politica de Cookies</a></li>
				

					</ul>	
				</div>
				
				<div class="col-md-4 amet-sed">
					<h4>NOTICIAS</h4>
					<div class="stay">
						<div class="stay-left">
							<form method="post" action="noticias.php">
								<input type="email" placeholder="email" required="required" name="email"><br>
							
						
								<br><input type="submit" value="Subscribete">
							</form>

						
						</div>
						
							<div class="clearfix"> </div>
			</div>
					
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACTO</h4>
				<?php 
					echo("<p>".$_SESSION["direccion"]."</p>");
					echo("<p>".$_SESSION["telefono"]."</p>");
					echo("<p>".$_SESSION["email"]."</p>");
					
							?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p>2016 Mattress . Todos los derechos reservados</p>
		</div>
		</div>
</body>
</html>
			