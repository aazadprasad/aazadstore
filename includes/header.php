<!-- option on the navbar change according to login or not logined user -->

<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MYNAVBAR">

				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				
				
			</button>
			<a href="index.php" class="navbar-brand">Aazad's Store</a>
		</div>
		<div>
			<div class="collapse navbar-collapse" id="MYNAVBAR">
				<ul class="nav navbar-nav navbar-right">
					<!-- Checking user logined or not by Session email -->
					<?php
	 					if (isset($_SESSION['Email'])) {
	 				?>

	 				<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart">&nbsp</span> Cart </a></li>

	 				<li><a href = "settings.php?pass_error=&pass_match_error="><span class = "glyphicon glyphicon-user">&nbsp</span> 
					Settings</a></li>

	 				<li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in">&nbsp</span> Logout</a></li>

					
					<?php } else { ?>
					<li><a href="signup.php"><span class="glyphicon glyphicon-user">&nbsp</span>Sign Up</a></li>
					<li><a href="login.php "><span class="glyphicon glyphicon-log-in">&nbsp</span>Login</a></li>
					<?php } ?>

				</ul>
			</div>
		</div>
	</div>
</nav>	
	










