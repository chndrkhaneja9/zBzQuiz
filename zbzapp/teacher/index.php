<?php
require_once('../config.php');
$titleset="Teacher's login";
include('header.php');
?>
<!--========================================================================== Content Part 1 =====================================================================================-->

	<div class="wrapper">

						<div class="grids">
						<h2>Welcome to zBzQuiz Web App Interface</h2>
																<div class="grid-6 grid grey">
																	<h5>Teacher's Login</h5>
																	
																	<br>

<?php 

   
 if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['uname']))
	{
		echo "<h3>Account Status</h3>";
		  if($_SESSION['ulastlogintime']==NULL)
		{
     echo "<p>Username: <i><strong>".$_SESSION['uname']."</strong></i><br> User Email: <i><strong>".$_SESSION['uemail']."</strong></i><br></p>";  
    }
    else
    {
    	echo "<p>Username: <i><strong>".$_SESSION['uname']."</strong></i><br> User Email: <i><strong>".$_SESSION['uemail']."</strong></i><br> Last Session Time: <i><strong>".$_SESSION['ulastlogintime']."</strong></i></p>";
    	}    
?>
<p><a class="button" href="chklogout.php">Log out!</a></p>
</div>
	<div class="grid-6 grid green">	
	<h3>Quiz Manager</h3>
	<p><a href="coursemgr.php">Manage Courses</a></p>
	<p>View Results</p>		
	</div>				
		
<?php   
	}
 else
  	{
		echo "<p><b>You are currently not logged in!</b></p>"; ?>
	
				<h5>Teacher's Login</h5>
			<form name="hongkiat" id="hongkiat-form" method="post" action="chklogin.php">
																					<section id="aligned">
																				<p>		<input type="text" name="username" id="username" placeholder="Your username" autocomplete="off" tabindex="1" class="txtinput">
																						<input type="password" name="password" id="userpass" placeholder="Your password" autocomplete="off" tabindex="2" class="txtinput"></p>
																			<section>
																			<section id="buttons">
																		<p>				<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
																						<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Log In">
																						
																						<br style="clear:both;"></p>
																					</section>
																		</form>
																		
																	<p>	<a class="button" href="tearegister.php">Sign Up!</a></p>
	
<?php
	}
?>
																

								

			</div><!--end of grids-->

		</div><!--end of wrapper-->
<hr />


<?php
include('footer.php');
?>