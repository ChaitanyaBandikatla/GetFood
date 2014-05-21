<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.css">
<?php echo form_open('Login/login') ?> 
<?php echo validation_errors('<p style="color:#F00">'); ?>
<div class="container" style="margin-top:160px;margin-left:150px;">
	<div class="row">
	<div class="col-md-5 col-md-offset-3">
    	<div class="panel panel-default">
  			<div class="panel-heading"><h3 class="panel-title"><strong>Sign in </strong></h3></div>
  				<div class="panel-body">
					<div class="form-group">
    					<label for="Username">Username or Email</label>
						<input type="text" class="form-control" name="uname" placeholder="Enter Username">
  					</div>
  					<div class="form-group">
    					<label for="pwd">Password </label>
    					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
  					</div>
					<div class="form-group">
      					<div class="col-md-5" style="margin-left:40px;">
							<button type="submit" class="btn btn-lg btn-success">Sign in</button>
      					</div>
      					<div class="col-md-4" style="margin-left:-30px;">
        					<button id="forpass" name="forpass" class="btn btn-lg btn-warning">I forgot my password</button>
     					</div>
     				</div>  
  				</div>
		</div>
	</div>
</div>
</div> --><!-- 
<div class="container" style="margin-top:100px;">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php echo form_close();?>
<script type="text/javascript" src="<?=base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assets/js/bootstrap.min.js'?>"></script>