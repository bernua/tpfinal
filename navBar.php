		<div class="row">
				<div class="col-md-10 col-md-offset-1">

					<nav class="navbar navbar-default fixed-top navbar-estilo" role="navigation">
					  	<div class="container-fluid">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        	<span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
						     	</button>
						      	<a class="navbar-brand" href="index.php">
									<img src="imgs/cam.png" width="40px" height="40px" />
								</a>
						    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						    
					        <ul class="nav navbar-nav navbar-right">
				            	<?php									
									if(isset($_SESSION['usuario'])) {
										echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>';
									}
									else{
										echo '<li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Iniciar Sesion</a></li>';
									}
								?>
								
				            </ul>
					    </div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav><!-- /.navbar navbar-default fixed-top -->
			</div><!-- /.col-md-10 col-md-offset-1 -->
		</div><!-- /.row -->