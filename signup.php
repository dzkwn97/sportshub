<?php
	include_once 'header.php';
?>

<style type="text/css"></style>

<section class="main-container">
	<div class="main-wrapper">
		<h2>&nbsp;&nbsp;Customer Details</h2>
		<form class="signup-form" action="signup.inc.php" method="POST">
			<table>
				<tr><td><label for="Name">Name: </label>                
 				&nbsp;<td><input type="text" name="first" placeholder="Firstname">&nbsp;<input type="text" name="last" placeholder="Lastname">
				&nbsp;<tr/>
				&nbsp;<tr><td><label for="E-mail">E-mail: </label>
  				&nbsp;<td><input type="text" name="email" placeholder="E-mail">
				&nbsp;<tr/>
				&nbsp;<tr><td><label for="Address">Address: </label>
				&nbsp;<td><input type="text" style="height:200px;width:345px;" name="address" placeholder="Address">
				&nbsp;<tr/>
				&nbsp;<tr><td><label for="Username">Contact number: </label>
				&nbsp;<td><input type="text" name="contact" placeholder="Contact Number">
				&nbsp;<tr/>
				&nbsp;<tr><td><label for="Password">Credit Card Number: </label>
				&nbsp;<td><input type="text" name="ccn" placeholder="Credit Card Number">
				&nbsp;<tr/>
				&nbsp;<tr><td><label for="Submit">&nbsp;</label>
				&nbsp;<td><button type="submit" name="submit">Purchase Item</button>
				&nbsp;<tr/>
			</table>
			
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>