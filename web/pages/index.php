<?php
include '../includes/header.php';
?>

<div id='about-content' class='page-section' >
 	 <div class='my-bg'>
    		<img src="<?php echo THEME_PATH;?>images/nav-bg.jpg" />
    </div>
    a
</div>
<div id='bussiness-content' class='page-section' >
	<div class='my-bg'>
    		<img src="<?php echo THEME_PATH;?>images/bussiness.jpg" />
    </div>
    <div class="container-fluid">
	    <div class='row bussiniess-list'>
	    	<div class="col-md-4 col-sm-4 col-xs-4"><div class='my-circle my-red'>bussiness</div></div>
	    	<div class="col-md-4  col-sm-4  col-xs-4"><div class='my-circle my-orange'>bussiness</div></div>
	    	<div class="col-md-4  col-sm-4  col-xs-4"><div class='my-circle my-blue'>bussiness</div></div>
	    </div>
    </div>
</div>
<div id='portfolio-content' class='page-section' >
	<div class='my-bg'>
    		<img src="<?php echo THEME_PATH;?>images/nav-bg.jpg" />
    </div>
c</div>
<div id='contact-content' class='page-section' >
	<div class='my-bg'>
    		<img src="<?php echo THEME_PATH;?>images/nav-bg.jpg" />
    </div>
    <div class='form-container'>
    	<form class="form-horizontal" role="form">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox"> Remember me
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign in</button>
		    </div>
		  </div>
		</form>
    </div>
</div>
<?php
include '../includes/footer.php';
?>