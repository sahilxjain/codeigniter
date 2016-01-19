<div class="container">
	<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/users/insert_new_user">

		<table class="table" width="400" border="0" cellpadding="5">

			<div class="form-group">
				<label for="name">Enter your username</label>
				<input class="form-control" type="text" name="name" size="20" />
			</div>

			<div class="form-group">
				<label for="email">Enter your email</label>
				<input class="form-control" type="text" name="email" size="20" />
			</div>

			<div class="form-group">
				<label for="mobile">Enter your Mobile</label>
				<input class="form-control" type="text" name="mobile" size="20" />
			</div>

			<div class="form-group">
				<label for="address">Enter Your Address</label>
				<textarea class="form-control" name="address" rows="5" cols="20"></textarea>
			</div>
					
			<input class="form-control" type="submit" name="submit" value="Send" />

		</table>

	</form>
</div>

<?php //echo $error;?>

<?php echo form_open_multipart('users/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>