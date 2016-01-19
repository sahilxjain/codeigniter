<div class="container">
	<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/users/update">

		<?php extract($user); ?>

		<div class="form-group">
			<label for="name">Enter your username</label>
			<input class="form-control" type="text" name="name" size="20" value="<?php echo $name; ?>" />
		</div>

		<div class="form-group">
			<label for="email">Enter your email</label>
			<td><input class="form-control" type="text" name="email" size="20" value="<?php echo $email; ?>" />	
		</div>

		<div class="form-group">
			<label for="mobile">Enter your Mobile</label>
			<td><input class="form-control" type="text" name="mobile" size="20" value="<?php echo $mobile; ?>" /></td>
		</div>

		<div class="form-group">
			<label for="address">Enter Your Address</label>
			<td><textarea  class="form-control" name="address" rows="5" cols="20"><?php echo $address; ?></textarea></td>
		</div>

		<input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>" />
		<button type="submit" class="btn btn-default">Update</button>
	
	</form>
</div>