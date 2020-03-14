	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class"container">
		<div class="navbar-header">
		<button type="button" class="navbar-toogle" data-toogle="collapse" data-target="#mybar">

			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="index.php" class="navbar-brand">Lifestyle Store</a>
		</div>
		<div>
                        <ul class="nav navbar-nav navbar-right">
                            
                            <?php
                            if(isset($_SESSION['email'])){
                            ?>
				<li><span class="glyphicon glyphicon-shopping-cart"><a href="cart.php">Cart</a></span></li>
				<li><span class="glyphicon glyphicon-user"><a href="settings.php">Settings</a></span></li>
				<li><span class="glyphicon glyphicon-log-out"><a href="logout.php">Logout</a></span></li>
			
                            <?php
                            }else{
                               ?>
				<li><span class="glyphicon glyphicon-user"><a href="signup.php">Sign-up </a></span></li>
				<li></li>
				<li><span class="glyphicon glyphicon-log-in"><a href="login.php">Login</a></span></li>
                                <?php
                            }
                            ?>
			</ul>
		</div>
		</div>
	</div>
            